<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SonoraX</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <main class="pagina-autenticacao">

        <section class="painel-autenticacao">

            <div class="autenticacao-card">

                <div class="autenticacao-logo">
                    <img src="./img/image 2.webp" alt="Logo SonoraX">
                </div>

                <form
                    class="form-login"
                    action="./php/processa_login.php"
                    method="POST">

                    <div class="form-grupo">

                        <label for="usuario">
                            Usuário
                        </label>

                        <input
                            type="text"
                            id="usuario"
                            name="usuario"
                            placeholder="Insira seu nome ou email"
                            autocomplete="username"
                            required>

                    </div>

                    <div class="form-grupo">

                        <label for="senha">
                            Senha
                        </label>

                        <div class="campo-senha">

                            <input
                                type="password"
                                id="senha"
                                name="senha"
                                placeholder="Digite sua senha"
                                autocomplete="current-password"
                                required>
                            </input>


                        </div>

                        <a
                            href=""
                            class="link-esqueci-senha">
                            Esqueceu a senha?
                        </a>

                    </div>

                    <button
                        type="submit"
                        class="botao-principal">
                        Entrar
                    </button>

                </form>

                <a
                    href="./cad_login.php"
                    class="link-criar-conta">
                    Criar conta
                </a>

            </div>

        </section>

    </main>

    <script src="./js/login.js"></script>

</body>

</html>