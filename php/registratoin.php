<?php 
$username="\"".$_REQUEST['uname']."\"";
$email="\"".$_REQUEST['uemail']."\"";
$password="\"".$_REQUEST['upassword']."\"";
$mysql_host = 'localhost'; 
$mysql_user = 'root'; 
$mysql_password = '';
$mysql_database='program_wall';
$mysql_table='accounts'; 
echo $username." ".$email." ".$password;
function recive($id,$username,$email,$password)
{

    $query="SELECT * FROM ".$mysql_table;
        $out=mysqli_query($con,$query);
             if($out)
             {
                        while ($value=mysqli_fetch_array($out)) 
                        {
    	                    echo $value["id"]." ".$value["username"]." ".$value["email"]." ".$value["password"]."<br>";    	
                        }
            }
            else
            {
                        echo $query." ".mysqli_error($con);
            }

}

$con=mysqli_connect("$mysql_host","$mysql_user","$mysql_password");

if($con) 
{	
   
   	   if(mysqli_select_db($con,$mysql_database))
	    {		      
             $query="INSERT INTO accounts (username,email,password) VALUE (".$username.",".$email.",".$password.")";
             if(mysqli_query($con,$query))
             {
                    include '../home.html';
             }
             else
            {
                    echo $query." ".mysqli_error($con);
            }
	       
        }
        else
        {
            echo $query." ".mysqli_error($con);
        }
} 
else
{
    echo $query." ".mysqli_error($con);
}
?> 
 