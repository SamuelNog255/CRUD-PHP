<div class="_topBody">
    <h1>Editar Contato</h1>
    <div class="_forms">
        <?php     
            print '
                <form class="row g-3 needs-validation" action="?page=concluirEditar&id='.$_SESSION['contatoEditar']['id'].'" method="POST">
                    
                    <div class="col-md-5">
                        <label for="validationCustom01" class="form-label">Primeiro Nome *</label>
                        <input type="text" class="form-control" name="pNome" required value="' . $_SESSION['contatoEditarNome'] . '"/>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Segundo Nome</label>
                        <input type="text" class="form-control" name="sNome" value="' . $_SESSION['contatoEditarNome2'] . '">
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Telefone *</label>
                        <input type="text" class="form-control" name="telefone" required value="' . $_SESSION['contatoEditar']['telefone'] . '">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email" required placeholder="name@example.com" value="' . $_SESSION['contatoEditar']['email'] . '">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Confirmar</button>
                    </div>
                </form>
            ';
        ?>
    </div>
</div>
