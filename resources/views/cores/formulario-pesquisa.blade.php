<h1>
    <body>
        <form method="POST" action="pesquisarItem">
            {{ csrf_field() }}
            Pesquise: <input type="text" name="corpesquisa">
            <button type="submit">Salvar</button>
        </form>
    </body>
</h1>