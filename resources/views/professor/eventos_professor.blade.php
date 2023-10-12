<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Eventos</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/eventos.css">
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
                <li><a href="/professor/selecionar_turma_chamada">Realizar Chamada</a></li>
                <li class="colornav"><a href="/professor/eventos">Eventos</a></li>
                <div class="contato">
                    <img src="" alt="">
                    <li><a href="/professor/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="title">
        <h1>Eventos</h1>
        <span>Ano: 2024</span>
    </div>

    <div class="container">
        @php
            $title = ['Ginastica', 'Interclasse', 'São João']
        @endphp

        @for ($i = 0; $i < 3; $i++ ) 
        <div class="box">
            <h1>{{ $title[$i] }}</h1>
            
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>

            <img src="" alt="" width="300px" height="180">
        </div>
        @endfor
    </div>

</body>

</html>