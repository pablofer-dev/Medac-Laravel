@php
    $data = session('mensaje');
@endphp
<div>
    @if (session()->has('mensaje'))
        @foreach ($data as $item)
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ $item['hora'] }}
            </button>
        @endforeach
    @endif
</div>
