document.addEventListener("DOMContentLoaded", function () {
  fetch("../control/processremoveemployee.php?action=list")
    .then((response) => response.json())
    .then((data) => {
      let tbody = document.getElementById("employee-list");
      data.forEach((employee) => {
        let tr = document.createElement("tr");
        tr.innerHTML = `
                    <td>${employee.employee_id}</td>
                    <td>${employee.contact}</td>
                    <td>${employee.section}</td>
                    <td><button onclick="confirmRemoval(${employee.employee_id})">Delete</button></td>
                `;
        tbody.appendChild(tr);
      });
    })
    .catch((error) => console.error("Error:", error));
});

function confirmRemoval(employeeId) {
  if (confirm("Are you sure you want to remove this employee?")) {
    fetch(
      `../control/processremoveemployee.php?action=delete&employee_id=${employeeId}`
    )
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          window.location.reload();
        } else {
          alert("Error: Could not delete the employee.");
        }
      })
      .catch((error) => console.error("Error:", error));
  }
}
