<?php
require_once 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Enstitü İstanbul İsmek - Zemin İstanbul PHP Atölyesi">
        <meta name="author" content="Mehmet Selçuk Batal">
        <title>Eİİ Shop v1.0</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Eİİ Shop v1.0</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategoriler</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                    $sorgu = $baglan->select('kategoriler', ['no','baslik'])
                                                    ->where('durum', 'aktif', '=')
                                                    ->orderBy('baslik', 'asc')
                                                    ->limit(10)
                                                    ->run();
                                    if ($sorgu) {
                                        foreach ($sorgu as $satir) { 
                                            echo "<li><a class='dropdown-item' href='kategoriler.php?no=$satir[no]'>$satir[baslik]</a></li>";
                                        }
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ürünler</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="urunler.php">Tüm Ürünler</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="urunler.php?t=yeni">Yeni Gelenler</a></li>
                                <li><a class="dropdown-item" href="urunler.php?t=coksatan">En Çok Satanlar</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-outline-dark" href="sepet.php">
                            <i class="bi-cart-fill me-1"></i>
                            Sepet
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Özgürlüğü Hisset</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Hiçbir Sınırlama Olmadan Alışveriş Yapın</p>
                </div>
            </div>
        </header>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                        $sorgu = $baglan->select('urunler', ['no','baslik','resim','fiyat'])
                                        ->where('durum', 'aktif', '=')
                                        ->orderBy('RAND()')
                                        ->limit(12)
                                        ->run();
                        if ($sorgu) {
                            foreach ($sorgu as $satir) { 
                                echo "<div class='col mb-5'>
                                <div class='card h-100'>
                                <img class='card-img-top' src='$satir[resim]' alt='$satir[baslik]'>
                                <div class='card-body p-4'>
                                <div class='text-center'>
                                <h5 class='fw-bolder'>$satir[baslik]</h5>
                                ₺$satir[fiyat]
                                </div>
                                </div>
                                <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='detay.php?no=$satir[no]'>İncele</a></div>
                                </div>
                                </div>
                                </div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Enstitü İstanbul İsmek, <?php echo date("Y"); ?></p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
