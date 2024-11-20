<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .content-wrapper {
            margin-left: 250px;
            padding: 20px;
            padding-top: 60px;
            /* Sesuaikan dengan tinggi navbar */
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .navbar {
            z-index: 1050;
        }
    </style>

</head>

<body>
    <!-- Include Navbar -->
    @include('partials.navbar-admin')

    <!-- Include Sidebar -->
    @include('partials.sidebar-admin')

    <!-- Main Content -->
    <div class="content">
        @yield('contents')
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include CKEditor from CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '/path/to/upload' // Tentukan URL untuk menerima gambar
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>


    <script>
        function tampilkanPreview(gambar, idpreview) {
            var gb = gambar.files;
            var preview = document.getElementById(idpreview);
            preview.innerHTML = ""; // Hapus preview gambar sebelumnya

            for (var i = 0; i < gb.length; i++) {
                var gbPreview = gb[i];
                var imageType = /image.*/;

                if (gbPreview.type.match(imageType)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var imgElement = document.createElement("img");
                        imgElement.src = e.target.result;
                        imgElement.style.maxWidth = "300px";
                        imgElement.style.maxHeight = "300px";
                        preview.appendChild(imgElement); // Menambahkan gambar ke dalam div preview
                    };

                    reader.readAsDataURL(gbPreview);
                } else {
                    alert("Tipe file tidak sesuai. Gunakan tipe file gambar.");
                }
            }
        }
    </script>


</body>

</html>
