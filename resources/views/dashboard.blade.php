<x-app-layout>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    You're here
                </div>
                <div class="card-body">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
