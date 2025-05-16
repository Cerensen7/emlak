<?php
// pages/login.php

// Config dosyasını dahil et
require_once '../config.php';

// Sayfa başlığı
$pageTitle = 'Giriş | ' . $appSettings['siteName'];

// İçerik başlığı
$contentTitle = 'Giriş';

// Breadcrumbs - Login sayfasında genellikle breadcrumb gösterilmez
$breadcrumbs = ['Giriş'];

// İçerik başlatma
ob_start();
?>

<!-- İçerik -->
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sisteme Giriş</h3>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Oturum açmak için bilgilerinizi girin</p>
                <form action="<?php echo url(); ?>" method="post">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-posta">
                            <div class="input-group-text">
                                <span class="bi bi-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Şifre">
                            <div class="input-group-text">
                                <span class="bi bi-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Beni hatırla</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="forgot-password.php">Şifremi unuttum</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
// İçeriği al
$content = ob_get_clean();

// Layout'u dahil et
include '../layout.php';
?>