<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Fungsi untuk memeriksa session
    function checkSession() {
        // Ambil session_token dari localStorage
        // Membuat objek FormData
        const formData = new FormData();
        formData.append('session_token', localStorage.getItem('session_token'));

        // Kirim session_token ke server untuk memeriksanya
        axios.post('https://nova-agustina.my.id/22cid/Syukrillah/tugas9/session.php', formData)
            .then(response => {
                // Handle respons dari server
                console.log(response);
                if (response.data.status === 'success') {
                    // Jika session masih aktif, arahkan ke halaman dashboard.php
                    const nama = response.data.hasil.name || 'Default Name';
                    localStorage.setItem('nama', nama);
                    window.location.href = 'dashboard.php';
                } else {
                    // Jika session tidak aktif, lakukan yang sesuai (misalnya, tampilkan pesan)
                    window.location.href = 'login.php';
                }
            })
            .catch(error => {
                // Handle kesalahan koneksi atau server
                console.error('Error checking session:', error);
            });
    }

    // Panggil fungsi checkSession saat halaman dimuat
    checkSession();
</script>

</body>
</html>