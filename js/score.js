$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "app/get_score.php",
        data: "",
        success: function (response) {
          $('#score').html(response);
        },
    });
});