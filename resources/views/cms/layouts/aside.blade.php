<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home_path')}}" class="app-brand-link">
            <img src="../images/logo-light.svg" alt="Servetech Pro" width="40">
            <span class="app-brand-text demo menu-text fw-bolder ms-2" style="font-size: 1.5rem !important">Servetech Pro</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'homeSlider' || Route::currentRouteName() == 'createHomeSlider' || Route::currentRouteName() == 'editHomeSlider') ? 'active' : '' }}">
            <a href="{{route('homeSlider')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Slider">Slider</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
            <a href="{{route('about')}}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="About">About</div>
            </a>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'services' || Route::currentRouteName() == 'createServices' || Route::currentRouteName() == 'editServices') ? 'active' : '' }}">
            <a href="{{route('services')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Services">Services</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'products' ? 'active' : '' }}">
            <a href="{{route('products')}}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Products">Products</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'sectionOne' ? 'active' : '' }}">
            <a href="{{route('sectionOne')}}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Section One">Section One</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'sectionTwo' ? 'active' : '' }}">
            <a href="{{route('sectionTwo')}}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Section Two">Section Two</div>
            </a>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'portfolio' || Route::currentRouteName() == 'createPortfolio' || Route::currentRouteName() == 'editPortfolio') ? 'active' : '' }}">
            <a href="{{route('portfolio')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Portfolio">Portfolio</div>
            </a>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'clients' || Route::currentRouteName() == 'createClient' || Route::currentRouteName() == 'editClient') ? 'active' : '' }}">
            <a href="{{route('clients')}}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Clients">Clients</div>
            </a>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
            <a href="{{route('contact')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Contact">Contact</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>
        <li class="menu-item {{ Route::currentRouteName() == 'footer' ? 'active' : '' }}">
            <a href="{{route('footer')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Footer Section">Footer Section </div>
            </a>
        </li>
        <!-- Extended components -->
        <li class="menu-item {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}">
            <a href="{{route('settings')}}" class="menu-link">
                   <i class="bx bx-cog me-2"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="menu-item {{ Route::currentRouteName() == 'seo' ? 'active' : '' }}">
            <a href="{{ route('seo') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="SEO">SEO</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Logout">Logout</div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </a>
        </li>

    </ul>
</aside>
