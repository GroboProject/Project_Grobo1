<aside class="sidebar bg-dark text-white d-flex flex-column shadow-sm">
    <div class="sidebar-header py-4 px-4">
        <h4 class="fw-bold text-uppercase">Admin Menu</h4>
    </div>
    <nav class="sidebar-nav flex-grow-1">
        <ul class="list-unstyled">
            <!-- Dashboard Link -->
            <li>
                <a href="/admin/base" class="sidebar-link">
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Berita Link -->
            <li>
                <a href="/admin/tabelBerita" class="sidebar-link">
                    <span>Berita</span>
                </a>
            </li>

            <!-- Submenu Example -->
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="sidebar-link">
                    <span>Perusahaan</span>
                </a>
                <ul class="collapse list-unstyled ms-3" id="submenu2">
                    <li>
                        <a href="/admin/request" class="sidebar-sublink">Request</a>
                    </li>
                    <li>
                        <a href="/admin/companyList" class="sidebar-sublink">Daftar Perusahaan</a>
                    </li>
                </ul>
            </li>

            <!-- Other Links -->
            <li>
                <a href="/admin/feedback" class="sidebar-link">
                    <span>Feedback</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<style>
    /* Sidebar Styling */
    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 56px; /* Align with navbar height */
        background-color: #343a40;
    }

    .sidebar-header {
        border-bottom: 1px solid #495057;
    }

    .sidebar-nav ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .sidebar-link {
        display: block;
        padding: 10px 20px;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .sidebar-link:hover {
        background-color: #495057;
    }

    .sidebar-sublink {
        display: block;
        padding: 8px 20px;
        color: #adb5bd;
        text-decoration: none;
        font-size: 13px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .sidebar-sublink:hover {
        color: #ffffff;
        background-color: #495057;
    }

    .collapse {
        padding-left: 10px;
    }
</style>
