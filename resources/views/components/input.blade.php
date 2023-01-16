@props([
    'id',
    'name' => $id,
    'title',
    'type' => 'text',
    'placeholder' => '',
    'model' => null,
])

<div>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" {{ $attributes }}
           class="border text-gray-900 text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white"
           value="{{ $model?->$name }}" placeholder="{{ $placeholder }}">
    <p id="validation_error_{{ $id }}" class="mt-1 text-sm text-red-600 dark:text-red-500">&nbsp;</p>
</div>
