<!-- Footer -->
<footer class="footer-dark py-4">
    <div class="container">
        <div class="text-center">
            <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                <img src="assets/logo-mauli.png" alt="Mauli Puja Bhandar Logo" style="height: 36px; width: auto;" />
                <span class="fs-6 fw-bold text-white">Mauli Puja Bhandar</span>
            </div>

            <p class="small text-footer-muted mb-3">
                Authentic puja samagri, incense sticks &amp; spiritual accessories in Kolhapur.
            </p>

            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="https://wa.me/917887770009" class="footer-social-icon" aria-label="WhatsApp">
                    <i class="ri-whatsapp-fill"></i>
                </a>
            </div>

            <div class="footer-bottom pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <p class="small text-footer-muted mb-0">&copy; <?= date('Y') ?> Mauli Puja Bhandar. All rights reserved.</p>
                <div class="small text-footer-muted">
                    Designed &amp; Developed by <a href="https://webart4u.com" target="_blank" rel="noopener noreferrer" class="text-decoration-none fw-bold" style="color: var(--primary);">WebArt4U</a>
                </div>
            </div>
        </div>
    </div>
</footer>

    </main>
    </div><!-- /.position-relative z-1 -->

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Smooth Scroll for anchor links -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    <!-- GA4 Enhanced Event Tracking -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Track phone calls
            document.querySelectorAll('a[href^="tel:"]').forEach(function(el) {
                el.addEventListener('click', function() {
                    gtag('event', 'phone_call', {
                        event_category: 'contact',
                        event_label: el.getAttribute('href')
                    });
                });
            });

            // Track WhatsApp clicks
            document.querySelectorAll('a[href*="wa.me"]').forEach(function(el) {
                el.addEventListener('click', function() {
                    gtag('event', 'whatsapp_click', {
                        event_category: 'contact',
                        event_label: 'WhatsApp Chat'
                    });
                });
            });

            // Track Get Directions clicks
            document.querySelectorAll('a[href*="google.com/maps"]').forEach(function(el) {
                el.addEventListener('click', function() {
                    gtag('event', 'get_directions', {
                        event_category: 'contact',
                        event_label: 'Google Maps Directions'
                    });
                });
            });

            // Track Visit Store CTA
            document.querySelectorAll('.btn-hero-outline, .btn-hero-primary').forEach(function(el) {
                el.addEventListener('click', function() {
                    gtag('event', 'cta_click', {
                        event_category: 'engagement',
                        event_label: el.textContent.trim()
                    });
                });
            });

            // Track section visibility
            var sections = document.querySelectorAll('section[id]');
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        gtag('event', 'section_view', {
                            event_category: 'engagement',
                            event_label: entry.target.id
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });

            sections.forEach(function(section) {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>
