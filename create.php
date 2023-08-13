<?php
require_once 'dbController.php';

$db = new dbController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kelas = $_POST['nama_kelas'];

    $sql = "INSERT INTO t_kelas (f_nama) VALUES ('$nama_kelas')";
    $result = $db->runSQL($sql);

    if ($result) {
        header("Location: index.php"); // Redirect to index.php after successful insertion
        exit;
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Create New Kelas</title>
</head>

<body>
    <h2 class="m-4">Menambahkan Kelas</h2>
    <form method="POST" class="ms-3" id="Tambah">
        <div class="mb-3">
            <label class="form-label">Nama Kelas</label>
            <input type="text" class="form-control w-50" id="textInput" aria-describedby="textHelp" name="nama_kelas">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <p style="color: red; margin-top: 10px;" id="warning"></p>
        </div>
    </form>

    <script>
    document.getElementById("Tambah").addEventListener("submit", function(event) {
        var textInputValue = document.getElementById("textInput").value;

        if (textInputValue.trim() === "") {
            event.preventDefault();
            warning.innerHTML = "Mohon isi Nama Kelasnya!"
        } else {
            alert("Kelas berhasil ditambahkan!");
            window.location.href = "index.php";
        }
    });
    </script>

</body>

</html>