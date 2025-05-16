<?php
// layout.php

// config.php dahil edilmediyse dahil et
if (!file_exists(__DIR__ . '/config.php')) {
    die('Config dosyası bulunamadı.');
} else {
    require_once __DIR__ . '/config.php';
}

// Sayfa başlığı belirleme
if (!isset($pageTitle)) {
    $pageTitle = 'AdminLTE v4';
}

// İçerik başlığı belirleme
if (!isset($contentTitle)) {
    $contentTitle = $pageTitle;
}

// Breadcrumb yolunu belirleme
if (!isset($breadcrumbs)) {
    $breadcrumbs = [$contentTitle];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="<?php echo $pageTitle; ?>" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard" />
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    
    <!-- OverlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    
    <!-- AdminLTE -->
<link rel="stylesheet" href="<?php echo url('css/adminlte.min.css'); ?>" />
    
    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
    
    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
    
    <?php if (isset($extraHeader)) echo $extraHeader; ?>
</head>
<body class="layout-fixed <?php echo $showSidebar ? 'sidebar-expand-lg' : ''; ?> bg-body-tertiary">
    <div class="app-wrapper">
        <!-- Navbar / Header -->
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <!-- Start Navbar Links -->
                <ul class="navbar-nav">
                    <?php if ($showSidebar): ?>
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item d-none d-md-block"><a href="<?php echo url(); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
                </ul>
                
                <!-- End Navbar Links -->
                <ul class="navbar-nav ms-auto">
                    <!-- User Menu Dropdown -->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="<?php echo url('assets/img/user2-160x160.jpg'); ?>" class="user-image rounded-circle shadow" alt="User Image" />
                            <span class="d-none d-md-inline">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        <?php if ($showSidebar): ?>
        <!-- Sidebar -->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!-- Sidebar Brand -->
            <div class="sidebar-brand">
                <!-- Brand Link -->
                <a href="<?php echo url(); ?>" class="brand-link">
                    <!-- Brand Image -->
                    <img src="<?php echo url('assets/img/AdminLTELogo.png'); ?>" alt="AdminRba Logo" class="brand-image opacity-75 shadow" />
                    <!-- Brand Text -->
                    <span class="brand-text fw-light">AdminRba</span>
                </a>
            </div>
            <!-- Sidebar Wrapper -->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!-- Sidebar Menu -->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo url('index.php'); ?>" class="nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Ana Sayfa</p>
                            </a>
                        </li>
                        <li class="nav-item <?php echo (in_array($currentPage, ['ilanlar', 'ilan_ekle'])) ? 'menu-open' : ''; ?>">
                            <a href="#" class="nav-link <?php echo (in_array($currentPage, ['ilanlar', 'ilan_ekle'])) ? 'active' : ''; ?>">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    İlan Yönetim Sistemi
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo url('pages/ilanlar.php'); ?>" class="nav-link <?php echo ($currentPage == 'ilanlar') ? 'active' : ''; ?>">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>İlanlar</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo url('pages/ilan_ekle.php'); ?>" class="nav-link <?php echo ($currentPage == 'ilan_ekle') ? 'active' : ''; ?>">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>İlan Ekle</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo (in_array($currentPage, ['yetkililer', 'yetkili_ekle'])) ? 'menu-open' : ''; ?>">
                            <a href="#" class="nav-link <?php echo (in_array($currentPage, ['yetkililer', 'yetkili_ekle'])) ? 'active' : ''; ?>">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Sistem
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo url('pages/yetkililer.php'); ?>" class="nav-link <?php echo ($currentPage == 'yetkililer') ? 'active' : ''; ?>">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Yetkililer</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo url('pages/yetkili_ekle.php'); ?>" class="nav-link <?php echo ($currentPage == 'yetkili_ekle') ? 'active' : ''; ?>">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Yetkili Ekle</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <?php endif; ?>
        
        <!-- Main Content -->
        <main class="app-main">
            <!-- App Content Header -->
            <div class="app-content-header">
                <!-- Container -->
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0"><?php echo $contentTitle; ?></h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="<?php echo url(); ?>">Home</a></li>
                                <?php 
                                if (is_array($breadcrumbs)):
                                    foreach ($breadcrumbs as $key => $value):
                                        if (!is_numeric($key)): 
                                ?>
                                    <li class="breadcrumb-item"><a href="<?php echo $key; ?>"><?php echo $value; ?></a></li>
                                <?php 
                                        else: 
                                ?>
                                    <li class="breadcrumb-item active"><?php echo $value; ?></li>
                                <?php 
                                        endif;
                                    endforeach;
                                endif;
                                ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- App Content -->
            <div class="app-content">
                <div class="container-fluid">
                    <!-- İçerik buraya gelecek -->
                    <?php 
                    if (isset($content)) {
                        echo $content;
                    }
                    ?>
                </div>
            </div>
        </main>
        
        <!-- Footer -->
        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <strong>
                Copyright &copy; 2014-2024
                <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
            </strong>
            All rights reserved.
        </footer>
    </div>
    <!-- End App Wrapper -->
    
    <!-- Scripts -->
    <!-- OverlayScrollbars -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    
    <!-- Popper for Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- AdminLTE -->
<script src="<?php echo url('js/adminlte.js'); ?>"></script>

    
    <!-- OverlayScrollbars Configure -->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>
</html>