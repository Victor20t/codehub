<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Cordenador - Adicionar Evento</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/coordenador/usuarios_coordenador.css">
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
                <li><a href="/coordenador">Home</a></li>
                <li><a href="/coordenador/add_horario">Add Horário</a></li>
                <li><a href="/coordenador/add_evento">Add Eventos</a></li>
                <li><a href="/coordenador/analisar_turma">Analisar Turma</a></li>
                <li><a href="/coordenador/add_refeicoes">Add Refeições</a></li>
                <li><a href="/coordenador/add_boletim">Add Boletim</a></li>
                <div class="contato">
                    <img src="" alt="">
                    <li class="colornav"><a href="/cordenador/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>
    <main>
        <section id="aluno">
            <div id="yellow_card">
                <h2>Alunos</h2>
            </div>
            <div id="filter">
                <label for="filtro">Filtrar por:</label>
                <select id="filtro">
                    <option value="todos">Todos</option>
                    <option value="opcao1">Ordem alfabetica</option>
                    <option value="opcao2">Idade</option>
                    <option value="opcao3">Nota</option>
                    <option value="opcao4">Turma</option>
                </select>
                <button id="aplicarFiltro">Aplicar Filtro</button>
            </div>
            @for ($th = 0; $th < 4; $th++)
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" fill="#D9D9D9" />
                </svg>
                <div>
                    <h3>Aluno</h3>
                    <h4>Turma: *****</h4>
                    <h4>Matrícula: *****</h4>
                </div>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="33" viewBox="0 0 31 33" fill="none">
                        <path
                            d="M25.1773 11.3112C22.0588 11.3112 19.5217 8.77413 19.5217 5.65561C19.5217 2.5371 22.0588 0 25.1773 0C28.2959 0 30.833 2.5371 30.833 5.65561C30.833 8.77413 28.2959 11.3112 25.1773 11.3112ZM25.1773 2.62519C23.5212 2.62519 22.1645 3.98183 22.1645 5.638C22.1645 7.29416 23.5212 8.6508 25.1773 8.6508C26.8335 8.6508 28.1901 7.29416 28.1901 5.638C28.1901 3.98183 26.8335 2.62519 25.1773 2.62519Z"
                            fill="#D9D9D9" />
                        <path
                            d="M5.65563 11.3112C2.53712 11.3112 0 8.77413 0 5.65561C0 2.5371 2.53712 0 5.65563 0C8.77415 0 11.3112 2.5371 11.3112 5.65561C11.3112 8.77413 8.77415 11.3112 5.65563 11.3112ZM5.65563 2.62519C3.99947 2.62519 2.64281 3.98183 2.64281 5.638C2.64281 7.29416 3.99947 8.6508 5.65563 8.6508C7.31179 8.6508 8.66842 7.29416 8.66842 5.638C8.66842 3.98183 7.32941 2.62519 5.65563 2.62519Z"
                            fill="#D9D9D9" />
                        <path
                            d="M25.1773 32.9999C22.0588 32.9999 19.5217 30.4629 19.5217 27.3443C19.5217 24.2258 22.0588 21.6887 25.1773 21.6887C28.2959 21.6887 30.833 24.2258 30.833 27.3443C30.833 30.4629 28.2959 32.9999 25.1773 32.9999ZM25.1773 24.3139C23.5212 24.3139 22.1645 25.6706 22.1645 27.3267C22.1645 28.9829 23.5212 30.3395 25.1773 30.3395C26.8335 30.3395 28.1901 28.9829 28.1901 27.3267C28.1901 25.6706 26.8335 24.3139 25.1773 24.3139Z"
                            fill="#D9D9D9" />
                        <path
                            d="M5.65563 32.9999C2.53712 32.9999 0 30.4629 0 27.3443C0 24.2258 2.53712 21.6887 5.65563 21.6887C8.77415 21.6887 11.3112 24.2258 11.3112 27.3443C11.3112 30.4629 8.77415 32.9999 5.65563 32.9999ZM5.65563 24.3139C3.99947 24.3139 2.64281 25.6706 2.64281 27.3267C2.64281 28.9829 3.99947 30.3395 5.65563 30.3395C7.31179 30.3395 8.66842 28.9829 8.66842 27.3267C8.66842 25.6706 7.32941 24.3139 5.65563 24.3139Z"
                            fill="#D9D9D9" />
                    </svg>
                </button>
            </div>
        @endfor
        </section>
        <section id="professor">
            <div id="yellow_card">
                    <h2>Professor</h2>
                </div>
                <div id="filter">
                    <label for="filtro">Filtrar por:</label>
                    <select id="filtro">
                        <option value="todos">Todos</option>
                        <option value="opcao1">Ordem alfabetica</option>
                        <option value="opcao2">Idade</option>
                        <option value="opcao3">Nota</option>
                        <option value="opcao4">Turma</option>
                    </select>
                    <button id="aplicarFiltro">Aplicar Filtro</button>
                </div>
                @for ($th = 0; $th < 4; $th++)
                <div class="card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <circle cx="25" cy="25" r="25" fill="#D9D9D9" />
                    </svg>
                    <div>
                        <h3>Professor</h3>
                        <h4>Disciplina: *****</h4>
                        <h4>Matrícula: *****</h4>
                    </div>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="33" viewBox="0 0 31 33" fill="none">
                            <path
                                d="M25.1773 11.3112C22.0588 11.3112 19.5217 8.77413 19.5217 5.65561C19.5217 2.5371 22.0588 0 25.1773 0C28.2959 0 30.833 2.5371 30.833 5.65561C30.833 8.77413 28.2959 11.3112 25.1773 11.3112ZM25.1773 2.62519C23.5212 2.62519 22.1645 3.98183 22.1645 5.638C22.1645 7.29416 23.5212 8.6508 25.1773 8.6508C26.8335 8.6508 28.1901 7.29416 28.1901 5.638C28.1901 3.98183 26.8335 2.62519 25.1773 2.62519Z"
                                fill="#D9D9D9" />
                            <path
                                d="M5.65563 11.3112C2.53712 11.3112 0 8.77413 0 5.65561C0 2.5371 2.53712 0 5.65563 0C8.77415 0 11.3112 2.5371 11.3112 5.65561C11.3112 8.77413 8.77415 11.3112 5.65563 11.3112ZM5.65563 2.62519C3.99947 2.62519 2.64281 3.98183 2.64281 5.638C2.64281 7.29416 3.99947 8.6508 5.65563 8.6508C7.31179 8.6508 8.66842 7.29416 8.66842 5.638C8.66842 3.98183 7.32941 2.62519 5.65563 2.62519Z"
                                fill="#D9D9D9" />
                            <path
                                d="M25.1773 32.9999C22.0588 32.9999 19.5217 30.4629 19.5217 27.3443C19.5217 24.2258 22.0588 21.6887 25.1773 21.6887C28.2959 21.6887 30.833 24.2258 30.833 27.3443C30.833 30.4629 28.2959 32.9999 25.1773 32.9999ZM25.1773 24.3139C23.5212 24.3139 22.1645 25.6706 22.1645 27.3267C22.1645 28.9829 23.5212 30.3395 25.1773 30.3395C26.8335 30.3395 28.1901 28.9829 28.1901 27.3267C28.1901 25.6706 26.8335 24.3139 25.1773 24.3139Z"
                                fill="#D9D9D9" />
                            <path
                                d="M5.65563 32.9999C2.53712 32.9999 0 30.4629 0 27.3443C0 24.2258 2.53712 21.6887 5.65563 21.6887C8.77415 21.6887 11.3112 24.2258 11.3112 27.3443C11.3112 30.4629 8.77415 32.9999 5.65563 32.9999ZM5.65563 24.3139C3.99947 24.3139 2.64281 25.6706 2.64281 27.3267C2.64281 28.9829 3.99947 30.3395 5.65563 30.3395C7.31179 30.3395 8.66842 28.9829 8.66842 27.3267C8.66842 25.6706 7.32941 24.3139 5.65563 24.3139Z"
                                fill="#D9D9D9" />
                        </svg>
                    </button>
                </div>
            @endfor
        </section>
    </main>
</body>

</html>