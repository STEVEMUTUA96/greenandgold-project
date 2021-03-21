<?php

class BackendClass {

    static function getConnection() {
        $conn = mysqli_connect("localhost", "root", "", "greenandgold");
        if (!$conn) {
            die("connection failed" . mysql_errno($conn));
        }
        return $conn;
    }

    static function login($email, $password) {
        $conn = self::getConnection();
        $sql = "SELECT `email`,`password` FROM `login`  WHERE `email`='$email' and `password`='$password' ";
//        fetching data
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) == 1) {
            self::clossconn($conn);
            return self::response(true, "successfull", $row);
        }self::clossconn($conn);
        return self::response(false, "invalid Credentilas!!!");
    }

    static function response($issuccess, $message, $data = null) {
        return array("success" => $issuccess, "message" => $message, "data" => $data);
    }

    static function clossconn($conn) {
        mysqli_close($conn);
    }

//    create datbase
    static function dbTables() {
        $sql = "CREATE DATABASE greenandgold";
        if (mysqli_query($link, $sql)) {
            echo "database created succesfully";
        } else {
            echo "ERROR: could not be able to execute $sql. " . mysqli_error($link);
        }
        //    close connection
        mysqli_close($link);
    }

}
