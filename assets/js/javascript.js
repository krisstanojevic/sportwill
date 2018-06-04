$(document).ready(function () {
    $(".employer").click(function () {
        var id = $(this).data('id');

        //console.log(id);
        $.ajax({
            method : "GET",
            url : "php/ajax_employers.php",
            dataType : 'json',
            data : {
                idEmployer : id
            },
            success : function(data) {
                //console.log(data[0]);
                
                //Ja sam uzela html elemente iz aboutview.php i popunila ih odavde, ono sto uhavi iz baze,
                //sa imenom osobe, opisom osobe, linkovima... za onaj opis (biografiju)
                //koja ce da se prikaze kad se klikne 
                
                document.getElementById('employerView').style.display = "block";
                document.getElementById('name_surname').textContent = "About " + data[0].name + " " + data[0].surname;
                document.getElementById('description').textContent = data[0].description;
                document.getElementById('facebook').setAttribute('href', data[0].facebook);
                document.getElementById('instagram').setAttribute('href', data[0].instagram);
                document.getElementById('twitter').setAttribute('href', data[0].twitter);
            },
            error : function (xhr, status, messsage) {
                alert(status);
            }

        });
    });
});