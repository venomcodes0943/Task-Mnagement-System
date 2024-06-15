@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-red-500 space-y-1 font-semibold']) }}>
        @foreach ($messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
