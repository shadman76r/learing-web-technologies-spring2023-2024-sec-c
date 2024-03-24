<?php

class db {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "Admin";

    function openConn() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    // Admin login
    function loginAdmin($conn, $uname, $pass) {
        $sqlstr = "SELECT uname, pass FROM admin WHERE uname = '$uname' AND pass = '$pass'";
        return $conn->query($sqlstr);
    }

    // Add admin
    function addAdmin($conn, $uname, $pass, $email) {
        $sqlstr = "INSERT INTO admin (uname, pass, email) VALUES ('$uname', '$pass', '$email')";
        return $conn->query($sqlstr);
    }

    // Search admin by uname
    function searchAdmin($conn, $uname) {
        $sqlstr = "SELECT * FROM admin WHERE uname = '$uname'";
        return $conn->query($sqlstr);
    }

    // Delete admin by username
    function deleteAdmin($conn, $uname) {
        $sqlstr = "DELETE FROM admin WHERE uname = '$uname'";
        return $conn->query($sqlstr);
    }
    
    // Retrieve all admin data
    function getAllAdmins($conn) {
        $sqlstr = "SELECT * FROM admin";
        return $conn->query($sqlstr);
    }

    // addEmployee 
    function addEmployee($conn, $fname, $lname, $age, $gender, $email, $contact, $address, $section) {
        $sqlstr = "INSERT INTO employee (fname, lname, age, gender, email, contact, address, section) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlstr);
        $stmt->bind_param("ssisssss", $fname, $lname, $age, $gender, $email, $contact, $address, $section);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    function getAllEmployees($conn) {
        $sqlstr = "SELECT * FROM employee";
        return $conn->query($sqlstr);
    }

    function updateEmployee($conn, $employee_id, $fname, $lname, $email, $section, $contact) {
        $sqlstr = "UPDATE employee SET fname='$fname', lname='$lname', email='$email', section='$section', contact='$contact' WHERE employee_id='$employee_id'";
        return $conn->query($sqlstr);
    }

    function deleteEmployeeById($conn, $id) {
        $sqlstr = "DELETE FROM employee WHERE id = '$id'";
        return $conn->query($sqlstr);
    }

    function searchEmployeeById($conn, $employee_id) {
        $sqlstr = "SELECT * FROM employee WHERE employee_id = '$employee_id'";
        return $conn->query($sqlstr);
    }

    function searchEmployeeByPhone($conn, $phone) {
        $sqlstr = "SELECT * FROM employee WHERE phone = '$phone'";
        return $conn->query($sqlstr);
    }

    function addWarehouse($conn, $name, $location) {
        $sqlstr = "INSERT INTO warehouse (name, location) VALUES ('$name', '$location')";
        return $conn->query($sqlstr);
    }

    function removeWarehouseById($conn, $id) {
        $sqlstr = "DELETE FROM warehouse WHERE id = '$id'";
        return $conn->query($sqlstr);
    }

    function getCustomerSupportBySection($conn, $section) {
        $sqlstr = "SELECT email, phone FROM employee WHERE section = '$section'";
        return $conn->query($sqlstr);
    }

    function closeConn($conn) {
        $conn->close();
    }
}

?>