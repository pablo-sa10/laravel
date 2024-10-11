<x-layout tittle="Séries">

    <a href="/series/criar">Adicionar Série</a>

    <ul>
        @foreach($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>

    {{-- @{{nome}} --}}


    <script>
        //O CODIGO ABAIXO SERIA A MESMA COISA QUE UM JSON_ENCODE()
        const series = {{Js::from($series)}};
    </script>

</x-layout>