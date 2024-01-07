@props([
  'disabled' => false,
  'errors',
])

@php
    $classes = (empty($errors))
                ? 'bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500'
                : 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500';
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $classes]) !!}>
@if ($errors)
    <ul class="mt-2 text-sm text-red-600 dark:text-red-500">
        @foreach ((array) $errors as $error)
        @php
            debug($error);
        @endphp
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
