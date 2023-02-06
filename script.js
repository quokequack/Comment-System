$('#form').on("submit", function(e){
    e.preventDefault();

    var name = $("#name").val();
    var comment = $("#comment").val();

    //console.log(name, comment);
    $.ajax({
        url:'http://localhost/project-1/insert.php',
        method: 'POST',
        data: {name: name, comment: comment},
        dataType:'text',
        success:(function(result){
            $("name").val(" ");
            $("comment").val(" ");
            console.log(result);
        })
    });
});
function getComments(){
    $.ajax({
        url:'http://localhost/project-1/select.php',
        method: 'GET',
        dataType:'json'
    }).done(function(result){
        console.log(result);
        for( var i = 0; i <result.lenght; i++){
            $(".box_comment").prepend("<div class='box-comm'><h4>"+result[i].name+"</h4><p>"+result[i].comment+"</p></div>")
        }
    });
}

getComments();