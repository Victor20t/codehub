<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Cordenador - Adicionar Evento</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/cordenador/adicionar_evento_cordenador.css">
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
                <li><a href="/cordenador">Home</a></li>
                <li><a href="/coordenador/add_horario">Add Horário</a></li>
                <li class="colornav"><a href="/cordenador/add_evento">Add Eventos</a></li>
                <li><a href="/coordenador/analisar_turma">Analisar Turma</a></li>
                <li><a href="/coordenador/add_refeicoes">Add Refeições</a></li>
                <li><a href="/coordenador/add_boletim">Add Boletim</a></li>
                <li><a href="/coordenador/usuarios">Usuários</a></li>
                <div class="contato">
                    <img src="" alt="">
                    <li><a href="/aluno/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="title">
        <h1>Adicionar Evento</h1>
    </div>

    <div id="container">
        <form action="">
            <div id="esquerda">
                <label for="text">Título:</label>
                <input type="text" id="" name=""/>
                <br>
                <label for="datetime-local">Horário:</label>
                <input type="datetime-local" id="" name="">
                <br>
                <label for="textarea">Descrição:</label>
                <textarea id="" name="" rows="5" cols="33"></textarea>
            </div>
            <div id="direita">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
                        <path d="M80.1049 61.4975L67.957 33.6751C63.843 24.236 56.2748 23.8554 51.1906 32.8378L43.8553 45.8164C40.1294 52.401 33.1822 52.9719 28.3696 47.0724L27.5158 46.0067C22.5092 39.8408 15.4455 40.6021 11.8361 47.6433L5.16058 60.7744C0.464434 69.909 7.25638 80.6802 17.6578 80.6802H67.1808C77.2717 80.6802 84.0636 70.5941 80.1049 61.4975Z" stroke="#101E3C" stroke-width="7.21402" stroke-linecap="round" stroke-linejoin="round"/>
                        <path opacity="0.4" d="M23.013 27.3944C29.4434 27.3944 34.6563 22.2823 34.6563 15.9761C34.6563 9.67001 29.4434 4.55786 23.013 4.55786C16.5825 4.55786 11.3696 9.67001 11.3696 15.9761C11.3696 22.2823 16.5825 27.3944 23.013 27.3944Z" stroke="#101E3C" stroke-width="7.21402" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <br>
                    <label for="arquivo">Adicionar imagem</label>
                    <input type="file" name="arquivo" id="arquivo">
                </div>
                <button>
                    <h3>SALVAR</h3>
                </button>
            </div>
        </form>
    </div>
    <br>
    <br>
</body>

</html>