<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 bg-white shadow-sm text-[12px] font-bold  rounded-md border border-gray-300 ']) }}>
    {{ Str::upper($slot) }}
</button>
