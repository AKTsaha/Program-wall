var x = 0;
$(".button-bottom-b1").ready(function () { //for the button at bottom of header
    $(".button-bottom-b1").css("border-style", "solid");
    $(".button-bottom-b1").css("border-width", "5px");
    $(".button-bottom-b1").css("border-color", "white");
    $(".button-bottom-b1").css("border-top-right-radius", "10%");
    $(".button-bottom-b1").css("border-top-left-radius", "10%");
    $(".button-bottom-b1").css("background", "white");
    $(".button-bottom-b1").css("color", "#ac00e6");
    $(".button-bottom-b1").css("font-weight", "500");
});
$(".name").html("ankit");
$(".like").click(function () {
    if(x==1){
        $(".like").css("background-image", 'url("../icon/ok_52px.png")');
        x=0;
    }
    else{
        $(".like").css("background-image", 'url("../icon/ok_100px.png")'); 
        x=1;
    }
});