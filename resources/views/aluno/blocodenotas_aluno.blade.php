<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Cod&Hub - Bloco de Notas</title>
    <!-- Ligando a folha de estilo CSS externa -->
    <link rel="stylesheet" href="style.css">
    <!-- Pré-conexão com o Google Fonts para carregar a fonte Noto Sans -->
=======
    <title>Cod&Hub - Horario</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/aluno/blocodenotas_aluno.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <!-- Link para a fonte 'Noto Sans' do Google Fonts -->
>>>>>>> 4d432c796e7247bf3062ca3a12128f93156c3efb
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Importando a fonte Noto Sans do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Cabeçalho da página, contendo a barra de navegação -->
    <nav class="navbar">
        <!-- Contêiner para alinhar o conteúdo do cabeçalho -->
        <div class="container-nav">
            <!-- Logotipo da página -->
            <div class="logo">
                <img src="logo150.png" alt="Logotipo da Cod&Hub">
            </div>
            <!-- Menu de navegação -->
            <ul class="menu">
                <!-- Links para diferentes seções do site -->
                <li><a href="/aluno">Home</a></li>
<<<<<<< HEAD
                <li><a href="/aluno/boletim">Boletim</a></li>
                <li><a href="/aluno/horario">Horário</a></li>
=======
                <li><a href="/aluno/selecionar_turma">Boletim</a></li>
                <li ><a href="/aluno/horario">Horário</a></li>
>>>>>>> 4d432c796e7247bf3062ca3a12128f93156c3efb
                <li><a href="/aluno/cardapio">Cardápio</a></li>
                <li><a href="/aluno/evento">Eventos</a></li>
                <!-- Destacando a seção atual (Bloco de Notas) -->
                <li class="colornav"><a href="/aluno/blocodenotas">Bloco de Notas</a></li>
                <!-- Elemento de contato (imagem ausente) -->
                <div class="contato">
                    <img src="" alt="">
                    <!-- Link para a seção de usuário -->
                    <li><a href="/aluno/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>
    
<<<<<<< HEAD
    <!-- Formulário para criação de notas -->
    <input type="text" id="tituloInput" placeholder="Digite um título">
    <textarea id="meuTextarea" class="textarea" rows="4" cols="50" placeholder="Digite o conteúdo do card"></textarea>
    <!-- Título da seção de notas -->
    <h2 class="title">Bloco de Notas</h2>
    <!-- Botão para criar uma nova nota -->
    <button onclick="criarCard()" class="new-nota">Criar Card</button>
    <!-- Contêiner para exibir as notas criadas -->
    <div id="cardsContainer" class="scrollable"></div>
=======
    <<div class="title">
        <h1>Bloco de Notas</h1>
    </div>
>>>>>>> 4d432c796e7247bf3062ca3a12128f93156c3efb

    <script>
        // Função para criar uma nova nota
function criarCard() {
    // Obtenha elementos do DOM para interação
    const tituloInput = document.getElementById('tituloInput');
    const textarea = document.getElementById('meuTextarea');
    const cardsContainer = document.getElementById('cardsContainer');
    // Obtenha os valores do título e do texto da nota
    const titulo = tituloInput.value;
    const texto = textarea.value;

    // Verifique se o título e o texto não estão em branco
    if (titulo.trim() === '' || texto.trim() === '') {
        // Exiba um alerta se ambos estiverem em branco
        alert('Por favor, insira um título e conteúdo.');
        return;
    }

    // Crie um novo elemento de nota
    const card = document.createElement('div');
    card.className = 'card';

    // Crie um elemento de título para a nota
    const tituloCard = document.createElement('h2');
    tituloCard.textContent = titulo;

    // Crie um ícone de menu para a nota
    if (!tituloCard.querySelector('.menu-icon')) {
        const menuIcon = document.createElement('span');
        menuIcon.className = 'menu-icon';
        menuIcon.style.cursor = 'pointer';

        // Crie um menu suspenso
        const menuDropdown = document.createElement('div');
        menuDropdown.className = 'dropdown-content';

        // Crie itens de menu para editar o título e o texto
        const editarTituloItem = document.createElement('span');
        editarTituloItem.textContent = 'Editar Título';
        editarTituloItem.style.cursor = 'pointer';
        // Adicione um evento para editar o título
        editarTituloItem.addEventListener('click', function() {
            const novoTitulo = prompt('Editar Título:', tituloCard.textContent);
            if (novoTitulo !== null) {
                tituloCard.textContent = novoTitulo;
            }
        });

        const editarTextoItem = document.createElement('span');
        editarTextoItem.textContent = 'Editar Texto';
        editarTextoItem.style.cursor = 'pointer';
        // Adicione um evento para editar o texto
        editarTextoItem.addEventListener('click', function() {
            const novoTexto = prompt('Editar Texto:', textoCard.textContent);
            if (novoTexto !== null) {
                textoCard.textContent = novoTexto;
            }
        });

        // Crie um item de menu para excluir a nota
        const excluirItem = document.createElement('span');
        excluirItem.textContent = 'Excluir';
        excluirItem.style.cursor = 'pointer';
        // Adicione um evento para excluir a nota
        excluirItem.addEventListener('click', function() {
            cardsContainer.removeChild(card);
        });

        // Adicione os itens ao menu suspenso
        menuDropdown.appendChild(editarTituloItem);
        menuDropdown.appendChild(editarTextoItem);
        menuDropdown.appendChild(excluirItem);

        // Adicione o menu ao ícone de menu
        menuIcon.appendChild(menuDropdown);
        tituloCard.appendChild(menuIcon);
    }

    // Crie um elemento de texto para a nota
    const textoCard = document.createElement('p');
    textoCard.textContent = texto;

    // Anexe o título e o texto à nota
    card.appendChild(tituloCard);
    card.appendChild(textoCard);

    // Insira a nova nota no início do contêiner
    cardsContainer.insertBefore(card, cardsContainer.firstChild);

    // Limpe os campos de entrada
    tituloInput.value = '';
    textarea.value = '';
}
    </script>
</body>
</html>
