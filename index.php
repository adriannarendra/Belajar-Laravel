<?php 

require"CONFIG.PHP";
$query="SELECT * FROM tb_pelanggaran";
$sql = mysqli_query($koneksi,$query);
$no = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Catatan Buku Santri</title>
</head>
<body>

<!-- navbar -->
<nav class="mb-5">
    <div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">Pelanggaran Santri</button>
    </div>
</nav>

<!-- button add -->
<div class="p-5">
    <a class="btn btn-active btn-neutral" href="insert.php">Add Data</a>
</div>

<!-- table -->
<div class="overflow-x-auto">
    <table class="table table-zebra">
    <!-- head -->
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Kesalahan</th>
            <th>Sanksi</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    <!-- row 1 -->
        <?php while($result = mysqli_fetch_assoc($sql)){ ?>

        <tr>
            <th><?php echo $no++ ?></th>
            <td><?php echo $result["nama"]; ?></td>
            <td><?php echo $result["kesalahan"]; ?></td>
            <td><?php echo $result["sanksi"]; ?></td>
            <td>
                <a href="edit.php?edit=<?php echo $result["id"] ?>"><button class="btn btn-info">Edit</button></a>
                <a href="delete.php?delete=<?php echo $result["id"] ?>"><button class="btn btn-error">Delete</button></a>
            </td>
        </tr>

        <?php }; ?>
    </tbody>
    </table>
</div>

</body>
</html>