$(document).ready(function() {

$("#button").click(function(event) {
  logUserIn();
});

function logUserIn(){
  var formData = $("form").serialize();

  $.post("/phpscripts/loginUser.php",
        formData,
        function(data) {
          console.log(data);
  });
}
});
