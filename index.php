<?php
require_once 'dbController.php';

$db = new dbController();
$data = $db->getAll("SELECT * FROM t_kelas");

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Daftar Kelas</title>
</head>

<body>
    <div class="container-xxl d-flex flex-column justify-content-center border border-black w-50 p-3 gap-2">
        <h3 class="text-center">Daftar Kelas</h3>
        <table class="table-bordered">
            <tr class="text-center">
                <th>No</th>
                <th>Action</th>
                <th>Nama Kelas</th>
            </tr>
            <?php
            $no = 1;
            foreach ($data as $row) {
            ?>
            <tr class="text-center">
                <td><?php echo $no ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['f_idkelas']; ?>">Edit</a> |
                    <a onclick="alert('Kelas Berhasil dihapus!')"
                        href="delete.php?id=<?php echo $row['f_idkelas']; ?>">Delete</a>
                </td>
                <td><?php echo $row['f_nama']; ?></td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </table>

        <a href="create.php" class="text-center">Tambahkan Kelas Baru</a>
    </div>
</body>

</html>