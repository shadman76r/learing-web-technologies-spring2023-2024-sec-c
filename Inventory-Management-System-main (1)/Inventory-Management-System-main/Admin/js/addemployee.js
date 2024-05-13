$(document).ready(function () {
  $("#contact").blur(function () {
    var contact = $(this).val();
    if (contact.length === 11) {
      $.ajax({
        url: "../control/ajaxcheckcontact.php",
        type: "POST",
        data: { contact: contact },
        success: function (data) {
          var result = JSON.parse(data);
          if (result.exists) {
            $("#contactError").text("This contact number is already in use.");
            $("#contact").val("");
          } else {
            $("#contactError").text("");
          }
        },
      });
    } else {
      $("#contactError").text("Contact must be 11 digits.");
    }
  });
});
