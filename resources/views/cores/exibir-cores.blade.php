<h1>
    <body>
        <p>Total de Elementos: {{ $colectionCores->count() }}</p>
        <ul>
            @foreach($colectionCores as $umaCor)
                <li>{{ $umaCor }}</li>
            @endforeach
        </ul>
    </body>
</h1>