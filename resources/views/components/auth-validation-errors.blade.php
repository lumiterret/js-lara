@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <h5>
            <i class="icon fas fa-ban"></i>
            {{ __('Whoops! Something went wrong.') }}
        </h5>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
