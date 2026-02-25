<!-- Decorative Divider -->
<div class="decorative-divider">
    <div class="line"></div>
    <i class="ri-flower-fill icon"></i>
    <div class="line"></div>
</div>

<!-- Gallery Section -->
<section id="gallery" class="py-5" aria-label="Puja items photo gallery">
    <div class="container">
        <div class="mb-4">
            <h2 class="fs-2 fw-bold mb-2">Puja Items Gallery</h2>
            <p class="text-muted mb-0">Browse our collection of brass puja thalis, idols, incense, rangoli, garlands &amp; sacred accessories.</p>
        </div>

        <?php
        $galleryItems = [
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946436/IMG20251009121331_y2z69z.jpg',
                'alt' => 'Puja items and samagri at Mauli Puja Bhandar'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946431/IMG20260221182529_y1nikn.jpg',
                'alt' => 'Incense sticks and dhoop collection'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946418/IMG20251009125845_k1ztfh.jpg',
                'alt' => 'Festival decoration items and accessories'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946424/IMG20260221182457_cvhchw.jpg',
                'alt' => 'Havan samagri and puja essentials'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946302/IMG20241017201036_koh3ly.jpg',
                'alt' => 'Brass idols and murtis display'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946296/IMG20241017200145_vjhfgp.jpg',
                'alt' => 'Kumkum sandalwood and spiritual accessories'
            ],
            [
                'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1771946293/IMG20241017195500_oslj7n.jpg',
                'alt' => 'Mauli Puja Bhandar store collection'
            ]
        ];
        ?>

        <div class="row g-3">
            <?php foreach ($galleryItems as $item): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-item gallery-item-square">
                        <div class="gallery-img" style="background-image: url('<?= htmlspecialchars($item['image']) ?>');" role="img" aria-label="<?= htmlspecialchars($item['alt']) ?>"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
