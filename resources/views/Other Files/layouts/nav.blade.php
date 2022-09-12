<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-2">
    <div class="container">
        
        <a class="navbar-brand text-primary font-weight-bold text-uppercase" href="{{ url('/') }}">
            dslPower
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Apps <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('view-any', App\Models\User::class)
                            <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                            @endcan
                            @can('view-any', App\Models\Partner::class)
                            <a class="dropdown-item" href="{{ route('partners.index') }}">Partners</a>
                            @endcan
                            @can('view-any', App\Models\Testimonial::class)
                            <a class="dropdown-item" href="{{ route('testimonials.index') }}">Testimonials</a>
                            @endcan
                            @can('view-any', App\Models\ApplianceCategory::class)
                            <a class="dropdown-item" href="{{ route('appliance-categories.index') }}">Appliance Categories</a>
                            @endcan
                            @can('view-any', App\Models\Category::class)
                            <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                            @endcan
                            @can('view-any', App\Models\HomeSlider::class)
                            <a class="dropdown-item" href="{{ route('home-sliders.index') }}">Home Sliders</a>
                            @endcan
                            @can('view-any', App\Models\AboutPage::class)
                            <a class="dropdown-item" href="{{ route('about-pages.index') }}">About Pages</a>
                            @endcan
                            @can('view-any', App\Models\BlogPage::class)
                            <a class="dropdown-item" href="{{ route('blog-pages.index') }}">Blog Pages</a>
                            @endcan
                            @can('view-any', App\Models\ContactPage::class)
                            <a class="dropdown-item" href="{{ route('contact-pages.index') }}">Contact Pages</a>
                            @endcan
                            @can('view-any', App\Models\HomeAboutSection::class)
                            <a class="dropdown-item" href="{{ route('home-about-sections.index') }}">Home About Sections</a>
                            @endcan
                            @can('view-any', App\Models\HomePage::class)
                            <a class="dropdown-item" href="{{ route('home-pages.index') }}">Home Pages</a>
                            @endcan
                            @can('view-any', App\Models\Post::class)
                            <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                            @endcan
                            @can('view-any', App\Models\Tag::class)
                            <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
                            @endcan
                            @can('view-any', App\Models\LoadItem::class)
                            <a class="dropdown-item" href="{{ route('load-items.index') }}">Load Items</a>
                            @endcan
                            @can('view-any', App\Models\Package::class)
                            <a class="dropdown-item" href="{{ route('packages.index') }}">Packages</a>
                            @endcan
                            @can('view-any', App\Models\Product::class)
                            <a class="dropdown-item" href="{{ route('products.index') }}">Products</a>
                            @endcan
                            @can('view-any', App\Models\ProductCategory::class)
                            <a class="dropdown-item" href="{{ route('product-categories.index') }}">Product Categories</a>
                            @endcan
                            @can('view-any', App\Models\Project::class)
                            <a class="dropdown-item" href="{{ route('projects.index') }}">Projects</a>
                            @endcan
                            @can('view-any', App\Models\PartnerPage::class)
                            <a class="dropdown-item" href="{{ route('partner-pages.index') }}">Partner Pages</a>
                            @endcan
                            @can('view-any', App\Models\Gallery::class)
                            <a class="dropdown-item" href="{{ route('galleries.index') }}">Galleries</a>
                            @endcan
                        </div>

                    </li>
                    @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) || 
                        Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Access Management <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('view-any', Spatie\Permission\Models\Role::class)
                            <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                            @endcan
                    
                            @can('view-any', Spatie\Permission\Models\Permission::class)
                            <a class="dropdown-item" href="{{ route('permissions.index') }}">Permissions</a>
                            @endcan
                        </div>
                    </li>
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>