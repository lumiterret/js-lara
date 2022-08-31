<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="brand-link">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="alert alert-danger alert-dismissible" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-group mb-3">
                <x-input id="email"
                         type="email"
                         name="email"
                         placeholder="Email"
                         :value="old('email')"
                         required autofocus />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <x-input id="password"
                         type="password"
                         name="password"
                         placeholder="Password"
                         required autocomplete="current-password" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
            <!-- Remember Me -->
            <div class="col-8">
                <div class="icheck-primary">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            <div class="col-4">
                <x-button class="btn-primary btn-block">
                    {{ __('Log in') }}
                </x-button>
            </div>

            </div>
        </form>
        <div class="row">
            <div class="col">
                <ul class="nav">
                    @if (Route::has('password.request'))
                       <li class="nav-link"> <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                       </li>
                    @endif
                    <li class="nav-link">
                        <a href="{{ route('register') }}">Register a new membership</a>
                    </li>
                </ul>


            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
