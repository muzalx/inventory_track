<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
        <div class="sidebar-brand"> 
            <!--begin::Brand Link--> 
            <a href="<?= base_url('admin/index')?>" class="brand-link"> 
            <!--begin::Brand Image--> 
            <img src="<?= base_url('public/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> 
            <!--end::Brand Image--> 
            <!--begin::Brand Text--> 
            <span class="brand-text fw-light">Siap-Kosta.com</span>
            <!--end::Brand Text--> </a> 
            <!--end::Brand Link--> 
        </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2"> <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item active"> <a href="<?= base_url('admin/index') ?>" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                    </a></li>
                    <li class="nav-header">Menu</li>
                    <li class="nav-item "> <a href="<?= base_url('admin/stocks') ?>" class="nav-link"> <i class="nav-icon bi bi-boxes"></i>
                            <p>Stok Barang</p>
                    </a> </li>
                    <li class="nav-item"> <a href="<?= base_url('admin/report') ?>" class="nav-link"> <i class="nav-icon bi bi-journals"></i>
                            <p>Report</p>
                    </a> </li>
                    <li class="nav-header">Transaksi</li>
                    <li class="nav-item"> <a href="<?= base_url('admin/stockout') ?>" class="nav-link"> <i class="nav-icon bi bi-box-arrow-up"></i>
                            <p>Barang Keluar</p>
                    </a> </li>
                    <li class="nav-item"> <a href="<?= base_url('admin/stockin') ?>" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-down"></i>
                            <p>Barang Masuk</p>
                    </a> </li>
                    <li class="nav-header">User Manajemen</li>
                    <li class="nav-item"> <a href="<?= base_url('admin/users') ?>" class="nav-link"> <i class="nav-icon bi bi-people"></i>
                            <p>Users</p>
                    </a> </li>
                    <li class="nav-item"> <a href="<?= base_url('admin/roles') ?>" class="nav-link"> <i class="nav-icon bi bi-person-bounding-box"></i>
                            <p>Roles</p>
                    </a> </li>
                    <li class="nav-item"> <a href="<?= base_url('admin/permissions') ?>" class="nav-link"> <i class="nav-icon bi bi-braces"></i>
                            <p>Permissions</p>
                    </a> </li>
                    <!-- <li class="nav-header">Konfigurasi</li> -->
                </ul> <!--end::Sidebar Menu-->
            </nav>
        </div> <!--end::Sidebar Wrapper-->
    </aside> <!--end::Sidebar-->

    <!-- <script>
// Dapatkan path URL saat ini
const currentPath = window.location.pathname;

// Cari semua elemen <a> di dalam menu navigasi
const navLinks = document.querySelectorAll('.nav-link');

// Loop melalui semua link dan cek apakah href dari link cocok dengan URL saat ini
navLinks.forEach(link => {
    // Jika href link cocok dengan currentPath, tambahkan kelas 'active'
    if (link.getAttribute('href') === currentPath) {
        link.classList.add('active');
    }
});
</script> -->