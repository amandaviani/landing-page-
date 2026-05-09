<?php $product = $product ?? []; ?>

<!-- HERO -->

<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">

        <h1>LIPIA LUXCURY</h1>

        <p>
            Stylish Bag & Wallet Collection
        </p>

        <div class="hero-btn">

            <a href="#menu" class="btn-secondary">
                View Collection
            </a>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section class="about">

    <h2>Our Collection</h2>

    <p>
        Kami menyediakan koleksi tas dan dompet fashionable
        dengan kualitas premium dan desain modern.
    </p>

</section>

<!-- PRODUCT -->

<section class="menu" id="menu">

    <h2>Best Seller Product</h2>

    <div class="grid">

        <?php foreach($product as $p): ?>

        <div class="card">

            <div class="card-img">

                <img src="assets/<?= $p['gambar']; ?>">

            </div>

            <div class="card-body">

                <h3><?= $p['nama']; ?></h3>

                <p><?= $p['harga']; ?></p>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- LIMITED EDITION -->

<section class="limited">

    <div class="limited-container">

        <div class="limited-img">

            <img src="assets/limited.jpg">

        </div>

        <div class="limited-text">

            <h2>Limited Edition</h2>

            <h3>LIPIA Rosé Diamond Bag</h3>

            <p>
                Koleksi eksklusif dengan desain elegant
                dan premium detail untuk tampil lebih classy.
            </p>

            <h1>Rp299.000</h1>

            <a href="#" class="btn-secondary">
                Shop Exclusive
            </a>

        </div>

    </div>

</section>

<!-- ORDER -->

<section class="booking">

    <div class="booking-container">

        <div class="booking-text">

            <h2>Order Now</h2>

            <p>
                Pilih produk favoritmu dan lakukan pemesanan sekarang.
            </p>

        </div>

        <form class="booking-form">

            <input type="text" placeholder="Nama Lengkap" required>

            <input type="email" placeholder="Email" required>

            <select required>

                <option value="">
                    Pilih Produk
                </option>

                <?php foreach($product as $p): ?>

                <option>
                    <?= $p['nama']; ?>
                </option>

                <?php endforeach; ?>

            </select>

            <input type="number" placeholder="Jumlah Order" required>

            <button type="submit" onclick="pesan()">
            Checkout Now
        </button>

        </form>

    </div>

</section>