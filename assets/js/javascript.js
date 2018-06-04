$(document).ready(function () {
    $(".employer").click(function () {
        var id = $(this).data('id');

        //console.log(id);
        $.ajax({
            method : "GET",
            url : "php/ajax_employers.php",
           // dataType : 'json',
            data : {
                idEmployer : id
            },
            success : function(data) {
                console.log(data);
                $("#employerView").addClass("display");
            },
            error : function (xhr, status, messsage) {
                alert(status);
            }

        });
    });
});