<div class="_topBody">
    <h1 >Lista de Contatos</h1>
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
            <?php
                $dados=$_SESSION['contatos'];   //Listar contatos
                foreach($dados as $dado){   //Percorrendo linhas de informações do banco de dados
                    echo '
                        <tr>
                            <th scope="row">' . $dado["id"] . '</th>
                            <td>' . $dado["nome"] . '</td>
                            <td>' . $dado["email"] . '</td>
                            <td>' . $dado["telefone"] . '</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-danger" onclick="confirmarDelete('.$dado["id"].')">Deletar</a>
                                    <a class="btn btn-success" href="?page=editar&id='.$dado["id"].'">Editar</a>
                                </div>
                            </td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
</div>