<h1>Cadastro de Usuário</h1>

<form action="?page=crud" method="POST">
    <!-- Cadastrar -->
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Usuário:</label>
        <input type="text" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha:</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>