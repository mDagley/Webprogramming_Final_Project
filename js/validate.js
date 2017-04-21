$(document).ready(function() {
   
    $("#email").after('<span class="info">Please enter a valid email </span>');
	$("#email").focus(function(){
        $(this).next("span").remove();
         $("#email").prev("span").remove();
        $("#email").removeClass("ok");
        $("#email").removeClass("error");
        $("#email").after('<span class="info">Please enter a valid email </span>');
    
});
    
    $("#email").blur(function(){
        $(this).next("span").remove();
        var e = $("#email").val();
        
        if(e.match(/^[A-z0-9]+@[A-z0-9]+\.[A-z]{3}$/)){
            $("#email").removeClass("error");
            $("#email").addClass("ok");
        }
        
        else if(e == ""){
             $(this).addClass("error"); 
            
        }
        
        else{
        $("#email").addClass("error");
        }
    
});
    
    $("#password").focus(function(){
        $("#vpassword").next("span").remove();
        $("#password").removeClass("ok");
        $("#password").removeClass("error");
        $("#vpassword").after('<span class="info">Please enter password [Must be at least 8 characters long]</span>');
    
});
    
    $("#password").blur(function(){
        $("#vpassword").next("span").remove();
        var p = $("#password").val();
        var vp = $("#vpassword").val();
        if(p.match(/^.{8,}/)){
            $("#password").removeClass("error");
            $("#password").addClass("ok");
                if(vp==p) {
                    $("#vpassword").removeClass("error");
                    $("#vpassword").addClass("ok");
                }
                else{ $("#vpassword").addClass("error");}
                    
        }
        
        else if(p=="")
            {
                 $(this).addClass("error"); 
                
                
            }
        
        else{
        $("#password").addClass("error");
        $("#vpassword").addClass("error");
        }
    
});
    
    $("#vpassword").focus(function(){
        $(this).next("span").remove();
        $("#vpassword").removeClass("ok");
        $("#vpassword").removeClass("error");
        $("#vpassword").after('<span class="info">Please Verify Your Password</span>');
    
});
    
    $("#vpassword").blur(function(){
        $("#vpassword").next("span").remove();
        var p = $("#password").val();
        var vp = $("#vpassword").val();
        if(p.match(/^.{8,}/) && vp==p){
            $("#vpassword").removeClass("error");
            $("#vpassword").addClass("ok");
        }
        
        else if(vp=="")
            {
                 $(this).addClass("error"); 
            }
        
        else{
        $("#vpassword").addClass("error");
        }
    
});
    
    $("#fn").focus(function(){
        $("#ln").next("span").remove();
        $("#fn").removeClass("ok");
        $("#fn").removeClass("error");
        
    
});
    
    $("#fn").blur(function(){
        $("#ln").next("span").remove();
        var f = $("#fn").val();
        
        if(f.match(/^.{1,}/)){
            
            $("#fn").removeClass("error");
            $("#fn").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#ln").focus(function(){
        $("#ln").next("span").remove();
        $("#ln").removeClass("ok");
        $("#ln").removeClass("error");
        
    
});
    
    $("#ln").blur(function(){
        $("#ln").next("span").remove();
        var l = $("#ln").val();
        
        if(l.match(/^.{1,}/)){
            
            $("#ln").removeClass("error");
            $("#ln").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#address").focus(function(){
        $("#address").next("span").remove();
        $("#address").removeClass("ok");
        $("#address").removeClass("error");
        
    
});
    
    $("#address").blur(function(){
        $("#address").next("span").remove();
        var a = $("#address").val();
        
        if(a.match(/^.{1,}/)){
            
            $("#address").removeClass("error");
            $("#address").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    

        $("#city").focus(function(){
        $("#city").next("span").remove();
        $("#city").removeClass("ok");
        $("#city").removeClass("error");
        
    
});
    
    $("#city").blur(function(){
        $("#city").next("span").remove();
        var a = $("#city").val();
        
        if(a.match(/^.{1,}/)){
            
            $("#city").removeClass("error");
            $("#city").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#state").focus(function(){
        $("#state").next("span").remove();
        $("#state").removeClass("ok");
        $("#state").removeClass("error");
        
    
});
    
    $("#state").blur(function(){
        $("#state").next("span").remove();
        var a = $("#state").val();
        
        if(a.match(/^.{1,}/)){
            
            $("#state").removeClass("error");
            $("#state").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    
    $("#zip").focus(function(){
        $("#zip").next("span").remove();
        $("#zip").removeClass("ok");
        $("#zip").removeClass("error");
        
    
});
    
    $("#zip").blur(function(){
        $("#zip").next("span").remove();
        var a = $("#zip").val();
        
        if(a.match(/^.{1,}/)){
            
            $("#zip").removeClass("error");
            $("#zip").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
        $("#country").focus(function(){
        $("#country").next("span").remove();
        $("#country").removeClass("ok");
        $("#country").removeClass("error");
        
    
});
    
    $("#country").blur(function(){
        $("#country").next("span").remove();
        var a = $("#country").val();
        
        if(a.match(/^.{1,}/)){
            
            $("#country").removeClass("error");
            $("#country").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
        $("#phone").focus(function(){
        $("#phone").next("span").remove();
        $("#phone").removeClass("ok");
        $("#phone").removeClass("error");
        
    
});
    
    $("#phone").blur(function(){
        $("#phone").next("span").remove();
        var a = $("#phone").val();
        a = a.replace(/\D/g,'');
        if(a.length == 10){
            
            $("#phone").removeClass("error");
            $("#phone").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
$("#register").click(function() {
    event.preventDefault();
var email = $("#email").val();
var password = $("#password").val();
var cpassword = $("#vpassword").val();
var fn = $("#fn").val();
var mi = $("#mi").val();
var ln = $("#ln").val();
var address = $("#address").val();
    var address2 = $("#address2").val();
var city = $("#city").val();
var state = $("#state").val();
var zip = $("#zip").val();
var country = $("#country").val();
var phone = $("#phone").val();
var bd = $("#bd").val();
if (email == '' || password == '' || cpassword == '' || fn == '' || ln == '' || address == '' || city == '' || state == '' || zip == '' || country == '' || phone == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password== cpassword)) {
alert("Your passwords don't match. Try again?");
} 
    
    else {
    $.ajax({
        url: '../php/register.php',
        type: "POST",
        async: false,
        data: {
        fn1: fn,
        mi1: mi,
        ln1: ln,
        email1: email,
        password1: password,
        fn1: fn,
        mi1: mi,
        ln1: ln,
        address1: address,
        address21: address2,
        city1: city,
        state1: state,
        zip1: zip,
        country1: country,
        phone1: phone,
        bd1: bd,
    }, 
        success: function(data) {
            console.log(data);
               if(data === "Error"){
                $("#email").addClass("error");

                $("#email").before('<span class="info">This email has already been registered. </span>');
               }
            else{
                
                $("#email").before('<span class="info">Successfully Registered! </span>');
                //$("#email").before('<span class="info">This email has already been registered. </span>');
                $("form")[0].reset();
        $("#phone").removeClass("ok");
        $("#country").removeClass("ok");
        $("#zip").removeClass("ok");
        $("#state").removeClass("ok");
        $("#city").removeClass("ok");
        $("#address").removeClass("ok");
        $("#ln").removeClass("ok");
        $("#fn").removeClass("ok");
        $("#vpassword").removeClass("ok");
        $("#password").removeClass("ok");
        $("#email").removeClass("ok");
            }
            }
      //*  error: function(){
       // alert("Error Function");
    //}
    });
    }
    });
    
    $("#clear").click(function() {
        $("form")[0].reset();
        $("#phone").removeClass("ok");
        $("#country").removeClass("ok");
        $("#zip").removeClass("ok");
        $("#state").removeClass("ok");
        $("#city").removeClass("ok");
        $("#address").removeClass("ok");
        $("#ln").removeClass("ok");
        $("#fn").removeClass("ok");
        $("#vpassword").removeClass("ok");
        $("#password").removeClass("ok");
        $("#email").removeClass("ok");
        
    });
   
});

