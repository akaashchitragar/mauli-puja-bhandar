<!-- Footer -->
<footer class="footer-dark py-4">
    <div class="container">
        <div class="text-center">
            <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                <i class="ri-ancient-gate-fill fs-4" style="color: var(--primary);"></i>
                <span class="fs-6 fw-bold text-white">Mauli Puja Bhandar</span>
            </div>

            <p class="small text-footer-muted mb-3">
                Authentic puja samagri, brass idols &amp; spiritual accessories in Kolhapur.
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
</body>
</html>
