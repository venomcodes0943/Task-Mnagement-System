@props(['value'])

<label {!! $attributes->merge(['class' => 'block font-medium text-gray-900']) !!}>
    {{ $value ?? $slot }}
</label>
