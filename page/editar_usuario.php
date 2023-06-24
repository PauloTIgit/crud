<h1>Editar Usuário</h1>

<?php
$sql =  "SELECT * FROM usuarios WHERE usuario_id=" . $_REQUEST["id"];

$res = $conn->query($sql);

$row = $res->fetch_object();


?>

<form action="?page=crud" method="POST">
    <!-- Editar -->
    <input type="hidden" name="acao" value="editar">
    <!-- ID para edição -->
    <input type="hidden" name="id" value="<?php print $row->usuario_id ?>">
    <div class="mb-3">
        <label for="">Usuário:</label>
        <input type="text" name="usuario" value="<?php print $row->usuario ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">E-mail:</label>
        <input type="email" name="email" value="<?php print $row->email ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Permição:</label>
        <input type="text" name="permicao" value="<?php print $row->nivel ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Status:</label>
        <input type="text" name="status" value="<?php print $row->status ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>
    </div>
</form>