<?php include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul    = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $penulis  = mysqli_real_escape_string($koneksi, $_POST['penulis']);
    $stok     = (int)$_POST['stok'];
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $penerbit = mysqli_real_escape_string($koneksi, $_POST['penerbit']);

    mysqli_query($koneksi,
        "INSERT INTO buku (judul, penulis, stok, kategori, penerbit)
         VALUES ('$judul', '$penulis', '$stok', '$kategori', '$penerbit')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Buku</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-4 text-center text-indigo-600">Tambah Buku</h1>
    <form method="post" class="space-y-4">
        <input type="text" name="judul" placeholder="Judul Buku" required class="w-full border p-3 rounded">
        <input type="text" name="penulis" placeholder="Penulis" required class="w-full border p-3 rounded">
        <input type="number" name="stok" placeholder="Stok" required class="w-full border p-3 rounded">
        <input type="text" name="kategori" placeholder="Kategori" required class="w-full border p-3 rounded">
        <input type="text" name="penerbit" placeholder="Penerbit" required class="w-full border p-3 rounded">
        <button type="submit" name="simpan" class="bg-indigo-500 hover:bg-indigo-600 text-white w-full py-2 rounded">Simpan</button>
        <a href="index.php" class="block text-center mt-2 text-indigo-600">⬅ Kembali</a>
    </form>
</div>
</body>
</html>
