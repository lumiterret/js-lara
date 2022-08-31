<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <x-nav-link :href="route('dashboard')" class="nav-link" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
    </ul>
    <div class="ml-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
    </div>


</nav>
