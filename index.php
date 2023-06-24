<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="menu">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        <a class="nav-link active" href="?page=novo">Novo Usuário</a>
                        <a class="nav-link active" href="?page=lista">Lista de Usuário</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                    include ("config.php");
                    switch (@$_REQUEST['page']) {
                        case "novo":
                            include("page/novo_usuario.php");
                            break;
                        case "lista":
                            include("page/listar_usuario.php");
                            break;
                        case "crud":
                            include("crud.php");
                            break;
                        case "editar":
                            include("page/editar_usuario.php");
                            break;
                        default:
                            print "<h1>Bem vindos!</h1>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <script src="js/app.js" ></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>