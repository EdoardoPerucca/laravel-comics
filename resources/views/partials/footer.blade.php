<footer>
    <div class="container-1000">

        <div class="footer-left">

            <div class="row">

                <div class="col-1">
                    <ul>
                        @foreach ($footerLinks as $singleFooterLink)
                        <li><a href="{{ ($singleFooterLink['name']) }}">{{ $singleFooterLink['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-right">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo">
        </div>

    </div>
</footer>