<?php
include('header.php');
include('check_session.php');
?>

<div class="container mt-5">
        <h2 class="mb-4">List News</h2>
        <table id="newsTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody></tbody>
        </table>
         <div class="mt-4">
        <button class="btn btn-success" onclick="location.href='tambah.php'">Tambah Data</button>
    </div>
    </div>
   

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTables
            $('#newsTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "https://nova-agustina.my.id/22cid/Syukrillah/tugas9/listnews.php", // URL ke file PHP ini sendiri
                    "type": "GET"
                },
                "columns": [
                    { 
                        "data": null, 
                        "render": function(data, type, row, meta) {
                            return meta.row + 1; // Menampilkan nomor urut
                        }
                    },
                    { "data": "title" },
                    { "data": "desc" },
                    { 
                        "data": "img",
                        "render": function(data) {
                            return `<img src="${data}" alt="Image" style="max-width: 100px; max-height: 100px;">`;
                        }
                    },
                    { 
                        "data": null,
                        "render": function(data) {
                            return `
                                <button class="btn btn-danger btn-sm" onclick="deleteNews(${data.id})">Delete</button>
                                <form action="edit.php" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="${data.id}">
                                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                </form>
                            `;
                        }
                    }
                ]
                
            });
        });


// Function to delete news
function deleteNews(id) {
    var formData = new FormData();
    formData.append('idnews', id);

    if (confirm("Are you sure you want to delete this news?")) {
        axios.post('https://nova-agustina.my.id/22cid/Syukrillah/tugas9/deletenews.php', formData)
            .then(function(response) {
                console.log("Delete Response:", response.data); // Debugging
                alert(response.data);
                $('#newsTable').DataTable().ajax.reload(null, false); // Reload DataTable without resetting pagination
            })
            .catch(function(error) {
                console.error("Delete Error:", error);
                alert('Error deleting news.');
            });
    }
}




    </script>
</body>
</html>

