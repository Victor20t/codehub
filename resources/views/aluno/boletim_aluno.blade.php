<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Boletim</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/aluno/boletim_2_aluno.css">
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
                <li><a href="/aluno">Home</a></li>
                <li class="colornav"><a href="/aluno/selecionar_turma">Boletim</a></li>
                <li><a href="/aluno/horario">Horário</a></li>
                <li><a href="/aluno/cardapio">Cardápio</a></li>
                <li><a href="/aluno/evento">Eventos</a></li>
                <li><a href="/aluno/blocodenotas">Bloco de Notas</a></li>
                <div class="contato">
                    <img src="" alt="">
                    <li><a href="/aluno/usuario">Usuário</a></li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="title">
        <h1>Boletim</h1>
    </div>

    <div class="container">
        <div class="head_table">
            <div class="esquerda">
                <span>NOME:</span>
                <span>DATA DE NASCIMENTO:</span>
                <span>MATRICULA:</span>
                <span>ETAPA DE ENSINO MÉDIO:</span>
            </div>
            <div class="direita">
            <hr>
                <span>MODALIDADE:</span>
                <span>CURSO:</span>
                <span>TURMA:</span>
                <span>ANO/FASE/MÓDULO:</span>
                <span>TURNO:</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th rowspan="3">Componentes Curricular</th>
                    <th colspan="3">1º Unidade Bimestral</th>
                    <th colspan="3">2º Unidade Bimestral</th>
                    <th colspan="3">3º Unidade Bimestral</th>
                    <th colspan="3">4º Unidade Bimestral</th>
                    <th rowspan="3">Média Anual</th>
                    <th rowspan="3">Nota Rec. Final</th>
                    <th rowspan="3">Nota Final</th>
                </tr>
                <tr>
                    @for($th = 0; $th < 4; $th++) <th rowspan="2">Média</th>
                        <th colspan="2">Faltas</th>
                        @endfor
                </tr>
                <tr>
                    @for($th = 0; $th < 4; $th++) 
                        <th class="fj_fnj">FJ</th>
                        <th class="fj_fnj">FNJ</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                <tr class="titulo_table">
                    <td>Base Nacional Comum Curricular</td>
                    @for($td = 0; $td < 15; $td++) <td>
                        </td>
                        @endfor
                </tr>

                @for($tr = 0; $tr < 18; $tr++) 
                <tr>
                    @for($i = 0; $i < 16; $i++) 
                    <td>-</td>
                    @endfor
                </tr>
                @endfor

                <tr>
                    @for($td = 0; $td < 1; $td++)
                        @if($td == 0)
                            @php
                                $text = 'Percentual de Faltas';
                            @endphp
                        @else
                            @php
                                $text = '';
                            @endphp
                        @endif
                        <td class="titulo_table">{{ $text }}</td>
                    @endfor

                    @for($td = 0; $td < 4; $td++)
                    <td></td>
                    <td></td>
                    <td>0%</td>
                    @endfor

                    @for($td = 0; $td < 3; $td++)
                    <td></td>
                    @endfor
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>