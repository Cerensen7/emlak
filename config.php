<?php
// config.php

// Hata raporlamayı kapatma
ini_set("display_errors", "0");

// Temel yollar
define('BASE_PATH', __DIR__);
define('ADMIN_URL', '/emlak'); // Kurulum URL'nize göre değiştirin

// Şu anki URL'yi alalım (PHP_SELF yerine REQUEST_URI kullanalım)
$currentUrl = $_SERVER['REQUEST_URI'];

// Olası klasör yolunu temizleyelim
$currentUrl = preg_replace('/\?.*/', '', $currentUrl); // URL parametrelerini kaldır

// Sidebar gösterilecek URL'leri tanımlayalım (tam eşleşme yerine içerme kontrolü yapalım)
$sidebarPages = [
    'index.php',
    'ilanlar.php',
    'ilan_ekle.php',
    'yetkililer.php',
    'yetkili_ekle.php'
    // İhtiyaç duyduğunuz diğer sayfalar
];

// Sidebar'ın gösterilip gösterilmeyeceğine karar verelim (sadece login.php gibi özel sayfalarda gizle)
$hideSidebarPages = [
    'login.php',
    'register.php',
    'forgot-password.php'
];

// Aktif sayfayı belirleyelim (menü vurgulama için)
$currentPage = basename($currentUrl, '.php');
if (empty($currentPage)) {
    $currentPage = 'index';
}

// Sidebar gösterme mantığını güncelle - varsayılan olarak göster ve sadece belirli sayfalarda gizle
$showSidebar = true;
foreach ($hideSidebarPages as $page) {
    if (strpos($currentUrl, $page) !== false) {
        $showSidebar = false;
        break;
    }
}

// Debug için (geliştirme aşamasında)
// echo "Current URL: " . $currentUrl . "<br>";
// echo "Current Page: " . $currentPage . "<br>";
// echo "Show Sidebar: " . ($showSidebar ? 'true' : 'false') . "<br>";

// Uygulamanın temel ayarları
$appSettings = [
    'siteName' => 'AdminRba',
    'siteDescription' => 'AdminLTE Based Dashboard',
    'version' => '1.0',
    'footer' => 'Copyright &copy; ' . date('Y') . ' AdminRba. Tüm hakları saklıdır.'
];

// URL oluşturmak için yardımcı fonksiyon
function url($path = '') {
    // HTTP veya HTTPS protokolünü al
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    
    // Sunucu adını al
    $host = $_SERVER['HTTP_HOST'];
    
    // Tam URL oluştur
    return $protocol . $host . ADMIN_URL . '/' . ltrim($path, '/');
}

// Sayfayı yönlendirme fonksiyonu
function redirect($path) {
    header('Location: ' . url($path));
    exit;
}