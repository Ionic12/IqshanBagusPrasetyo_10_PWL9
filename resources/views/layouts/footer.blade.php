<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="/index" class="nav-link">
                    {{ __('Home') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link">
                    {{ __('About Us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/contact" class="nav-link">
                    {{ __('Contact Us') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('made with') }} <i class="tim-icons icon-heart-2"></i> {{ __('by Iqshan Bagus Prasetyo') }}.
        </div>
    </div>
</footer>
