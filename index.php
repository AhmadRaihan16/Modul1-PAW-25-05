<?php

$products = [
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 850000,
        "stok" => 8
    ],
    [
        "nama" => "Gaming Monitor 24 Inch",
        "kategori" => "Monitor",
        "harga" => 1800000,
        "stok" => 4
    ],
    [
        "nama" => "Laptop Productivity",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 3
    ],
    [
        "nama" => "Wireless Mouse",
        "kategori" => "Aksesoris",
        "harga" => 350000,
        "stok" => 12
    ],
    [
        "nama" => "Gaming Headset",
        "kategori" => "Audio",
        "harga" => 750000,
        "stok" => 0
    ],
    [
        "nama" => "SSD NVMe 1TB",
        "kategori" => "Storage",
        "harga" => 1250000,
        "stok" => 7
    ],
    [
        "nama" => "Webcam Full HD",
        "kategori" => "Kamera",
        "harga" => 625000,
        "stok" => 5
    ],
    [
        "nama" => "Smartphone 5G",
        "kategori" => "Smartphone",
        "harga" => 4200000,
        "stok" => 6
    ],
    [
        "nama" => "Bluetooth Speaker",
        "kategori" => "Audio",
        "harga" => 950000,
        "stok" => 0
    ],
    [
        "nama" => "Tablet 10 Inch",
        "kategori" => "Tablet",
        "harga" => 3200000,
        "stok" => 2
    ],
    [
        "nama" => "USB-C Hub 7 in 1",
        "kategori" => "Aksesoris",
        "harga" => 475000,
        "stok" => 10
    ],
    [
        "nama" => "Smartwatch Pro",
        "kategori" => "Wearable",
        "harga" => 1450000,
        "stok" => 5
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">

    
</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<header>

    <div class="logo">
        Cia Store
    </div>

    <nav>

        <a href="#">
            Home
        </a>

        <a href="#products">
            Produk
        </a>

        <a href="#footer">
            Tentang
        </a>

    </nav>

</header>



<main>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-tag">
        Cia Store
    </div>

    <h1>
        Simple Tech Store.
    </h1>

    <p>
        Temukan berbagai perangkat dan
        aksesoris teknologi untuk mendukung
        aktivitas, pekerjaan, dan hiburanmu.
    </p>

    <a href="#products">
        Lihat Produk
    </a>

</section>



<!-- =========================
     PRODUCT CATALOG
========================= -->

<section
    class="catalog"
    id="products"
>

    <div class="catalog-header">

        <div>

            <p>
                CIA PRODUCTS
            </p>

            <h2>
                Katalog Produk
            </h2>

        </div>


        <div class="total-product">

            Total Produk:
            <?= count($products); ?>

        </div>

    </div>



    <div class="product-grid">


        <?php foreach ($products as $product): ?>


            <?php

            $harga = $product["harga"];

            $diskon = 0;

            $hargaSetelahDiskon = $harga;


            /*
            Jika harga minimal 1 juta
            maka mendapat diskon 10%
            */

            if ($harga >= 1000000) {

                $diskon = 10;

                $hargaSetelahDiskon =
                    $harga - ($harga * 0.10);

            }

            ?>


            <article class="product-card">


                <!-- CATEGORY -->

                <p class="category">

                    <?= $product["kategori"]; ?>

                </p>


                <!-- PRODUCT NAME -->

                <h3>

                    <?= $product["nama"]; ?>

                </h3>



                <!-- PRICE -->

                <?php if ($diskon > 0): ?>


                    <p class="normal-price">

                        Rp<?= number_format(
                            $harga,
                            0,
                            ",",
                            "."
                        ); ?>

                    </p>


                    <span class="discount-label">

                        Diskon <?= $diskon; ?>%

                    </span>


                    <p class="price">

                        Rp<?= number_format(
                            $hargaSetelahDiskon,
                            0,
                            ",",
                            "."
                        ); ?>

                    </p>


                <?php else: ?>


                    <p class="price">

                        Rp<?= number_format(
                            $harga,
                            0,
                            ",",
                            "."
                        ); ?>

                    </p>


                <?php endif; ?>



                <!-- STOCK -->

                <div class="stock-row">

                    <p class="stock">

                        Stok:
                        <?= $product["stok"]; ?>

                    </p>


                    <?php
                    if ($product["stok"] > 0):
                    ?>

                        <span
                            class="status available"
                        >

                            Tersedia

                        </span>


                    <?php else: ?>


                        <span
                            class="status out-stock"
                        >

                            Stok Habis

                        </span>


                    <?php endif; ?>

                </div>



                <!-- BUTTON -->

                <?php
                if ($product["stok"] > 0):
                ?>

                    <button class="buy-button">

                        Beli Sekarang

                    </button>


                <?php else: ?>


                    <button
                        class="buy-button"
                        disabled
                    >

                        Stok Habis

                    </button>


                <?php endif; ?>


            </article>


        <?php endforeach; ?>


    </div>

</section>

</main>



<!-- =========================
     FOOTER
========================= -->

<footer id="footer">

    <p>
        &copy; 2026 Cia Store.
        All Rights Reserved.
    </p>

</footer>


</body>

</html>