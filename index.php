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
                <a href="#" class="navbar-brand">POO em php7 - Code Education</a>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="container">
            <div class="row text-center">
                <h1 >Cadastro de Cliente</h1><br/><br/>
                <h4>Listagem de Clientes:</h4>

                </div>
            <div class="row">
                <table class="table table-striped">
                    <tr>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>

                <?php
                    require_once "Cliente.php";
                    require_once "cadastro.php";
                    foreach($clientes as $Cliente) {
                        echo "<tr><td>" . $Cliente->getNome() . "</td><td><a href= 'detalhes.php?id=2'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'> Visualizar cadastro completo</span></a></td></tr>";
                    }
                ?>

                </table>
                </div>
            <div class="row text-center">
                <button type="button" class="btn btn-primary" onclick="$cliente->rsort();">
                    <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><b>rsort</b>
                </button>
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> asort
                </button>
            </div>
        </div>
    </section>

</main>
</body>
</html>