<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12 row justify-content-between align-items-center pt-5 border-blue">
                <div class="col-md-6 col-sm-12">
                    <a href="/">
                        @if(!empty($generalSettings['footer_logo']))
                            <img src="{{ $generalSettings['footer_logo'] }}" alt="footer logo" class="footer-logo">
                        @endif
                    </a>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="footer-links">
                        @if(!empty($socials) and count($socials))
                            @foreach($socials as $social)
                                <a href="{{ $social['link'] }}">
                                    <img src="{{ $social['image'] }}" alt="{{ $social['title'] }}" class="mr-15">
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
