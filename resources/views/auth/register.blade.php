<x-guest-layout>
    <x-auth-card>

        <x-slot name="logo">
            <a href="/" class="brand-link">
                <x-application-logo/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="alert alert-danger alert-dismissible" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="input-group mb-3">
                <x-input id="name" type="text" name="name" placeholder="Full Name" :value="old('name')" required autofocus />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <!-- Email Address -->
            <div class="input-group mb-3">
                <x-input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required />
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
                         required autocomplete="new-password" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="input-group mb-3">
                <x-input id="password_confirmation"
                         type="password"
                         placeholder="Retype password"
                         name="password_confirmation" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                    <x-button class="btn-primary btn-block">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </form>
    </x-auth-card>
</x-guest-layout>
