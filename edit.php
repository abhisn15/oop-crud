<?php
require_once 'dbController.php';

$db = new dbController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];

    $sql = "UPDATE t_kelas SET f_nama = '$nama_kelas' WHERE f_idkelas = '$id_kelas'";
    $result = $db->runSQL($sql);

    if ($result) {
        header("Location: index.php"); // Redirect to index.php after successful update
        exit;
    }
} else {
    $id_kelas = $_GET['id'];
    $data = $db->getITEM("SELECT * FROM t_kelas WHERE f_idkelas = '$id_kelas'");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Kelas</title>
</head>

<body>
    <h2>Edit Kelas</h2>
    <form method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $data['f_idkelas']; ?>">
        Nama Kelas: <input type="text" name="nama_kelas" value="<?php echo $data['f_nama']; ?>" required><br>
        <button onclick="alert('Berhasil Update')" type="submit">Update</button>
    </form>

    <a href="index.php">Back to List</a>
    <script>

    </script>
</body>

</html>