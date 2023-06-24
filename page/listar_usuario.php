<h1>Listar Usuário</h1>

<?php


$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Usuário</th>";
    print "<th>E-mail</th>";
    print "<th>Permição</th>";
    print "<th>Status</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->usuario_id . "</td>";
        print "<td>" . $row->usuario . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->nivel . "</td>";
        print "<td>" . $row->status . "</td>";
        print "<td>
                <button class='btn btn-success' onclick=\" location.href='?page=editar&id=" . $row->usuario_id . "' \">Editar</button>

                <button class='btn btn-danger' onclick=\" if (confirm('Tem certeza que deseja excluir o usuário?')){ location.href='?page=crud&acao=excluir&id=".$row->usuario_id. "';}else{false}\">Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'> Não encontramos resultados!</p>";
}

?>
