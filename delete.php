<?php
require_once 'dbController.php';

$db = new dbController();

if (isset($_GET['id'])) {
    $id_kelas = $_GET['id'];

    $sql = "DELETE FROM t_kelas WHERE f_idkelas = '$id_kelas'";
    $result = $db->runSQL($sql);

    if ($result) {
        header("Location: index.php"); // Redirect to index.php after successful deletion
        exit;
    }
}