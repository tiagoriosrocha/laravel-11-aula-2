<h1>
    <body>
        <p>Total de Elementos: {{ $produtos->count() }}</p>
        <ul>
            @foreach($produtos as $umProduto)
                <li>
                    {{ $umProduto["nome"] }}; 
                    R${{ number_format($umProduto["preco"], 2, ',', '.') }}
                </li>
            @endforeach
        </ul>
    </body>
</h1>

