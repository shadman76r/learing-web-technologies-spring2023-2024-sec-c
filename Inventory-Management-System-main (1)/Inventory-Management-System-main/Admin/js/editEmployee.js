document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("searchEmployeeForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      var contact = document.getElementById("contactSearch").value;

      fetch("../control/processEditEmployee.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `action=search&contact=${contact}`,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success && data.employee) {
            var form = document.getElementById("editEmployeeForm");
            form.querySelector("#employee_id").value =
              data.employee.employee_id;
            form.querySelector("#fname").value = data.employee.fname;
            form.querySelector("#lname").value = data.employee.lname;
            form.querySelector("#email").value = data.employee.email;
            form.querySelector("#section").value = data.employee.section;
            form.querySelector("#contact").value = data.employee.contact;
            form.querySelector("#age").value = data.employee.age;
            form.querySelector("#gender").value = data.employee.gender;
            form.querySelector("#address").value = data.employee.address;
            document.getElementById("editFormContainer").style.display =
              "block";
          } else {
            alert(data.message);
            document.getElementById("editFormContainer").style.display = "none";
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });

  document
    .getElementById("editEmployeeForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append("action", "update");

      fetch("../control/processEditEmployee.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("Employee updated successfully!");
          } else {
            alert("Failed to update employee: " + data.message);
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
});
