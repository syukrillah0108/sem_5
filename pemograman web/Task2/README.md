# Halaman `index.html`

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Pemrograman - Halaman Awal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header class="bg-primary text-white text-center py-4">
    <img src="./images/logo.jpg" alt="Logo Belajar Pemrograman" width="100" class="mb-2 rounded-circle">
    <h1>Selamat Datang di Kelas Hibrida</h1>
    <p>Platform belajar pemrograman yang menyediakan materi dari pemula hingga mahir.</p>
    <div class="mt-3">
      <a href="login.html" class="btn btn-light mr-2">Login</a>
      <a href="register.html" class="btn btn-light">Register</a>
    </div>
  </header>

  <main class="container my-5">
    <h2 class="text-center">Apa yang Akan Anda Pelajari?</h2>
    <div class="row mt-4">
      <div class="col-md-4">
        <h3>Pemrograman Dasar</h3>
        <p>Pelajari dasar-dasar pemrograman mulai dari variabel, kondisi, hingga loop.</p>
      </div>
      <div class="col-md-4">
        <h3>Pengembangan Web</h3>
        <p>Bangun website interaktif dengan HTML, CSS, dan JavaScript.</p>
      </div>
      <div class="col-md-4">
        <h3>Data Science</h3>
        <p>Menguasai Python untuk analisis data, machine learning, dan visualisasi.</p>
      </div>
    </div>
  </main>
</body>
</html>

# Halaman `register.html`

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Belajar Pemrograman</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5 text-center">
    <img src="./images/logo.jpg" alt="Logo Belajar Pemrograman" width="100" class="mb-2 rounded-circle">
    <h2>Daftar untuk Mulai Belajar</h2>
    <form action="dashboard.html" class="mx-auto" style="max-width: 400px;">
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Daftar</button>
      <p class="mt-3">Sudah punya akun? <a href="login.html">Login sekarang</a></p>
    </form>
  </div>
</body>
</html>

# Halaman `login.html`

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Belajar Pemrograman</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5 text-center">
    <img src="./images/logo.jpg" alt="Logo Belajar Pemrograman" width="100" class="mb-2 rounded-circle">
    <h2>Login untuk Belajar</h2>
    <p>Masuk ke akun Anda untuk mengakses materi pembelajaran.</p>
    <form action="dashboard.html" class="mx-auto" style="max-width: 400px;">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
      <p class="mt-3">Belum punya akun? <a href="register.html">Daftar sekarang</a></p>
    </form>
  </div>
</body>
</html>


# Halaman `dashboard.html`

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Belajar Pemrograman</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
      <img src="./images/logo.jpg" alt="Logo Belajar Pemrograman" width="40" class="mb-2 rounded-circle">
      Dashboard
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <h2>Selamat Datang di Dashboard</h2>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pemrograman Dasar</h5>
            <p class="card-text">Pelajari konsep dasar pemrograman yang mudah dipahami.</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pengembangan Web</h5>
            <p class="card-text">Bangun website interaktif dan dinamis dengan HTML, CSS, dan JavaScript.</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Science</h5>
            <p class="card-text">Pelajari cara menganalisis data menggunakan Python dan visualisasi data.</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

