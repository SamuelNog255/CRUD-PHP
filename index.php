<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="./cod.js"></script>

    <title>Home</title>
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Contatos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Adicionar Contato</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="_topBody">
        <h1 class="">Lista de Contatos</h1>
        <table class="table _table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Samuel</td>
                <td>Samuel@gmail.com</td>
                <td>(85)91234578</td>
                <td >
                    <div class="btn-group" role="group">
                        <a class="btn btn-danger">Deletar</a>
                        <a class="btn btn-success">Editar</a>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
        
    ?>
</body> 
</html>