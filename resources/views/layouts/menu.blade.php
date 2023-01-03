<ul>
    <li class="menu-item">
        <a href="{{URL::to('/')}}" class='menu-link'>
            <span>Home</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{URL::to('/kategori')}}" class='menu-link'>
            <span>Kategori</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{URL::to('/produk')}}" class='menu-link'>
            <span>Produk</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{URL::to('/kontak')}}" class='menu-link'>
            <span>Kontak</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{URL::to('/tentang')}}" class='menu-link'>
            <span>Tentang</span>
        </a>
    </li>
    @if (!Auth::check())
    <li class="menu-item">
        <a href="{{ URL::to('login') }}" class='menu-link'>
            <span>Login</span>
        </a>
    </li>
    @endif
</ul>