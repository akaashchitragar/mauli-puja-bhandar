<!-- Introduction Section -->
<section class="py-5 mt-5" aria-label="About Mauli Puja Bhandar Kolhapur">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 720px;">
            <h2 class="display-6 fw-bold mb-4">Best Puja Items Store in Kolhapur</h2>
            <p class="text-muted fs-5 lh-lg">
                Situated in the heart of Kolhapur near the sacred Mahalaxmi Temple, Mauli Puja Bhandar is your one-stop shop for premium puja samagri, incense, camphor, kumkum, havan items, and all daily &amp; festival worship essentials — sourced directly from trusted artisans.
            </p>
        </div>

        <!-- Category Preview Cards -->
        <div class="row g-4 mt-5 justify-content-center">
            <?php
            $categories = [
                [
                    'title' => 'Puja Samagri',
                    'subtitle' => 'Kumkum, Haldi & Essentials',
                    'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1772007602/2151193778_ekewtg.jpg'
                ],
                [
                    'title' => 'Festival Decor',
                    'subtitle' => 'Rangoli, Garlands & Lights',
                    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuASzruZVkK_kS-Qkyht2jaDcp0D54P4MxLGWYwHyihch2QpPNN3aBX50RLWzyCEYC-5UR2zzMLd92CYnzdpHp2PxUXhlVQ2RTU5Ooha6dsdtsLqhg4Wv63WNnjcjhrpYlGPycn5wTZV2AxlM4poggMtEZVkRSfZLRaJtWX7gtRBYAWVF0hce_a_pndmzKIjq3H5xmu-MsVunhNwnIc6RJTQhnzQgO4XrNKVBffDQG-ntaftgoxbONX66WgOrdKh2m3M4leWwBLXcDH3'
                ],
                [
                    'title' => 'Aromatics',
                    'subtitle' => 'Incense, Dhoop & Camphor',
                    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB1VjqglB0dNpSekvsVh4Ua8-GqcYD8n9Ey8RYm6irnwh4m9uc5UMHtoAgFvQh38IAFqIr8AqtDB66i0N6THlh1qx1XVdl6A7Gs5UWrOP5UNJjsPStlYZKnarUaK2dxisWdzLNz8rw-vkQK0GabKnJ5FvLSRr0r112DD9jOMwdVERw1YIQyYeej3RKw8-vHXTKn6KbaoDvMAD3LZECfKjvVgyQ67e_0y8iRvJH9VGupsFpJiMfJE_EfE4CqSEvDqy_e19pMUmEi24a2'
                ],
                [
                    'title' => 'Vastra & Threads',
                    'subtitle' => 'Cotton Wicks, Janieu & Cloth',
                    'image' => 'https://res.cloudinary.com/dsn3mtgjf/image/upload/v1772007670/1772_fin45y.jpg'
                ]
            ];

            foreach ($categories as $cat): ?>
                <div class="col-sm-6 col-lg-3">
                    <a href="#products" class="category-card d-flex text-decoration-none">
                        <div class="card-bg" style="background-image: url('<?= htmlspecialchars($cat['image']) ?>');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">
                            <h3 class="fs-5 fw-bold text-white mb-0"><?= htmlspecialchars($cat['title']) ?></h3>
                            <p class="card-subtitle"><?= htmlspecialchars($cat['subtitle']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
