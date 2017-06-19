<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Projeto POO</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- General css -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../poo_php7_ce/index.php" class="navbar-brand">POO em php7 - Code Education</a>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <h1 >Cadastro de Cliente</h1><br/><br/>
                <h4>Cliente detalhado:</h4>

            </div>
            <div class="row">

                <?php
                require_once "Cliente.php";
                require_once "cadastro.php";
                $id = $_GET['id'];

                echo $id;

                ?>
                <form>
                    <div class="form-group">
                        <label>Nome</label>
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                    </div>
                    <div class="form-group">
                        <label>Sexo</label>
                    </div>
                    <h5>Endereço</h5>
                    <div class="form-group">
                        <label>Logradouro</label>
                    </div>
                    <div class="form-group">
                        <label>Bairro</label>
                        <label>Cidade</label>
                        <label>UF</label>
                     </div>
                </form>




            </div>
        </div>
    </section>

</main>
</body>
</html>