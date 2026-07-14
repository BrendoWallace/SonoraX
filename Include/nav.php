    <!DOCTYPE html>
    <html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matricula Aluno Curso</title>

        
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="./estilo.css">

    </head>
    <body>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="teste" href="./index.html">Home</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menu-area" id="navbarPrincipal">
                <ul class="navbar-nav dropdown-wrapper">


                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                            Cadastros
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./formulario.html">Cadastro de aluno</a></li>
                            <li><a class="dropdown-item" href="./form_curso.html">Cadastro de curso</a></li>
                            <li><a class="dropdown-item" href="./matricula.php">Matricula em curso</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                            Relatórios
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./matriculados.php">Tabela de matriculados</a></li>
                            <li><a class="dropdown-item" href="./nao_matriculados.php">Não matriculados</a></li>
                            <li><a class="dropdown-item" href="./qtd_matriculados.php">Qtd matriculados em cursos</a></li>
                            <li><a class="dropdown-item" href="./matriculado_mes.html">Qnt de matriculados em MES selecionado</a></li>
                        </ul>
                    </li>


 
                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                            Alterações
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./excluir_aluno.php">Excluir Aluno</a></li>
                            <li><a class="dropdown-item" href="./excluir_matricula.php">Excluir Matricula</a></li>
                            <li><a class="dropdown-item" href="./form_edita_aluno.php">Editar Aluno</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

</header>





</div>

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        
    </body>
    </html>




<?php
 
    include 'conexao.php';
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
        $id_aluno = $_POST['id_aluno'];
        $id_curso = $_POST['id_curso'];
        $data_matricula = date('Y-m-d');
 
        $sql = "INSERT INTO Matricula (id_aluno, id_curso, data_matricula) VALUES (?, ?, ?)";
 
        if ($stmt = $conexao->prepare($sql)) {
 
            $stmt->bind_param("iis", $id_aluno, $id_curso, $data_matricula);
 
            if ($stmt->execute()) {
                echo "<div class='form-container'> <h2>Matrícula cadastrada com SUCESSO</h2> </div>"   ;
            } else {
                
                echo "Erro ao cadastrar a matrícula: " . $stmt->error;
            }
 
            $stmt->close();
        } else {
            echo "Erro ao preparar a consulta: " . $conexao->error;
        }
    }
 
    $conexao->close();
 
    ?>

