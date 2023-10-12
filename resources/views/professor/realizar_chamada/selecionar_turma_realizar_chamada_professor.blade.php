<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Horario</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/selecionar_turma.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <!-- Link para a fonte 'Noto Sans' do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="container-nav">
            <div class="logo">
                <img src="/img/logo150.png" alt="">
            </div>
            <ul class="menu">
                <li><a href="/professor">Home</a></li>
                <li><a href="/professor/horario">Horário</a></li>
                <li><a href="/professor/selecionar_turma_boletim">Add Boletim</a></li>
                <li><a href="/professor/analisar_turma">Analisar Turma</a></li>
                <li class="colornav"><a href="/professor//professor/selecionar_turma_chamada">Realizar Chamada</a></li>
                <li><a href="/professor/eventos">Eventos</a></li>
                <div class="contato">
                    <img src="" alt="">
                    <li><a href="/professor/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="title">
        <h1>Selecionar Turma</h1>
    </div>

    <div class="container">
        <hr>
        <ul>
            @for($i = 1; $i < 10; $i++)
            <li><a href="/professor/realizar_chamada">{{ $i }}º ANO - TDS{{ $i }}IN-B - ESCOLA TECNICA ESTADUAL MINISTRO FERNANDO LYRA</a></li>
            @endfor
            <li class="a_disable">SERIE / NOME DA ESCOLA</li>
        </ul>
    </div>
</body>

</html>