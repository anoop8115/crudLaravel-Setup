<!-- add dashboard -->
 <li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <i class="fa fa-th-large"></i>
        <p>Dashboard</p>
    </a>
</li>
