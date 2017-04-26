
$(document).ready(function() {
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

var id = getUrlParameter('id');

   
    
if(id!=undefined){
    $("#id").val(id);
    console.log("ID: "+id);
    

}

   
    
	$("#isbn").focus(function(){
        $("#binding").next("span").remove();
         $("#isbn").prev("span").remove();
        $("#isbn").removeClass("ok");
        $("#isbn").removeClass("error");
        $("#binding").after('<span class="info">Please enter a 13 Digit ISBN </span>');
    
});
    
    $("#isbn").blur(function(){
        $(this).next("span").remove();
        var i = $("#isbn").val();
        
        if(i.match(/^\d{12}[\d|X]$/)){
            $("#isbn").removeClass("error");
            $("#isbn").addClass("ok");
        }
        
        else if(i == ""){
             $(this).addClass("error"); 
            
        }
        
        else{
        $("#isbn").addClass("error");
        }
    
});
    
    $("#binding").focus(function(){
        $("#title").next("span").remove();
        $("#binding").removeClass("ok");
        $("#binding").removeClass("error");
        
    
});
    
    $("#binding").blur(function(){
        $(this).next("span").remove();
        var b = $("#binding").val();
        
        if(b==""){
            
             $(this).addClass("error"); 
            
              
                    
        }
        
        else 
            {
            $("#binding").removeClass("error");
            $("#binding").addClass("ok");
                
                
            }
        
        
    
});
    
    $("#title").focus(function(){
        $("#binding").next("span").remove();
        $("#title").removeClass("ok");
        $("#title").removeClass("error");
        $("#title").after('<span class="info">Please enter a title (Max 100 characters)</span>');
    
});
    
    $("#title").blur(function(){
        $("#title").next("span").remove();
        var t = $("#title").val();
        if(t.match(/^.{1,100}/)){
            $("#title").removeClass("error");
            $("#title").addClass("ok");
        }
        
        else{
        $("#title").addClass("error");
        }
    
});
    
    $("#publisher").focus(function(){
        $("#pages").next("span").remove();
        $("#publisher").removeClass("ok");
        $("#publisher").removeClass("error");
        
    
});
    
    $("#publisher").blur(function(){
        $("#pages").next("span").remove();
        var p = $("#publisher").val();
        
        if(p.match(/^.{1,}/)){
            
            $("#publisher").removeClass("error");
            $("#publisher").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#pages").focus(function(){
        $("#pages").next("span").remove();
        $("#pages").removeClass("ok");
        $("#pages").removeClass("error");
        
    
});
    
    $("#pages").blur(function(){
        $("#pages").next("span").remove();
        var pgs = $("#pages").val();
        
        if(pgs.match(/^[0-9]{1,5}$/)){
            
            $("#pages").removeClass("error");
            $("#pages").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#genre").focus(function(){
        $("#genre").next("span").remove();
        $("#genre").removeClass("ok");
        $("#genre").removeClass("error");
        
    
});
    
    $("#genre").blur(function(){
        $("#genre").next("span").remove();
        var g = $("#genre").val();
        
        if(g!=""){
            
            $("#genre").removeClass("error");
            $("#genre").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    

        $("#price").focus(function(){
        $("#price").next("span").remove();
        $("#price").removeClass("ok");
        $("#price").removeClass("error");
        
    
});
    
    $("#price").blur(function(){
        $("#price").next("span").remove();
        var pr = $("#price").val();
        var newPrice = pr.replace(/[^0-9\.]/g, '');
        if(newPrice.match(/^\d*\.?\d*$/)){
            
            $("#price").removeClass("error");
            $("#price").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    $("#qty").focus(function(){
        $("#qty").next("span").remove();
        $("#qty").removeClass("ok");
        $("#qty").removeClass("error");
        
    
});
    
    $("#qty").blur(function(){
        $("#qty").next("span").remove();
        var q = $("#qty").val();
        
        if(q.match(/^([0-9]|[1-9][0-9]|[1-9][0-9][0-9])$/)){
            
            $("#qty").removeClass("error");
            $("#qty").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
    
    $("#author").focus(function(){
        $("#author").next("span").remove();
        $("#author").removeClass("ok");
        $("#author").removeClass("error");
        
    
});
    
    $("#author").blur(function(){
        $("#author").next("span").remove();
        var a = $("#author").val();
        
        if(a != ""){
            
            $("#author").removeClass("error");
            $("#author").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
    
        $("#description").focus(function(){
        $("#description").next("span").remove();
        $("#description").removeClass("ok");
        $("#description").removeClass("error");
        
    
});
    
    $("#description").blur(function(){
        $("#description").next("span").remove();
        var d = $("#description").val();
        
        if(d.match(/^.{1,1000}/)){
            
            $("#description").removeClass("error");
            $("#description").addClass("ok");
        }
        
        else 
            {
            $(this).addClass("error"); 
            
            }
        
        
    
});
  var imgName ="";
$('#img').change(function () {
    //sendFile(this.files[0])
    imgName = this.files[0].name;
                 });

function sendFile(file) {
    $.ajax({
        type: 'post',
        url: '/targeturl?name=' +file.name,
        data: file,
        success: function () {
            
        },
        xhrFields: {
            onprogress: function (progress){
                var percentage = Math.floor((progress.total/progress.totalSize)*100);
                console.log('progress', percentage);
                if(percentage === 100){
                    console.log('Done!');
                }
            }
        },
        processData: false,
        contentType: file.type
    });
}
 
    
$("#register").click(function() {
    event.preventDefault();
var isbn = $("#isbn").val();
var binding = $("#binding").val();
var title = $("#title").val();
var publish = $("#publish").val();
var publisher = $("#publisher").val();
var pages = $("#pages").val();
var genre = $("#genre").val();
var price = $("#price").val();
var qty = $("#qty").val();
var author = $("#author").val();
var description = $("#description").val();
var subgenre = [];
        $.each($("input[name='subgenre']:checked"), function(){            
            subgenre.push($(this).val());
        });
var img = imgName;
var flag = $("#flag").val();

if (isbn == '' || binding == '' || publisher == '' || pages == '' || genre == '' || price == '' || qty == '' || author == '' || description == '' || title=='') {
alert("Please fill all fields...!!!!!!");
}

    
    else {
    $.ajax({
        url: 'php/book.php',
        type: "POST",
        async: false,
        data: {
        publisher1: publisher,
        pages1: pages,
        isbn1: isbn,
        binding1: binding,
        title1: title,
        publish1: publish,
        pages1: pages,
        genre1: genre,
        price1: price,
        qty1: qty,
        author1: author.join(", "),
        description1: description,
        subgenre1: subgenre.join(", "),
        img1: img,
        id1: id,
        flag1: flag,
       
    }, 
        success: function(data) {
            console.log(data);
              
            
                
                $("#id").before('<span class="info">Successfully Added/Updated!<br/> </span>');
                
                $("form")[0].reset();
        $("#description").removeClass("ok");
        $("#author").removeClass("ok");
        $("#qty").removeClass("ok");
        $("#price").removeClass("ok");
        $("#genre").removeClass("ok");
        $("#pages").removeClass("ok");
        $("#publisher").removeClass("ok");
        $("#title").removeClass("ok");
        $("#binding").removeClass("ok");
        $("#isbn").removeClass("ok");
        window.location.reload(true);
            }
      //*  error: function(){
       // alert("Error Function");
    //}
    });
    }
    });
    
    $("#clear").click(function() {
        $("form")[0].reset();
        $("#description").removeClass("ok");
        $("#author").removeClass("ok");
        $("#qty").removeClass("ok");
        $("#price").removeClass("ok");
        $("#genre").removeClass("ok");
        $("#pages").removeClass("ok");
        $("#publisher").removeClass("ok");
        $("#title").removeClass("ok");
        $("#binding").removeClass("ok");
        $("#isbn").removeClass("ok");
        
    });
   
});

