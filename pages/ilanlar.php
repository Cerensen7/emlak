<?php
// pages/ilanlar.php

// Config dosyasını dahil et
require_once '../config.php';

// Sayfa başlığı
$pageTitle = 'İlanlar | ' . $appSettings['siteName'];

// İçerik başlığı
$contentTitle = 'İlanlar';

// Breadcrumbs
$breadcrumbs = [
    url() => 'Ana Sayfa',
    'İlanlar'
];

// İçerik başlatma
ob_start();
?>

<!-- İçerik -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">İlan Listesi</h3>
                <div class="card-tools">
                    <a href="<?php echo url('pages/ilan_ekle.php'); ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-circle"></i> Yeni İlan Ekle
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>İlan Başlığı</th>
                            <th>Fiyat</th>
                            <th>Eklenme Tarihi</th>
                            <th>Durum</th>
                            <th style="width: 120px">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Satılık Daire</td>
                            <td>1,250,000 TL</td>
                            <td>12.05.2024</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kiralık Dükkan</td>
                            <td>15,000 TL/ay</td>
                            <td>10.05.2024</td>
                            <td><span class="badge bg-warning">Bekliyor</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Satılık Arsa</td>
                            <td>3,500,000 TL</td>
                            <td>08.05.2024</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// İçeriği al
$content = ob_get_clean();

// Ekstra scriptler
$extraScripts = <<<EOT
<script>
    // İlanlar sayfası için ekstra scriptler buraya eklenebilir
    console.log('İlanlar sayfası yüklendi.');
</script>
EOT;

// Layout'u dahil et
include '../layout.php';
?>