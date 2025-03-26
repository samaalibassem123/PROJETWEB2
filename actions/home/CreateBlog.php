<?php
session_start();
require_once "../utils/Dbconnection.php";
require_once "../utils/clean_inp.php";

$title = Clean_input($_POST["title"]);
$desc = Clean_input($_POST["desc"]);
$text = Clean_input($_POST["text"]);
$catg = Clean_input($_POST["catg"]);

$username = $_SESSION["username"];


$sql = "INSERT INTO (blog_title, blog_description, blog_text, blog_owner, catg_id) values (:title, :desc, :text, :owner, :categ);";

//prepare the statement
$stm = $conn->prepare($sql);

$stm->bindParam(":title", $title);
$stm->bindParam(":desc", $desc);
$stm->bindParam(":text", $text);
$stm->bindParam(":owner", $username);
$stm->bindParam(":categ", $catg);

try {
    $stm->execute();
    echo "bien";
} catch (PDOException $e) {
    echo "ahh " . $e->getMessage();
}

?>