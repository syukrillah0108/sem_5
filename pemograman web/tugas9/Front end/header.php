<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  tugas9
  <!-- DataTables JavaScript -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>


<body>

    <nav class="navbar navbar-expand-md navbar-light bg-info">
        <a class="navbar-brand text-white" href="#" onclick="dashboard()">Manajemen Data Pengguna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"onclick="keloladata()">Kelola Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="tambah()">Tambah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

    function dashboard() {
      window.location.href = 'index.php';
    }
    function keloladata() {
      window.location.href = 'kelola.php';
    }
    function tambah() {
      window.location.href = 'tambah.php';
    }

function logout() {
    // Mendapatkan session_token dari tempat penyimpanan yang sesuai (misalnya, cookie atau localStorage)
    const sessionToken = localStorage.getItem('session_token'); // Gantilah dengan cara yang sesuai jika perlu
    // Hapus 'nama' dari localStorage saat logout
    localStorage.removeItem('nama');
    // Membuat objek FormData
    const formData = new FormData();
    formData.append('session_token', sessionToken);

    // Konfigurasi Axios untuk logout
    axios.post('https://nova-agustina.my.id/22cid/Syukrillah/tugas9/logout.php', formData)
    .then(response => {
        // Handle respons dari server
        if (response.data.status == 'success') {
            // Jika logout berhasil, arahkan kembali ke halaman login
            localStorage.removeItem('nama');
            localStorage.removeItem('session_token');
            window.location.href = 'login.php';
        } else {
            // Jika logout gagal, tampilkan pesan kesalahan
            alert('Logout failed. Please try again.');
        }
    })
    .catch(error => {
        // Handle kesalahan koneksi atau server
        console.error('Error during logout:', error);
    });
}
</script>

</body>
</html>
