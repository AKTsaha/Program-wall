<?php 
$mysql_host = 'localhost'; 
$mysql_user = 'root'; 
$mysql_password = '';
$mysql_database='program_wall';
$mysql_table='accounts'; 
function insert($username,$email,$password){

    $query="INSERT INTO accounts (username,email,password) VALUE ($username,$email,$password)";

}

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
{	echo "Connected to server<br>";
   
   	   if(mysqli_select_db($con,$mysql_database))
	    {		
		     echo "Database selected<br>";      
               
        
	       
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
 