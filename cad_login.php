<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta | SonoraX</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cad_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <main class="pagina-autenticacao">

        <section class="painel-autenticacao">

            <div class="autenticacao-card cadastro-card">

                <div class="autenticacao-logo">
                    <img src="./img/image 2.webp" alt="Logo SonoraX">
                </div>

                <form
                    id="formCadastro"
                    class="form-cadastro"
                    action="./php/processa_cadastro.php"
                    method="POST">

                    <section
                        class="etapa-cadastro etapa-email ativa"
                        data-etapa="email">

                        <div class="form-grupo">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Digite um email"
                                autocomplete="email"
                                required>

                            <small
                                class="mensagem-erro"
                                id="erroEmail"></small>

                        </div>

                        <button
                            type="button"
                            class="botao-principal botao-avancar"
                            data-proxima-etapa="1">
                            Próximo
                        </button>

                        <div class="divisor-login">
                            <span>Ou</span>
                        </div>

                        <div class="login-social">

                            <button
                                type="button"
                                class="botao-social botao-google">
                                <i class="bi bi-google"></i>

                                <span>
                                    Logar com Google
                                </span>
                            </button>

                            <button
                                type="button"
                                class="botao-social botao-apple">
                                <i class="bi bi-apple"></i>

                                <span>
                                    Logar com Apple
                                </span>
                            </button>

                        </div>

                        <div class="possui-conta">

                            <p>Já tem uma conta?</p>

                            <a href="./login.php">
                                Entrar
                            </a>

                        </div>

                    </section>

                    <section
                        class="etapa-cadastro"
                        data-etapa="1">

                        <header class="cabecalho-etapa">

                            <span class="numero-etapa">
                                Passo 1 de 3
                            </span>

                            <div class="barra-progresso">
                                <span class="progresso progresso-1"></span>
                            </div>

                            <p>
                                Criando uma senha
                            </p>

                        </header>

                        <div class="form-grupo">

                            <label for="senhaCadastro">
                                Senha
                            </label>

                            <div class="campo-senha">

                                <input
                                    type="password"
                                    id="senhaCadastro"
                                    name="senha"
                                    placeholder="Digite sua senha"
                                    autocomplete="new-password"
                                    minlength="8"
                                    required>
                                </input>

                            </div>

                        </div>

                        <div class="requisitos-senha">

                            <p>Sua senha deve conter:</p>

                            <ul>

                                <li data-requisito="maiuscula">
                                    <span class="indicador-requisito"></span>
                                    Uma letra maiúscula
                                </li>

                                <li data-requisito="especial">
                                    <span class="indicador-requisito"></span>
                                    Um caractere especial
                                </li>

                                <li data-requisito="numero">
                                    <span class="indicador-requisito"></span>
                                    Um número
                                </li>

                                <li data-requisito="tamanho">
                                    <span class="indicador-requisito"></span>
                                    Mínimo de 8 caracteres
                                </li>

                            </ul>

                        </div>

                        <div class="acoes-etapa">

                            <button
                                type="button"
                                class="botao-voltar"
                                data-etapa-anterior="email">
                                Voltar
                            </button>

                            <button
                                type="button"
                                class="botao-principal botao-avancar"
                                data-proxima-etapa="2">
                                Próximo
                            </button>

                        </div>

                    </section>

                    <section
                        class="etapa-cadastro"
                        data-etapa="2">

                        <header class="cabecalho-etapa">

                            <span class="numero-etapa">
                                Passo 2 de 3
                            </span>

                            <div class="barra-progresso">
                                <span class="progresso progresso-2"></span>
                            </div>

                            <p>
                                Conte-nos mais sobre você
                            </p>

                        </header>

                        <div class="form-grupo">

                            <label for="nome">
                                Nome
                            </label>

                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                placeholder="Digite seu nome"
                                autocomplete="name"
                                required>

                        </div>

                        <fieldset class="grupo-data">

                            <legend>
                                Data de nascimento
                            </legend>

                            <div class="campos-data">

                                <div class="campo-data">

                                    <label
                                        for="diaNascimento"
                                        class="label-acessivel">
                                        Dia
                                    </label>

                                    <input
                                        type="number"
                                        id="diaNascimento"
                                        name="dia_nascimento"
                                        placeholder="Dia"
                                        min="1"
                                        max="31"
                                        required>

                                </div>

                                <div class="campo-data">

                                    <label
                                        for="mesNascimento"
                                        class="label-acessivel">
                                        Mês
                                    </label>

                                    <input
                                        type="number"
                                        id="mesNascimento"
                                        name="mes_nascimento"
                                        placeholder="Mês"
                                        min="1"
                                        max="12"
                                        required>

                                </div>

                                <div class="campo-data">

                                    <label
                                        for="anoNascimento"
                                        class="label-acessivel">
                                        Ano
                                    </label>

                                    <input
                                        type="number"
                                        id="anoNascimento"
                                        name="ano_nascimento"
                                        placeholder="Ano"
                                        min="1900"
                                        required>

                                </div>

                            </div>

                            <small
                                class="mensagem-erro"
                                id="erroDataNascimento"></small>

                        </fieldset>

                        <div class="form-grupo">

                            <label for="genero">
                                Gênero
                            </label>

                            <select
                                id="genero"
                                name="genero"
                                required>

                                <option value="" selected disabled>
                                    Selecione
                                </option>

                                <option value="masculino">
                                    Masculino
                                </option>

                                <option value="feminino">
                                    Feminino
                                </option>

                                <option value="nao-binario">
                                    Não binário
                                </option>

                                <option value="outro">
                                    Outro
                                </option>

                                <option value="nao-informar">
                                    Prefiro não informar
                                </option>

                            </select>

                        </div>

                        <div class="form-grupo">

                            <label for="telefone">
                                Número de telefone
                            </label>

                            <div class="campo-telefone">

                                <select
                                    id="codigoPais"
                                    name="codigo_pais"
                                    aria-label="Código do país">

                                    <option value="+55" selected>
                                        🇧🇷 +55
                                    </option>

                                </select>

                                <input
                                    type="tel"
                                    id="telefone"
                                    name="telefone"
                                    placeholder="(12) 99999-9999"
                                    autocomplete="tel"
                                    required>

                            </div>

                        </div>

                        <div class="acoes-etapa">

                            <button
                                type="button"
                                class="botao-voltar"
                                data-etapa-anterior="1">
                                Voltar
                            </button>

                            <button
                                type="button"
                                class="botao-principal botao-avancar"
                                data-proxima-etapa="3">
                                Próximo
                            </button>

                        </div>

                    </section>

                    <section
                        class="etapa-cadastro"
                        data-etapa="3">

                        <header class="cabecalho-etapa">

                            <span class="numero-etapa">
                                Passo 3 de 3
                            </span>

                            <div class="barra-progresso">
                                <span class="progresso progresso-3"></span>
                            </div>

                            <p>
                                Termos
                            </p>

                        </header>

                        <div class="lista-termos">

                            <label class="termo-item">

                                <input
                                    type="checkbox"
                                    name="aceita_privacidade"
                                    value="1"
                                    required>

                                <span class="checkbox-personalizado">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span class="texto-termo">
                                    Concordo com a
                                    <a href="">
                                        Política de Privacidade
                                    </a>
                                    do SonoraX.
                                </span>

                            </label>

                            <label class="termo-item">

                                <input
                                    type="checkbox"
                                    name="aceita_comunicacoes"
                                    value="1">

                                <span class="checkbox-personalizado">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span class="texto-termo">
                                    Aceito receber novidades e comunicações
                                    do SonoraX por email.
                                </span>

                            </label>

                            <label class="termo-item">

                                <input
                                    type="checkbox"
                                    name="aceita_termos"
                                    value="1"
                                    required>

                                <span class="checkbox-personalizado">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span class="texto-termo">
                                    Li e concordo com os
                                    <a href="">
                                        Termos de Uso
                                    </a>.
                                </span>

                            </label>

                        </div>

                        <p class="aviso-privacidade">
                            Seus dados serão utilizados conforme nossa
                            Política de Privacidade.
                        </p>

                        <div class="acoes-etapa">

                            <button
                                type="button"
                                class="botao-voltar"
                                data-etapa-anterior="2">
                                Voltar
                            </button>

                            <button
                                type="submit"
                                class="botao-principal botao-cadastrar">
                                Criar conta
                            </button>

                        </div>

                    </section>

                </form>

            </div>

        </section>

    </main>

    <script src="./js/login.js"></script>
</body>

</html>