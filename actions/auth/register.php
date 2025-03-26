<?php
require_once "../utils/Dbconnection.php";
require_once "../utils/clean_inp.php";

$username = Clean_input($_POST["username"]);
$password = Clean_input($_POST["password"]);

$sql = "SELECT count(*) as count from user where username=:username and password=:password;";

//PREPARE THE STATEMENT

$stm = $conn->prepare($sql);
$stm->bindParam(":username", $username);
$stm->bindParam(":password", $password);

//excute the query
$stm->execute();

$res = $stm->fetch(PDO::FETCH_ASSOC);

if ($res["count"] == 0) {
    echo "<script>alert('Password or username Incorrect')</script>";
    header("Location:app/auth/login/index.html");
} else {
    echo "bien";
}


?>