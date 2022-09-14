<header class="header header-light header-topbar header-topbar3 header-shadow" id="navbar-spy">
    <div class="top-bar top-bar-3">
        <div class="container">
            <div class="blocks-holder">
                <div class="block-left">
                    <div class="top-contact">
                        <div class="contact-infos"><i class="energia-phone-Icon"></i>
                            <div class="contact-body">
                                <p>Hot Line: <a href="tel:123-456-7890">+94 772 211 211</a></p>
                            </div>
                        </div>
                        <!-- <div class="contact-infos"><i class="energia-email--icon"></i>
                            <div class="contact-body">
                                <p>email: </p>
                            </div>
                        </div>
                        <div class="contact-infos"><i class="energia-clock-Icon"></i>
                            <div class="contact-body">
                                <p>hours: Mon-Fri: 8am – 7pm </p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="block-right">
                    {{-- <div class="topbar-links"><a href="#">news & media</a><a href="#">careers</a><a
                            href="#">FAQs</a></div> --}}

                    <div class="social-links">
                        <a class="share-facebook" href="https://www.facebook.com/Okaya-Sri-Lanka-107823965115494" target="_blank"><i class="energia-facebook"></i></a>
                        <a class="share-linkedin" href="https://www.linkedin.com/company/douglas-sons-pvt-ltd/" target="_blank"><i class="energia-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img class="logo logo-dark"
                    src="{{ asset('site/assets/images/logo/logo.jpg') }}" alt="Energy Logo" /><img
                    class="logo logo-mobile" src="{{ asset('site/assets/images/logo/logo.jpg') }}"
                    alt="Energia Logo" /></a>
            <div class="module-holder module-holder-phone">
                <div class="module module-search">
                    <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                </div>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}" id="home" data-hover="Home"><a href="{{ route('home') }}"><span>Home</span></a></li>

                    <li class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }}" id="about" data-hover="About Us"><a href="{{ route('about-us') }}"><span>About Us</span></a></li>

                    <li class="nav-item {{ (request()->is('packages')) ? 'active' : '' }}" id="package" data-hover="Packages"><a href="{{ route('packages') }}"><span>Packages</span></a></li>

                    <li class="nav-item has-dropdown" data-hover="Products"><a class="dropdown-toggle" href="#"
                        data-toggle="dropdown"><span>Products</span></a>
                      <ul class="dropdown-menu">
                        @foreach ($productsCategories as $category )
                            <li class="nav-item has-dropdown" data-hover="{{$category->name}}">
                            <a href="#" data-toggle="dropdown"><span>{{$category->name}}</span></a>
                                @if (count($category->childrenCategory) > 0)
                                <ul class="dropdown-menu dropdown-submenu">
                                    @foreach ($category->childrenCategory as $child )
                                        <li class="nav-item"><a href="{{route('list.category.products',[$child->id,\Illuminate\Support\Str::slug($child->name)])}}"><span>{{$child->name}}</span></a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endforeach
                        {{-- <li class="nav-item has-dropdown" data-hover="Pannels">
                          <a href="#" data-toggle="dropdown"><span>Pannels</span></a>
                          <ul class="dropdown-menu dropdown-submenu">
                            <li class="nav-item"><a href="#"><span>Mono & Poly</span></a></li>
                          </ul>
                        </li>

                        <li class="nav-item has-dropdown" data-hover="Battery">
                          <a href="#"><span>Battery</span></a>
                          <ul class="dropdown-menu dropdown-submenu">
                            <li class="nav-item"><a href="#"><span>Solar Tubler</span></a></li>
                            <li class="nav-item"><a href="#"><span>Inverter Tubler</span></a></li>
                          </ul>
                        </li> --}}

                      </ul>
                    </li>

                    <li class="nav-item {{ (request()->is('leaderships')) ? 'active' : '' }}"  id="leadership" data-hover="Leadership"><a href="{{ route('leaderships') }}"><span>Leadership</span></a></li>

                    <li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }}" id="blog" data-hover="Blog Us"><a href="{{ route('blog') }}"><span>Blog</span></a></li>

                    <li class="nav-item {{ (request()->is('partners')) ? 'active' : '' }}" id="partners" data-hover="Partners"><a href="{{ route('partners') }}"><span>Partners</span></a></li>

                </ul>
                <div class="module-holder">
                    <div class="module module-search">
                        <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                    </div>
                    <div class="module-contact module-contact-2"><a class="btn btn--primary" href="{{ route('contact-us') }}">request a
                            quote / Contact Us <i class="energia-arrow-right"></i></a></div>

                </div>

            </div>

        </div>

    </nav>
</header>
