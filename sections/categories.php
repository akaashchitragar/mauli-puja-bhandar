<!-- Decorative Divider -->
<div class="decorative-divider">
    <div class="line"></div>
    <i class="ri-leaf-fill icon"></i>
    <div class="line"></div>
</div>

<!-- Product Categories Section -->
<section id="products" class="py-5" aria-label="Puja products and samagri collection">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fs-2 fw-bold mb-2">Our Sacred Collection</h2>
            <p class="text-muted mx-auto" style="max-width: 520px;">
                Shop authentic puja samagri, incense, havan items &amp; festival essentials — sourced directly from skilled artisans across India.
            </p>
        </div>

        <div class="row g-4">
            <?php
            $collections = [
                [
                    'icon' => 'ri-plant-fill',
                    'title' => 'Daily Essentials',
                    'desc' => 'Pure incense sticks, cotton wicks, camphor, and premium oils for daily worship.'
                ],
                [
                    'icon' => 'ri-gift-2-fill',
                    'title' => 'Festival Specials',
                    'desc' => 'Complete kits for Ganesh Chaturthi, Diwali, Navratri, and other auspicious occasions.'
                ],
                [
                    'icon' => 'ri-fire-fill',
                    'title' => 'Havan Samagri',
                    'desc' => 'High-quality sacred wood, pure ghee, dried herbs, and grains for Homam.'
                ],
                [
                    'icon' => 'ri-palette-fill',
                    'title' => 'Rangoli & Decor',
                    'desc' => 'Vibrant rangoli colors, gulal, torans, and decorative accessories for every occasion.'
                ]
            ];

            foreach ($collections as $item): ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="collection-card h-100 d-flex flex-column gap-3">
                        <div class="collection-card-icon">
                            <i class="<?= $item['icon'] ?>"></i>
                        </div>
                        <div class="position-relative" style="z-index: 1;">
                            <h3 class="fs-5 fw-bold collection-card-title mb-2"><?= htmlspecialchars($item['title']) ?></h3>
                            <p class="text-muted small mb-0 lh-lg"><?= htmlspecialchars($item['desc']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
