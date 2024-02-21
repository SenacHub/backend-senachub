<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>SenacHub</title>
    <style>
        .telaPubli {
            position: relative;
        }

        .telaPubli_main {
            position: absolute;
            top: 30%;
            left: 55%;
            transform: translate(-50%, -50%);
            width: 1153px;
            height: 394px;
        }

        .form-label {
            width: 140px;
        }

        .form-control {
            width: calc(90% - 10px);
            margin-right: 125px;
        }

        .upload-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .upload-container label {
            margin-right: 10px;
        }

        .btn-container {
            display: flex;
            justify-content: flex-end;
            width: 89%;
            margin-top: 10px;
        }

        .btn-container button {
            margin-left: 10px;
            margin-bottom: 100px;
        }

        /**/

        .publicacao {
            width: calc(90% - 10px);
            margin-right: 125px;
            border: 1px solid #ccc;
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 16px;
        }

        .nome-usuario {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .mensagem {
            margin-bottom: 10px;
        }

        .botoes-like-dislike {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .botoes-like-dislike .btn-like {
            margin-right: 20px;
        }


        .btn-responder {
            background-color: #284065;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .editar-perfil {
            background-color: #284065;
        }

        .editar-perfil:hover {
            background-color: #1e3045;
        }

        .btn-responder:hover {
            background-color: #1e3045;
        }

        .publicacao {
            width: calc(90% - 10px);
            margin-right: 125px;
            border: 1px solid #ccc;
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 16px;
            border-radius: 10px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500&display=swap');


        * {
            padding: 0;
            margin: 0;

        }




        /*TELA DE PUBLICAÇÃO*/

        .cabecalho {
            display: flex;
            height: 68px;
            padding: 8px 12px;
            justify-content: space-between;
            align-items: center;
            background: #003950;
        }

        .tamanho_logo {
            width: 105px;
            height: 52px;
        }

        body {
            background-color: #E6E6E6;
        }

        .lista-dropdown {
            background-color: white;
            position: absolute;
            right: 0;
            width: 200px;
            border: 1px solid #ccc;
            border-top: none;

        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="orange" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z"/></svg>');
        }

        .body_padrao_tela_publi {
            display: flex;
            width: 300px;
            height: 865px;
            flex-direction: column;
            flex-shrink: 0;
            border-radius: 4px;
            border: 1px solid var(--Components-Card-Border, rgba(0, 0, 0, 0.17));
            background: var(--Gray-White, #FFF);
        }




        .perfil_img {
            width: 230px;
            height: 230px;
            object-fit: cover;
        }

        .opcoes {
            display: flex;
            padding: 8px 8px;
            align-items: center;
            gap: 4px;
            align-self: stretch;
            background: var(--HitBox, rgba(255, 255, 255, 0.00));
            display: flex;
            align-items: center;
            align-self: stretch;
        }

        .opcoes ul {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 8px 24px;
            color: #262626;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;

        }

        .font-custom {
            color: var(--Body-Text-Body-Color, #212529);
            text-align: center;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 800;

        }

        .h2 {
            color: var(--Body-Text-Body-Color, #212529);
            font-family: Manrope;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: 120%;
        }

        .p {
            color: var(--Gray-600, #6C757D);
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 120%;
        }

        .p2 {
            color: var(--Body-Text-Body-Color, #212529);
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
        }

        .senachub_inicio {
            width: 412px;
            height: 349px;
            flex-shrink: 0;
            border-radius: 25px;
            border: 1px solid #FFF;
            display: flex;
            justify-content: space-between;
        }

        .senachub_body_incio {
            background: linear-gradient(180deg, #003950 0%, rgba(0, 83, 156, 0.65) 54.5%, rgba(7, 85, 157, 0.00) 100%);
        }

        .tamanho_logo_senac {
            width: 616px;
            height: 306px;
            flex-shrink: 0;
        }

        .senachub_inicio {
            border: 1px solid #ccc;
            padding: 20px;
            display: flex;
            align-items: center;
            display: flex;
            flex-direction: column;
        }


        .tamanho_logo_senac {
            width: 616px;
            height: 306px;
            flex-shrink: 0;
            margin-left: 100px;
        }

        .senachub_inicio {
            border: 1px solid #ccc;
            padding: 20px;
            margin-right: 100px;
        }

        .senachub_entrar_inicio {
            color: #FFF;
            font-family: Manrope;
            font-size: 32px;
            font-style: normal;
            font-weight: 500;
            font-family: 'Manrope', sans-serif;
        }


        .senachub_tamanho_bem_vindo {
            color: #E7E7E7;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            /* 24px */
            font-family: 'Manrope', sans-serif;
        }

        .TESTE {
            position: absolute;
            top: 50%;
            left: 55%;
            width: 1153px;
            height: 394px;
            margin-top: 55px;
            /* Metade da altura do elemento */
            margin-left: -576.5px;
            /* Metade da largura do elemento */
        }
    </style>
</head>

<body class="telaPubli">

    <!-- CABEÇALHO -->
    <header class="cabecalho">
        <img class="tamanho_logo" src="/Images/LogoSenac.png" alt="Logo SenacHub">

        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- Conteúdo do menu dropdown -->
    <div class="collapse lista-dropdown" id="navbarToggleExternalContent">
        <div class="p-4">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="telaInicio.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telaLogin.html">Amigos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telaLogin.html">Configurações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telaLogin.html">Modo Noturno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telaLogin.html">Deslogar</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Fim do conteúdo do menu dropdown -->

    <!-- MEU PERFIL -->
    <div class="body_padrao_tela_publi">
        <div
            class="px-1 py-1 bg-black bg-opacity-10 border border--bottom1 border-black border-opacity-10 justify-content-end">
            <div class="bg-white bg-opacity-10 col-11 justify-content-center d-flex">
                <p class="m-0 px-3 py-7 font-custom">Meu Perfil</p>
            </div>
        </div>

        <!-- FOTO DE PERFIL -->
        <div class="foto_perfil">
            <div class="row justify-content-center align-items-center">
                <div class="col-9">
                    <div class="rounded-1 d-flex justify-content-center">
                        <img  class="perfil_img" src="{{ Auth::user()->image_link_user }}" alt="Imagem de Perfil">

                        <div class="square"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- INFORMAÇÕES PERFIL-->
        <div class="info_perfil">
            <h2 class="h2">
                <div>{{ Auth::user()->name }}</div>
            </h2>
            <p class="p">Curso</p>
            <p class="p2">
            <div>{{ Auth::user()->unidade }}</p>
                <button type="button" onclick="window.location='{{ route('profile.edit') }}'" class="btn btn-primary editar-perfil">Editar Perfil</button>
            </div>

            <!-- NÃO SEI OQ É ISSO AINDA -->
            <div class="opcoes">
                <ul>
                    <li>Senac EAD</li>
                    <li>Grupos</li>
                    <li>Eventos</li>
                    <li>Cursos</li>
                    <li>Bolsa de Estudo</li>
                    <li>Vagas</li>
                    <li>Atividades</li>
                    <li>Aulas</li>
                </ul>
            </div>
        </div>

        <!-- Conteúdo do main -->
        <main class="telaPubli_main">
            <h5>Criar Publicação</h5>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem:</label>
                    <textarea class="form-control" id="message" rows="7" name="content" required></textarea>
                </div>
                <div class="upload-container mb-3">
                    <label for="photo" class="form-labell">Upload de Fotos:</label>
                    <input class="form-control" type="file" id="photo" name="image" accept="image/*">
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-primary editar-perfil">Publicar</button>
                </div>
            </form>
        </main>
        <!--AAA-->

        <div class="TESTE">
            @foreach ($posts->reverse() as $post)
                <!-- Conteúdo da publicação -->
                <div class="publicacao">

                    <!-- Nome do usuário que fez a publicação -->
                    <div class="nome-usuario">{{ $post->user->usuario }}</div>

                    <!-- Mensagem da publicação -->
                    <div class="mensagem">{{ $post->content }}</div>
                    @if ($post->image_link)
                        <img src="{{ $post->image_link }}" alt="Imagem do post">
                    @endif
                    <div class="card-footer">
                        Postado em: {{ $post->created_at->format('d/m/Y H:i:s') }}
                    </div>

                    <!-- Botões de like e dislike -->
                    <div class="botoes-like-dislike">
                        <button type="button" class="btn-like" onclick="aumentarLikes()"><i
                                class="bi bi-hand-thumbs-up" style="font-size: 12px;"></i> <span
                                class="contador-likes" id="likes">0</span></button>
                        <button type="button" class="btn-dislike" onclick="aumentarDislikes()"><i
                                class="bi bi-hand-thumbs-down" style="font-size: 12px;"></i> <span
                                class="contador-likes" id="dislikes">0</span></button>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#replyModal2{{ $post->id }}">
                            Responder
                        </button>
                    </div>
                    <div class="ver-mais-container">
                        <button type="text" onclick="toggleRespostas(this)">
                            Ver Mais
                        </button>
                        <div class="respostas" style="display: none;">
                            <!-- Aqui serão exibidas as respostas -->
                            @if ($post->replies()->exists())
                                @foreach ($post->replies as $reply)
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <strong>Respondido por:</strong> {{ $reply->user->usuario }}
                                            <br>
                                            <strong>Resposta:</strong> {{ $reply->content }}
                                            <br>
                                            <strong>Respondido em:</strong>
                                            {{ $reply->created_at->format('d/m/Y H:i:s') }}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Botão de resposta -->



                <!-- Modal de Resposta -->
                <div class="modal fade" id="replyModal2{{ $post->id }}" tabindex="-1"
                    aria-labelledby="replyModalLabel{{ $post->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="replyModalLabel{{ $post->id }}">Responder Postagem
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('posts.reply.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="replyContent{{ $post->id }}" class="form-label">Sua
                                            Resposta</label>
                                        <textarea class="form-control" id="replyContent{{ $post->id }}" name="content" rows="3"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Responder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    <!--AAA-->



    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        let likes = 0;
        let dislikes = 0;

        function aumentarLikes() {
            likes++;
            document.getElementById('likes').innerText = likes;
        }

        function aumentarDislikes() {
            dislikes++;
            document.getElementById('dislikes').innerText = dislikes;
        }


        function toggleRespostas(button) {
            var respostasContainer = button.nextElementSibling;
            if (respostasContainer.style.display === "none") {
                respostasContainer.style.display = "block";
                button.textContent = "Ver Menos";
            } else {
                respostasContainer.style.display = "none";
                button.textContent = "Ver Mais";
            }
        }
    </script>
</body>

</html>
