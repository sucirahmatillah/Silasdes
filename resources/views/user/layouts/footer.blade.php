<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; {{ date('Y') }}
                        <a href="{{ url('/') }}" class="link-secondary" target="_blank">{{ config('app.name') }}</a>.
                        All rights reserved.
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="link-secondary" rel="noopener">
                            v1.0.0
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
