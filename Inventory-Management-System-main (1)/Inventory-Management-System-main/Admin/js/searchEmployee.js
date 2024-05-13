document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("searchForm");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const contact = document.getElementById("contactInput").value;
    const resultsTable = document.getElementById("resultsTable");
    const tbody = resultsTable.querySelector("tbody");

    fetch("../control/processsearchEmployee.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `contact=${contact}`,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success && data.data) {
          tbody.innerHTML = `
          <tr>
            <td>${data.data.employee_id}</td>
            <td>${data.data.fname}</td>
            <td>${data.data.lname}</td>
            <td>${data.data.age}</td>
            <td>${data.data.gender}</td>
            <td>${data.data.contact}</td>
            <td>${data.data.email}</td>
            <td>${data.data.address}</td>
            <td>${data.data.section}</td>
          </tr>
        `;
          resultsTable.style.display = "table";
        } else {
          tbody.innerHTML = "<tr><td colspan='9'>No results found.</td></tr>";
          resultsTable.style.display = "table";
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});
