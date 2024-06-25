<h1>
    <body>
        <form method="POST" action="inserirnovacor">
            {{ csrf_field() }}
            Nova cor: <input type="text" name="novacor">
            <button type="submit">Salvar</button>
        </form>
    </body>
</h1>