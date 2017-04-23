$(document).ready(function() {
   
	$("#fn").focus(function(){
        $("#fn").prev("span").remove();
        $("#fn").removeClass("ok");
        $("#fn").removeClass("error");
        
    
});
    
    $("#fn").blur(function(){
        var f = $("#fn").val();
        
        if(f.match(/^.{1,40}/)){
            $("#fn").removeClass("error");
            $("#fn").addClass("ok");
        }
        
        else{
        $("#fn").addClass("error");
        }
    
});
    
   	$("#mi").focus(function(){
        $("#mi").removeClass("ok");
        $("#mi").removeClass("error");
        
    
});
    
    $("#mi").blur(function(){
        var m = $("#mi").val();
        
        if(m.match(/^.{0,40}/)){
            $("#mi").removeClass("error");
            $("#mi").addClass("ok");
        }
        
        else{
        $("#mi").addClass("error");
        }
    
});
    
    	$("#ln").focus(function(){
        $("#ln").removeClass("ok");
        $("#ln").removeClass("error");
        
    
});
    
    $("#ln").blur(function(){
        var l = $("#ln").val();
        
        if(l.match(/^.{1,40}/)){
            $("#ln").removeClass("error");
            $("#ln").addClass("ok");
        }
        
        else{
        $("#ln").addClass("error");
        }
    
});
    
    
    
$("#register").click(function() {
    event.preventDefault();
var fn = $("#fn").val();
var mi = $("#mi").val();
var ln = $("#ln").val();

if (fn == '' || ln == '' ) {
alert("Please fill all required fields...!!!!!!");
}

    
    else {
    $.ajax({
        url: 'php/author.php',
        type: "POST",
        async: false,
        data: {
        fn1: fn,
        mi1: mi,
        ln1: ln,
       
    }, 
        success: function(data) {
            console.log(data);
              
            
                
                $("#fn").before('<span class="info">Successfully Added/Updated!<br/> </span>');
                
                $("form")[0].reset();
        $("#fn").removeClass("ok");
        $("#mi").removeClass("ok");
        $("#ln").removeClass("ok");
       
            
            }
      //*  error: function(){
       // alert("Error Function");
    //}
    });
    }
    });
    
    $("#clear").click(function() {
        $("form")[0].reset();
        $("#fn").removeClass("ok");
        $("#mi").removeClass("ok");
        $("#ln").removeClass("ok");
        
        
    });
   
});

