<?php 
require"CONFIG.PHP";

$id = $_GET["edit"];
$query="SELECT * FROM tb_pelanggaran WHERE id = '$id'";
$sql = mysqli_query($koneksi,$query);
$result=mysqli_fetch_assoc($sql);

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
        <button class="btn btn-ghost text-xl">Edit Data Santri Melanggar</button>
    </div>
</nav>

<!-- input name -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="editdata.php" method="post">
            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" value="<?php echo $result['nama'] ?>" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="nama"/>
            </label>

            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Pelanggaran</span>
                </div>
                <input type="text" value="<?php echo $result['kesalahan'] ?>" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="pelanggaran"/>
            </label>

            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Sanksi</span>
                </div>
                <input type="text" value="<?php echo $result['sanksi'] ?>" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="sanksi"/>
                <input type="text" hidden name="id-edit" value="<?php echo $result['id'] ?>">
            </label>
            <button class="btn btn-neutral mt-5" type="submit">Edit</button>
        </form>
    </div>
</div>

</body>
</html>