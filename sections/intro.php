<!-- Introduction Section -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 720px;">
            <h2 class="display-6 fw-bold mb-4">Where Tradition Meets Devotion</h2>
            <p class="text-muted fs-5 lh-lg">
                Situated in the heart of Kolhapur, Mauli Puja Bhandar has been serving devotees for decades. We understand the sanctity of your rituals, which is why we ensure every item—from the smallest camphor tablet to the most elaborate idol—is pure and pristine.
            </p>
        </div>

        <!-- Category Preview Cards -->
        <div class="row g-4 mt-5 justify-content-center">
            <?php
            $categories = [
                [
                    'title' => 'Brass Idols',
                    'subtitle' => 'Handcrafted Murti & Lamps',
                    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBViH_7i5bOCVTLuai9qEWAu28w2x0Qz7AThs0Oc63Pxb65g8BX5SIuXaV4_m201gD7WV1uAWZJyXCmTHyypMqre-renNAgQTAkowKfoMRwOWCvp9ysmmllZ7gH6s_hJ2Vp1N0ZFEhnKkb4SU7l71jNWqUQzFHFJq5lIqsp-MdumoLGLnkJ7scZlcXx_7SxQGdhKBsLZYHKPGInIR7WVlPbyoHRal-ap-sEeWR3fj5tiSqEz5Zl6MadzlF9Z1nZqFnivxXUj4V3mQ6P'
                ],
                [
                    'title' => 'Festival Decor',
                    'subtitle' => 'Torans, Rangoli & Lights',
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
                    'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC05GsZzj5H48kcngnevpHWKzx6WbhkK_pEtCCeTz9NJflFOG6K2Mx2AnNwoheoppHaBskyh9A_iZ9MkRg-q3h3b2NwoEUjFauuaFrTVbz90jwzZtQx_uHQgA1-qjQMjzxjLZsB69FMJP1JLKoLWtadqk-XoT9UUraqfUDLDwTrL2W3ql2km24KlTBl3oiL7ygFhThsJOdjN3LBpHqK6UC8AyQNun4_j-bB5UVfvGNVuY47LIj3NWEL0l94M6xtTtmoWmmK6xa5iiPH'
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
