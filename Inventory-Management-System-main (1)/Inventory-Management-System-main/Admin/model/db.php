<?php

class db {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "Admin";

    private $conn;

    public function __construct() {
        $this->openConn();
    }

    private function openConn() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Admin Parts

    function loginAdmin($uname, $pass) {
        $sqlstr = "SELECT uname, pass FROM admin WHERE uname = '$uname' AND pass = '$pass'";
        return $this->conn->query($sqlstr);
    }

    function addAdmin($conn, $uname, $pass, $email) {
        $sqlstr = "INSERT INTO admin (uname, pass, email) VALUES ('$uname', '$pass', '$email')";
        return $this->conn->query($sqlstr);
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    function searchAdmin($conn, $uname) {
        $sqlstr = "SELECT * FROM admin WHERE uname = '$uname'";
        return $this->conn->query($sqlstr);
    }

    function deleteAdmin($conn, $admin_id) {
        $sqlstr = "DELETE FROM admin WHERE admin_id = '$admin_id'";
        return $this->conn->query($sqlstr);
    }

    function getAdminIdAndUname($conn) {
        $sqlstr = "SELECT admin_id, uname FROM admin";
        return $this->conn->query($sqlstr);
    }
    
    function getAllAdmins($conn) {
        $sqlstr = "SELECT * FROM admin";
        return $this->conn->query($sqlstr);
    }

    // Employee parts

    function addEmployee($conn, $fname, $lname, $age, $gender, $email, $contact, $address, $section) {
        $sqlstr = "INSERT INTO employee (fname, lname, age, gender, email, contact, address, section) VALUES ('$fname', '$lname', $age, '$gender', '$email', '$contact', '$address', '$section')";
        return $this->conn->query($sqlstr);
    }
    

    function contactExists($contact) {
        $sql = "SELECT * FROM employee WHERE contact = '$contact'";
        $result = $this->conn->query($sql);
        return $result->num_rows > 0;
    }

    function getAllEmployees($conn) {
        $sqlstr = "SELECT * FROM employee";
        return $this->conn->query($sqlstr);
    }

    public function escape($string) {
        return $this->conn->real_escape_string($string);
    }
     
    function deleteEmployee($conn, $employee_id) {
        $sqlstr = "DELETE FROM employee WHERE employee_id = $employee_id";
        return $this->conn->query($sqlstr);
    }

    function getEmployeeIdAndContact($conn) {
        $sqlstr = "SELECT employee_id, contact,section FROM employee";
        return $this->conn->query($sqlstr);
    }
    function updateEmployee($employee_id, $fname, $lname, $age, $gender, $contact, $email, $address, $section) {
        $sqlstr = "UPDATE employee SET fname='$fname', lname='$lname', age=$age, gender='$gender', contact='$contact', email='$email', address='$address', section='$section' WHERE employee_id=$employee_id";
        return $this->conn->query($sqlstr);
    }
    
    function searchEmployeeByContact($contact) {
        $sqlstr = "SELECT * FROM employee WHERE contact = '$contact'";
        return $this->conn->query($sqlstr);
    }


    // Warehouse part
    
    function addWarehouse($conn, $warehouse_id, $location, $full_location, $capacity, $no_of_employee) {
        $sqlstr = "INSERT INTO warehouse (warehouse_id, location, full_location, capacity, no_of_employee) VALUES ('$warehouse_id', '$location', '$full_location', '$capacity', '$no_of_employee')";
        return $this->conn->query($sqlstr);
    }
    
    function getAllWarehouse($conn) {
        $sqlstr = "SELECT * FROM warehouse";
        return $this->conn->query($sqlstr);
    }

    function deleteWarehouse($conn, $warehouse_id) {
        $sqlstr = "DELETE FROM warehouse WHERE warehouse_id = $warehouse_id";
        return $this->conn->query($sqlstr);
    }

    function getWarehouseIdAndLocation($conn) {
        $sqlstr = "SELECT warehouse_id, full_location FROM warehouse";
        return $this->conn->query($sqlstr);
    }



    public function closeConn() {
        if ($this->conn != null) {
            $this->conn->close();
        }
    }
}

?>