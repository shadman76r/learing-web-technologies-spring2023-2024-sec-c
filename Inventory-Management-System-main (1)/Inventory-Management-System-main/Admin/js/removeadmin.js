document.addEventListener("DOMContentLoaded", function () {
  fetch("../control/processremoveadmin.php?action=list")
    .then((response) => response.json())
    .then((data) => {
      let tbody = document.getElementById("admin-list");
      data.forEach((admin) => {
        let tr = document.createElement("tr");
        tr.innerHTML = `
                    <td>${admin.admin_id}</td>
                    <td>${admin.uname}</td>
                    <td><button onclick="confirmRemoval(${admin.admin_id})">Delete</button></td>
                `;
        tbody.appendChild(tr);
      });
    })
    .catch((error) => console.error("Error:", error));
});

function confirmRemoval(adminId) {
  if (confirm("Are you sure you want to remove this admin?")) {
    fetch(`../control/processremoveadmin.php?action=delete&admin_id=${adminId}`)
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          window.location.reload();
        } else {
          alert("Error: Could not delete the admin.");
        }
      })
      .catch((error) => console.error("Error:", error));
  }
}
