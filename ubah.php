<?php include 'koneksi.php';

$id = $_GET['id'];
$buku = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'"));

if (isset($_POST['update'])) {
    $judul    = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $penulis  = mysqli_real_escape_string($koneksi, $_POST['penulis']);
    $stok     = (int)$_POST['stok'];
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $penerbit = mysqli_real_escape_string($koneksi, $_POST['penerbit']);

    mysqli_query($koneksi,
        "UPDATE buku SET judul='$judul', penulis='$penulis', stok='$stok',
         kategori='$kategori', penerbit='$penerbit'
         WHERE id_buku='$id'");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Ubah Buku</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-4 text-center text-indigo-600">Ubah Buku</h1>
    <form method="post" class="space-y-4">
        <input type="text" name="judul" value="<?= $buku['judul']; ?>" required class="w-full border p-3 rounded">
        <input type="text" name="penulis" value="<?= $buku['penulis']; ?>" required class="w-full border p-3 rounded">
        <input type="number" name="stok" value="<?= $buku['stok']; ?>" required class="w-full border p-3 rounded">
        <input type="text" name="kategori" value="<?= $buku['kategori']; ?>" required class="w-full border p-3 rounded">
        <input type="text" name="penerbit" value="<?= $buku['penerbit']; ?>" required class="w-full border p-3 rounded">
        <button type="submit" name="update" class="bg-yellow-500 hover:bg-yellow-600 text-white w-full py-2 rounded">Update</button>
        <a href="index.php" class="block text-center mt-2 text-indigo-600">⬅ Kembali</a>
    </form>
</div>
</body>
</html>
