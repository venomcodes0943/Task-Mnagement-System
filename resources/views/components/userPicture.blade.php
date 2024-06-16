@props(['users' => false, 'user' => false, 'about' => 'User'])

<div {{ $attributes->merge(['class' => 'tooltip bg-center bg-cover rounded-full cursor-pointer outline outline-white']) }}
    data-tippy="{{ $about }}" style="background-image: url('{{ $user ? $user : $users }}');">
</div>
