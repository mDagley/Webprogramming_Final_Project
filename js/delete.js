

function deleteBook(id){
event.preventDefault();
console.log("ID: "+id);

    $.ajax({
            url: 'php/delete.php',
            type: "POST",
            data: {
            id1: id,


        }, 
            success: function(data){
            window.location.reload(true);
}
          
        });
}
