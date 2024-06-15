@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'bg-slate-200 border-slate-500 border pl-3 py-2 rounded-md outline-sky-700',
]) !!}>
