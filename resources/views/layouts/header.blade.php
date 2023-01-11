<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('images/logo/logo-jat.jpg')}}" alt="Logo"></a>
            </div>
            <div class="header-top-right">
                @if (Auth::check())
                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown"
                        class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2">
                            <img src="{{asset('images/faces/1.jpg')}}" alt="Avatar">
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name"><?=  Auth::user()->name; ?></h6>
                            <p class="user-dropdown-status text-sm text-muted"><?= Auth::user()->role; ?></p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                        aria-labelledby="topbarUserDropdown">
                        <li><a class="dropdown-item" href="{{URL::to('profil')}}">My Account</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('cart')}}">Cart</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('order')}}">Order</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </ul>
                </div>
                @endif

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            @include('layouts.menu')
        </div>
    </nav>

</header>