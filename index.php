<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Buku</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-6">
    <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-6xl">
        <h1 class="text-2xl font-bold mb-4 text-center text-indigo-600">📚 Data Buku</h1>
        <div class="mb-4 text-right">
            <a href="tambah.php" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded">➕ Tambah Buku</a>
        </div>
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-indigo-100">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Judul</th>
                    <th class="border px-4 py-2">Penulis</th>
                    <th class="border px-4 py-2">Stok</th>
                    <th class="border px-4 py-2">Kategori</th>
                    <th class="border px-4 py-2">Penerbit</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC");
            while ($d = mysqli_fetch_assoc($data)) {
            ?>
                <tr class="hover:bg-gray-50">
                    <td class="border px-4 py-2 text-center"><?= $d['id_buku']; ?></td>
                    <td class="border px-4 py-2"><?= $d['judul']; ?></td>
                    <td class="border px-4 py-2"><?= $d['penulis']; ?></td>
                    <td class="border px-4 py-2 text-center"><?= $d['stok']; ?></td>
                    <td class="border px-4 py-2"><?= $d['kategori']; ?></td>
                    <td class="border px-4 py-2"><?= $d['penerbit']; ?></td>
                    <td class="border px-4 py-2 text-center">
                        <a href="ubah.php?id=<?= $d['id_buku']; ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">Ubah</a>
                        <a href="hapus.php?id=<?= $d['id_buku']; ?>" onclick="return confirm('Hapus buku ini?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
