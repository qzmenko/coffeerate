@props([
  'is_error' => false,
  'value' => '',
])
@php
        $classes = (! $is_error)
                    ? 'block mb-2 text-sm font-medium text-gray-900 dark:text-white'
                    : 'block mb-2 text-sm font-medium text-red-700 dark:text-red-500';
@endphp

<label {{ $attributes->merge(['class' => $classes]) }}>
    {{ $value ?? $slot }}
</label>
