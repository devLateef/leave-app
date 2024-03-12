@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 mx-auto mt-5']) }}>
        {{ $status }}
    </div>
@endif
