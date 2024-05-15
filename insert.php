<?php 
require"CONFIG.PHP";
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
        <button class="btn btn-ghost text-xl">Masukan Data Santri Melanggar</button>
    </div>
</nav>

<!-- input name -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="insertdata.php" method="post">
            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="nama"/>
            </label>

            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Pelanggaran</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="pelanggaran"/>
            </label>

            <label class="form-control block">
                <div class="label">
                    <span class="label-text">Sanksi</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" required name="sanksi"/>
            </label>
            <button class="btn btn-neutral mt-5" type="submit">Add</button>
        </form>
    </div>
</div>

</body>
</html>