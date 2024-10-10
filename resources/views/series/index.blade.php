<x-layout tittle="Séries">
    <ul>
        @foreach($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>