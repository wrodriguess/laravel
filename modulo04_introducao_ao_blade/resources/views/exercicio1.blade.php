<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 1</title>
</head>

<body>

    <div style="display: flex;">
        @foreach ($pessoas as $pessoa)
            @component('components.cardPessoa')
                @slot('imagem')
                    {{ $pessoa['image'] }}
                @endslot
                @slot('nome')
                    {{ $pessoa['nome'] }}
                @endslot
                @slot('idade')
                    {{ $pessoa['idade'] }}
                @endslot
                @slot('nascimento')
                    {{ $pessoa['birth'] }}
                @endslot
            @endcomponent
        @endforeach
    </div>
</body>

</html>
