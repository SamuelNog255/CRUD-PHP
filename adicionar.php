<div class="_topBody">
    <h1>Adicionar Contato</h1>
    <div class="_forms">
        <form class="row g-3 needs-validation" action="?page=concluirAdicionar" method="POST" >
            <div class="col-md-5">
                <label for="validationCustom01" class="form-label">Primeiro Nome *</label>
                <input type="text" class="form-control" name="pNome" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Segundo Nome</label>
                <input type="text" class="form-control" name="sNome">
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Telefone *</label>
                <input type="text" class="form-control" name="telefone" placeholder="(85)91234-5678" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email *</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Confirmar</button>
            </div>
        </form>
    </div>
</div>
