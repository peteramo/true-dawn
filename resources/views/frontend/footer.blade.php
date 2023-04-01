<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{ $over_alls->ove_company_name }}</h3>
                        <img src="https://gooyanet.com/seeCustomPicture" width="100" height="150">
                            @if(!empty($con_facts->con_address))
                            <p>
                                {{ $con_facts->breakAddress() }}
                            </p>
                            <br>
                            @endif
                            @if($con_facts->connPara())
                                <p>
                                    @if(!empty($con_facts->con_phone))<strong>Phone:</strong> {{ $con_facts->con_phone }}<br>@endif
                                    @if(!empty($con_facts->con_phone2))<strong>Phone 2:</strong> {{ $con_facts->con_phone2 }}<br>@endif
                                    @if(!empty($con_facts->con_email))<strong>Email:</strong> {{ $con_facts->con_email }}<br>@endif
                                    @if(!empty($con_facts->con_email2))<strong>Email 2:</strong> {{ $con_facts->con_email2 }}<br>@endif
                                    @if(!empty($con_facts->con_mobile))<strong>Mobile:</strong> {{ $con_facts->con_mobile }}<br>@endif
                                    @if(!empty($con_facts->con_fax))<strong>Fax:</strong> {{ $con_facts->con_fax }}<br>@endif
                                 </p>
                            @endif
                            @if($con_facts->socialLinks())
                            <div class="social-links mt-3">
                                    @if(!empty($con_facts->con_twitter))<a href="{{ $con_facts->con_twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>@endif
                                    @if(!empty($con_facts->con_facebook))<a href="{{ $con_facts->con_facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>@endif
                                    @if(!empty($con_facts->con_instagram))<a href="{{ $con_facts->con_instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>@endif
                                    @if(!empty($con_facts->con_skype))<a href="{{ $con_facts->con_skype }}" class="google-plus"><i class="bx bxl-skype"></i></a>@endif
                                    @if(!empty($con_facts->con_linkedin))<a href="{{ $con_facts->con_linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>@endif
                            </div>
                            @endif
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $foo_fighter->foo_link_1 }}">{{ $foo_fighter->foo_name_1 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $foo_fighter->foo_link_2 }}">{{ $foo_fighter->foo_name_2 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $foo_fighter->foo_link_3 }}">{{ $foo_fighter->foo_name_3 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $foo_fighter->foo_link_4 }}">{{ $foo_fighter->foo_name_4 }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $foo_fighter->foo_link_5 }}">{{ $foo_fighter->foo_name_5 }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Links</h4>
                    <ul>
                        @foreach($menus_items as $item)
                            @php
                                if(request()->getHost() == "localhost"){
                                    $segment = config('titles.localHost');
                                }else{
                                    $segment = config('titles.siteUrl');
                                }
                            @endphp
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $segment.$item->men_link }}">{{ $item->men_name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                @if($set_things->set_news_letter_subscription == 1)
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter to get the latest updates</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ $over_alls->ove_brand_name }}</span></strong>. All Rights Reserved
        </div>
        @if($set_things->set_credits_footer_info == 1)
        <div class="credits">
            Made by <a target="_blank" href="https://pouyait.com/">PouyaIT</a>
        </div>
        @endif
    </div>
</footer><!-- End Footer -->
