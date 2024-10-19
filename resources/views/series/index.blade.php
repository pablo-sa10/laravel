<x-layout tittle="Séries">

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar Série</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>

    {{-- @{{nome}} --}}


    <script>
        //O CODIGO ABAIXO SERIA A MESMA COISA QUE UM JSON_ENCODE()
        // const series = {{ Js::from($series) }};
    </script>

</x-layout>