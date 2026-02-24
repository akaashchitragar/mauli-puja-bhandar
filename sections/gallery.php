<!-- Decorative Divider -->
<div class="decorative-divider">
    <div class="line"></div>
    <i class="ri-flower-fill icon"></i>
    <div class="line"></div>
</div>

<!-- Gallery Section -->
<section id="gallery" class="py-5">
    <div class="container">
        <div class="mb-4">
            <h2 class="fs-2 fw-bold mb-2">Temple Gallery</h2>
            <p class="text-muted mb-0">Glimpses of our premium products and store ambience.</p>
        </div>

        <?php
        $galleryItems = [
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_9EZBdK06_fZ18oJrC33KjOmmK25xVAt-wU0RScMMuQAHofhyXLUplavX6XqHxrz7xoJ3Hyki-qSj7r4F2SGbXg2QEfji_IUnib7Igril6Azqh6tFlFW_p1OialIn1QzBt6StQ1Nzv9hT-9S1Zi2ch9b4pdCIqJ1SklK775im7PwoGl97EZInqVBeXLrUJZ4w-TR1OH9Ry-riz5O63XlgOo2cKsSGuBLoWdCIqt3lEHu4A_3uFLPjB5AKDHN9ILyVAqeZspynCDYD',
                'alt' => 'Brass puja thali with diya and flowers',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBmAia9_GhqoJ1vSRbvHY6_ktoqBmnXeAIL1G6nQxUnvcr29r_BO_H-Ysdem4DaFofGqju1xtqZ-QVPv4JzxHgrDxIW3sb-jmWesd7kITF5_v55JqN7Tg3nw87hNVHUnNI9Y7P8uhSwdtRDu6MXzwZADjHVvUl0MpEkJ_0mD8JjQmv9mI1QLZTBc5medWbXIqt8VfgHM9y_d4xWxfQcu4ZqNHnYjuFLk95Q-nPYemXdSTARbsX9OSHCez1KZ22_3o6ORS5wzLnQh5eS',
                'alt' => 'Colorful rangoli powder in bowls',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCWWuSXDs0eGPqBm1uTyNH6JCsHO6oGCmXcX3UdcrwdzFr7aUjB25s4iMSlSKNQJDvxVUWunE-RExFhULpT3H6EtmrMds9bHvp4JE5ZayQWgijx90FGx1jCdB89krLY_EeWFtmQm3jh4zEr9k0wWZyNWfYzzXJW_Fy1OtJAPfFcttLTyJY3ZhOz_RGP9AfD2cxyl_pT3XVA0IaFLoCPRzM5Ld6OKESIU1RI2rK5UvBZVd9BzFgK0ZwQ99B7qpm9CtYOMWpByRcj_xXz',
                'alt' => 'Traditional indian oil lamp burning',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDNQhF4JSlh9ALtaPu5oUB5wT-sqH2gaKCjqOkevOnwkW_jgF7DTofBia9Z2s1pgrbRWRyzTn4_urab7ykVs6X6SLdmC8-ovziLxgYngs9_WpfNlKrU6HYUDZQiAfzGv9PXirkUj9fS7iuAvJgUFqjGyMp3H5lQK9RKAnTeXcCdutlRj-BxEb6BS8CGIRwr-kVmoLgWUlHoGhyH-joNr81FlF3lLjEy_jlNTG4iu-v9r_zTnKN5jX14HWYmveoprvfuuXgk0Lnlk8GO',
                'alt' => 'Large Ganesha idol with decorations',
                'tall' => true
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAnKaePOnwcORPtir0lygU5glX5BBYE8uvXApbaKYlD_g4NGWK_P0rvN4q691RF-MeXttpm1KXyFj5JP6LokyI652wSVTGZrTwQc-PzXAJOjKtAMMcdBUuu373ADefCVe8PtdyQSdCe2VK6aCEylweestHBH4VjLjt0Y0kLqj5yZfSozi3caW_zVSf9vyaVp0XeAR_cxfOtkATmDRBuuzIbUoaG8eZfuAmFPTD1vJPnZwsqiHFDHR0hAuBkEAYW3WiwTFeKA2dknzij',
                'alt' => 'Marigold flower garlands for temple',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCG4lGuAAJN2MVtdSL650SGheYmrQtGV9DranpS6MDIEQ2CA0HpsKe2eCRPK0yBq0B7aOdPH7B3jrUey2HD-ItfbRcxrPe-iaZRD4isySRaEdJZE7chUps0bQA_tIzoeMmpcidwjSRnWqpO9-XLdme4Q5jeQ5u--eEtmhXkDtnJvDukOY9RIPP20nMfUmfJHfwyOPKZJ0NUcFnjIm3Rhv1gu8PSPayYOj4QS8XRPw5A6ybVtjA_BPzw8lQEr6ztEYz-NxkEiXW0y9nJ',
                'alt' => 'Incense sticks burning with smoke',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-ZiKravEbkvInnyag_LWr33fdjdTL2sNbQOWl1JOUGRBgOpshDAvkQCalbbE6DSxHVEQE_gCv9gRtwl4SSfselkXk6y2MTEScPWGBX1gRnRZ-0IyT4u7co8COSXT9xY6Ktn0QKXD5BMl9ulrRcwiPIyocqNsWKsuerobqeTaWVkHXNyOXmolTp7wn8fYT4eIBZjfF9-TBE44KQQ4nAQQSJoamIgF2LWvbdGfhjU4APXFAwbdQhPtBhFPkScBnNtssfwcgzkH1YDXq',
                'alt' => 'Stack of betel leaves and coconut',
                'tall' => false
            ],
            [
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDWGbMMWPboB2qoJ9yQpAHFqTQ89JkDFqfHyx-aoUTXqvqZ_0ipecomUnPtmWSRXxxb9s30JuOm-qUgkS3wvI17JeCQzvlM-UeUDOxD4DEFBdcD5lzjThVmAKA3gw8lXzZnicSq3-CIdRk_WE9sP_flnNKPJ--ZfGT5TJkJMs6rQgYdjx2aH4X763UdHsRcXyoyvVXqJbFeZ32rzKvI7Etprx_vUpudDp2YqM4IE7oo5fEFa3OzBkmyqlVdthZpZ5f3DWzVmgWOF43Z',
                'alt' => 'Copper water vessel kalash',
                'tall' => false
            ]
        ];
        ?>

        <div class="row g-3">
            <?php
            $index = 0;
            foreach ($galleryItems as $item):
                $colClass = 'col-6 col-md-4 col-lg-3';
                $itemClass = 'gallery-item gallery-item-square';
                if ($item['tall']) {
                    $itemClass = 'gallery-item gallery-item-tall';
                }
            ?>
                <div class="<?= $colClass ?> <?= $item['tall'] ? 'gallery-item-tall' : '' ?>">
                    <div class="<?= $itemClass ?>" style="<?= $item['tall'] ? 'height: 100%;' : '' ?>">
                        <div class="gallery-img" style="background-image: url('<?= htmlspecialchars($item['image']) ?>');" role="img" aria-label="<?= htmlspecialchars($item['alt']) ?>"></div>
                        <div class="gallery-overlay">
                            <i class="ri-zoom-in-line text-white" style="font-size: 2rem; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));"></i>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            endforeach;
            ?>
        </div>
    </div>
</section>
