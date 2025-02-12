<?php
    include('header.php');
    include('check_session.php');

    //Ambil ID dari $_POST
    $id = isset($_POST['id']) ? $_POST['id'] : null;
?>

<div class="container mt-5">
    <h2 class="mb-4">Add News Form</h2>

    <form id="addNewsForm">
        <input type="hidden" id="newsId" value="<?php echo htmlspecialchars($id); ?>">
        <div class="form-group">
            <label for="judul">Title:</label>
            <input type="text" class="form-control" maxlength="50" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Content:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="url_image">Image:</label>
            <input type="file" class="form-control-file" id="url_image" name="url_image" accept="image/*" required>
        </div>
        <button type="button" class="btn btn-primary" onclick="editNews()">EditNews</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function getData() {
        const newsId = document.getElementById('newsId').value;
        var formData = new FormData();
        formData.append('idnews', newsId);
        //Lakukan permintaan AJAX untuk mendapatkan data berita berdasarkan ID
        axios.post('https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/selectdata.php', formData)
            .then(function(response) {
                //Isi nilai input dengan data yang diterima
                document.getElementById('judul').value = response.data.title;
                document.getElementById('deskripsi').value = response.data.desc;
            })
            .catch(function(error) {
                console.error(error);
                alert('Error fetching news data.');
            });
    }

    function editNews() {
        const newsId = document.getElementById('newsId').value;
        const judul = document.getElementById('judul').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const urlImageInput = document.getElementById('url_image');
        const url_image = urlImageInput.files[0];
        const tanggal = new Date().toISOString().split('T')[0];
        //Get form data
        var formData = new FormData();
        formData.append('idnews', newsId);
        formData.append('judul', judul);
        formData.append('deskripsi', deskripsi);
        formData.append('tanggal', tanggal);

        if (urlImageInput.files.length > 0) {
            formData.append('url_image', url_image);
        } else {
            formData.append('url_image', null);
            //Tidak perlu menambahkan 'url_image' karena tidak ada file yang dipilih
        }
        //Lakukan permintaan AJAX untuk mengedit berita
        axios.post('https://nova-agustina.my.id/22cid/Syukrillah/task_pert12/Backend/editnews.php', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
            .then(function(response) {
                console.log(response.data);
                alert(response.data);
                window.location.href = 'kelola.php';
            })
            .catch(function(error) {
                console.error(error);
                alert('Error editing news.');
            });
    }
    window.onload = getData;
</script>