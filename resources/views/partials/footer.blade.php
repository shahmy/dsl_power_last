<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>company</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('packages') }}">Packages</a></li>
                                <li><a href="{{ route('leaderships') }}">Leadership</a></li>
                                <li><a href="{{ route('blog') }}">blog</a></li>
                                <li><a href="{{ route('partners') }}">Partners</a></li>
                                <li><a href="{{ route('contact-us') }}">Request a quote / Contact Us </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>Packages</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                @php
                                    $listPackages = \App\Models\Package::where('status',1)->orderBy('order_by','asc')->get();
                                @endphp
                                @foreach ( $listPackages as $package )
                                <li><a href="{{route('single-package',[$package->id,$package->slug])}}"> {{$package->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                   <!-- <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>support</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Installation</a></li>
                                <li><a href="#">Warranty</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>
                                <li class="phone"><a href="#">+94 772 211 211</a></li>
                                <li class="address">
                                    <p>290/25, Sri Sangaraja Mawatha Colombo 10.</p>
                                </li>
                                <!-- <li class="directions"><a href="#"><i class="energia-location-Icon"></i>get directions</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright"><span>&copy; 2022 DSL Power <a href="#"> </a>. all rights reserved. </span>
                            <ul class="list-unstyled social-icons">
                                <li> <a class="share-facebook" href="https://www.linkedin.com/company/douglas-sons-pvt-ltd/" target="_blank"><i class="energia-facebook"></i>facebook </a></li>
                                <li> <a class="share-linkedin" href="https://www.facebook.com/Okaya-Sri-Lanka-107823965115494" target="_blank"><i class="energia-linkedin"></i>linkedIn</a></li>
                                {{-- <li> <a class="share-youtube" href="javascript:void(0)"><i class="energia-youtube"></i>youtube</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>
