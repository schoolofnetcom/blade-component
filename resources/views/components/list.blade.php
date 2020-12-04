@props([
    'items' => []
    ])

<div>
    <ul class="list-group" {{ $attributes->merge(['data1' => 'Ola mundo']) }} >
        @foreach($items as $item)
            <li class="list-group-item">{{ $item }}</li>
        @endforeach
    </ul>
</div>
