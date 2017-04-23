$(document).ready(function() {
   
	$("#name").focus(function(){
        $("#name").prev("span").remove();
        $("#name").removeClass("ok");
        $("#name").removeClass("error");
        
    
});
    
    $("#name").blur(function(){
        var f = $("#name").val();
        
        if(f.match(/^.{1,40}/)){
            $("#name").removeClass("error");
            $("#name").addClass("ok");
        }
        
        else{
        $("#name").addClass("error");
        }
    
});
    
   	
    
$("#register").click(function() {
    event.preventDefault();
var name = $("#name").val();


if (name == '' ) {
alert("Please Enter a Valid Name");
}

    
    else {
    $.ajax({
        url: 'php/subgenre.php',
        type: "POST",
        async: false,
        data: {
        name1: name,
        
       
    }, 
        success: function(data) {
            console.log(data);
              
            
                
                $("#name").before('<span class="info">Successfully Added/Updated!<br/> </span>');
                
                $("form")[0].reset();
        $("#name").removeClass("ok");
        
       
            
            }
      //*  error: function(){
       // alert("Error Function");
    //}
    });
    }
    });
    
    $("#clear").click(function() {
        $("form")[0].reset();
        $("#name").removeClass("ok");
       
        
        
    });
   
});

