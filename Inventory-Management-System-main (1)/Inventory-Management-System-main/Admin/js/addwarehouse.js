document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("addWarehouseForm");
  form.addEventListener("submit", function (event) {
    var totalCapacity = document.getElementById("total_capacity").value;
    var noOfEmployees = document.getElementById("no_of_employees").value;
    var isValid = true;

    if (parseInt(totalCapacity, 10) < 100) {
      alert("Capacity should be >= 100");
      isValid = false;
    }

    if (parseInt(noOfEmployees, 10) < 5) {
      alert("Employee should be greater than 5");
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});
