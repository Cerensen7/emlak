<?php
// index.php

// Config dosyasını dahil et
require_once 'config.php';

// Sayfa başlığı
$pageTitle = 'Ana Sayfa | ' . $appSettings['siteName'];

// İçerik başlığı
$contentTitle = 'Ana Sayfa';

// Breadcrumbs
$breadcrumbs = ['Ana Sayfa'];

// İçerik başlatma
ob_start();
?>


<?php
// İçeriği al
$content = ob_get_clean();

// Ekstra scriptler
$extraScripts = <<<EOT
<script>
    // Ana sayfa için ekstra scriptler buraya eklenebilir
    console.log('Ana sayfa yüklendi.');
</script>
EOT;

// Layout'u dahil et
include 'layout.php';
?>