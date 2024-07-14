<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="footer__title">
                    {{__('texts.about')}}
                </div>
                <p class="footer__text">
                    {{__('texts.about_text_footer')}}
                </p>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 mt-4 mt-lg-0">
                <div class="footer__main">
                    <div class="footer__title">
                        {{__('texts.contact information')}}
                    </div>
                    <ul class="footer__link">
                        <li>
                            <div class="footer__link--wr">
                                <i class="icon-email"></i>
                                <span>Email</span>
                            </div>
                            <a href="mailto: {{$settings->support_email}}">
                                {{$settings->support_email}}
                            </a>
                        </li>
                        <li>
                            <div class="footer__link--wr">
                                <i class="icon-phone"></i>
                                <span>Phone</span>
                            </div>
                            <a href="tel: {{$settings->support_phone}}">
                                {{$settings->support_phone}}
                            </a>
                        </li>
                        <li>
                            <div class="footer__link--wr">
                                <i class="icon-aparteman"></i>
                                <span>Address</span>
                            </div>
                            <a href="#">
                                {{$settings->more_configs['address']}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-2 mt-4 mt-lg-0">
                <div class="footer__menu">
                    <div class="footer__menu--title">
                        {{__('texts.Quick Links')}}
                    </div>
                    <nav>
                        <ul>
                            @foreach (menu('quick_links') as $item)
                                <li>
                                    <a href="{{ $item['url'] != null ? $item['url'] : route($item['route']) }}" @if($item['blank']) target="_blank" @endif>
                                        <i class="icon-Polygon"></i>
                                        <span>{{$item['title']['en']}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyRight">
    <div class="container">
        <p>© {{\Carbon\Carbon::now()->year . ' ' . __('texts.copyright')}}</p>
    </div>
</div>
