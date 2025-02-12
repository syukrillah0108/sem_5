<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet“ href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Dashboard</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- DataTables JavaScript -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin-top: 50px;
    }

    .card-header {
      background-color: #28a745;
      color: #fff;
      font-size: 1.5rem;
    }

    .card-body {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
    }

    #newsChart {
      margin-top: 20px;
    }
  </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-info">
        <a class="navbar-brand text-white" href="#" onclick="dashboard()">Manajemen Data Pengguna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="tambahdata()">Tambah Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="keloladata()">Kelola Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
<div class="container mt-5">
    <h2 id="welcomeMessage">Selamat Datang di Dashboard</h2>
</div>

  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
      <div class="card bg-success my-4">
        <div class="card-header">
          Akumulasi Berita
        </div>
        <div class="card-body">
          <h3 id="jumlahBerita" class="text-dark">
            <i class="fas fa-newspaper"></i> Loading...
          </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tahunSelect">Pilih Tahun</label>
      <select class="form-control" id="tahunSelect"></select>
    </div>
  </div>
  <hr>
  
  <h2 class="text-center">GRAFIK JUMLAH BERITA DALAM 1 TAHUN</h2>
  <div class="row">
    <div class="col-md-12">
      <canvas id="newsChart" width="400" height="200"></canvas>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function dashboard() {
            window.location.href = 'index.php';
        }

        function tambahdata() {
            window.location.href = 'tambah.php';
        }

        function keloladata() {
            window.location.href = 'kelola.php';
        }

        function logout() {
            //Mendapatkan session_token dari tempat penyimpanan yang sesuai
            const sessionToken = localStorage.getItem('session_token');
            //Hapus 'nama' dari localStorage saat logout
            localStorage.removeItem('nama');
            //Membuat objek FormData
            const formData = new FormData();
            formData.append('session_token', sessionToken);

            //Konfigurasi Axios untuk logout
            axios.post('https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/logout.php', formData)
                .then(response => {
                    //Handle respons dari server
                    if (response.data.status == 'success') {
                        //Jika logout kembali, arahkan kembali ke halaman login
                        localStorage.removeItem('nama');
                        localStorage.removeItem('session_token');
                        window.location.href = 'login.php';
                    } else {
                        //Jika logout gagal, tampilan pesan kesalahan
                        alert('Logout failed. Please try again.');
                    }
                })
                .catch(error => {
                    //Handle kesalahan koneksi atau server
                    console.error('Error during logout:', error);
                });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script>
// Fungsi untuk mengambil data dari API berdasarkan Tahun menggunakan axios.post
function fetchData(tahun) {
    var formData = new FormData();
    formData.append('tahun', tahun);

    return axios({
        method: 'post',
        url: 'https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/sum_beritatahun.php',
        data: formData,
        headers: { 'Content-Type': 'multipart/form-data' }
    });
}

// Fungsi untuk membuat chart dengan data yang diambil
function createChart(data) {
  var ctx = document.getElementById('newsChart').getContext('2d');

  // Hapus chart yang sudah ada, jika ada
  if (window.myChart) {
      window.myChart.destroy();
  }

  // Membuat chart baru
  window.myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: data.map(item => item.bulan),
          datasets: [{
              label: 'Jumlah Berita',
              data: data.map(item => item.jumlah_berita),
              backgroundColor: 'rgba(75, 192, 192, 0.2)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true,
                  ticks: {
                      stepSize: 1
                  }
              }
          }
      }
  });
}

// Fungsi untuk mengisi select option dengan tahun
function populateSelectOptions(data) {
    var selectElement = document.getElementById('tahunSelect');
    selectElement.innerHTML = ''; // Bersihkan opsi sebelumnya

    data.forEach(item => {
        var option = document.createElement('option');
        option.value = item.tahun;
        option.textContent = item.tahun;
        selectElement.appendChild(option);
    });

    // Pilih tahun terbaru secara default
    if (data.length > 0) {
        var latestYear = data[0].tahun;
        selectElement.value = latestYear;

        // Fetch data terbaru dan buat grafik awal
        fetchData(latestYear)
            .then(response => {
                createChart(response.data);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
}

// Event listener untuk perubahan select option tahun
document.getElementById('tahunSelect').addEventListener('change', function() {
    var selectedYear = this.value;
    fetchData(selectedYear)
        .then(response => {
            createChart(response.data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});

// Inisialisasi select option dengan data tahun dari API
axios.get('https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/select_tahun.php')
  .then(response => {
    populateSelectOptions(response.data);
  })
  .catch(error => {
    console.error('Error fetching tahun data:', error);
  });

// Menampilkan jumlah berita di dashboard
axios.get('https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/sum_berita.php')
  .then(function(response) {
    var dataJumlahBerita = response.data;
    var jumlahBeritaElement = document.getElementById('jumlahBerita');
    jumlahBeritaElement.innerHTML = '<i class="fas fa-newspaper"></i> Jumlah Berita: ' + dataJumlahBerita[0].jumlah_berita;
  })
  .catch(function(error) {
    console.error('Error fetching data:', error);
  });
</script>
</body>

</html>