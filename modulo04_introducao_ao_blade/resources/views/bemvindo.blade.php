<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Bem-Vindo(a) {{ $nome }}</h1>

    {{-- Exibir código html no blade --}}

    {{-- Não funciona --}}
    <p>{{ $html }}</p>

    {{-- Funciona --}}
    <p>{!! $html !!}</p>

    <hr />

    {{-- If --}}
    <h1>IF</h1>
    @if ($nome == 'William')
        <p>É o Will</p>
    @elseif($nome == 'Alessandro')
        <p>É o Alessandro</p>
    @else
        <p>Não é o Will e nem o Alessandro</p>
    @endif

    <hr />

    {{-- Ternário --}}
    <h1>TERNÁRIO</h1>
    <p>{{ $nome == 'William' ? 'Sim' : 'Não' }}</p>
    <p>{{ $nome == 'Bonieky' ? 'Sim' : 'Não' }}</p>

    <hr />

    {{-- Laço for --}}
    <h1>FOR</h1>
    @for ($i = 1; $i <= 10; $i++)
        <p>I = {{ $i }}</p>
    @endfor

    {{-- Laço foreach --}}
    <h1>FOREACH</h1>
    <ul>
        @foreach ($ingredientes as $ingrediente)
            <li>
                {{ $ingrediente }} -
                @component('components.botao')
                    @slot('href')
                        https://www.google.com.br
                    @endslot
                    @slot('cor')
                        blue
                    @endslot
                    Editar
                @endcomponent

                @component('components.botao')
                    @slot('href')
                        https://www.youtube.com.br
                    @endslot
                    @slot('cor')
                        red
                    @endslot
                    Deletar
                @endcomponent
            </li>
        @endforeach
    </ul>



</body>

</html>
