<h1>
    <body>
        <h1>Resultado da sua pesquisa</h1>
        <hr>
        
        @if( $corPesquisa != "" )
            <h2>Você pesquisou por: {{ $corPesquisa}}</h2>
            @if($index != false && $index >= 0)
                <h2>O item pesquisado está no índice: {{ $index }}</h2>
            @else
                <h2>O item pesquisado não foi encontrado</h2>
            @endif
        @else
            <h2>Pesquisa vazia</h2>
        @endif
        
        <hr>
        <h3>Elementos:</h3>
        <p>Total de Elementos: {{ $colectionCores->count() }}</p>
        <ul>
            @foreach($colectionCores as $umaCor)
                <li>{{ $umaCor }}</li>
            @endforeach
        </ul>
    </body>
</h1>