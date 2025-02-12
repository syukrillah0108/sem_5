<?php include('header.php'); ?>
<div class="container mt-5">
    <!-- Konten dashboard -->
    <div class="mt-4">
    <img src="https://nova-agustina.my.id/22cid/Syukrillah/tugas9/img/switch.png" alt="Dashboard Image" class="img-fluid rounded shadow small-img">
        </div>
        
        <style>
            .small-img {
                width: 200px; /* Menentukan ukuran lebar gambar */
                height: auto; /* Agar proporsi gambar tetap terjaga */
                margin: 20px; /* Margin 20px di semua sisi (atas, kanan, bawah, kiri) */
            }
        </style>


    <h2 id="welcomeMessage">Selamat datang di Dashboard</h2>
    <p>Halo, <strong id="userName">Pengguna</strong>!</p>
    <p>Ini adalah halaman Web sederhana dengan menggunakan API Hosting.</p>

    <!-- Tombol-tombol -->
    <div class="mt-4">
        <button class="btn btn-primary mr-3" onclick="location.href='kelola.php'">Kelola Data</button>
        <button class="btn btn-success" onclick="location.href='tambah.php'">Tambah Data</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Menampilkan nama pengguna dari localStorage
    document.getElementById('userName').innerText = localStorage.getItem('nama') || 'Pengguna';
</script>

<style>
    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        color: #333;
    }

    strong {
        color: #007bff;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .btn-success {
        background-color: #28a745;
        color: white;
        border: none;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .mt-4
