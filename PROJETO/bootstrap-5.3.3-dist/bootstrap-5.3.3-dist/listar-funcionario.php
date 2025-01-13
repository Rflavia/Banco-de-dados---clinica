<h1>Listar Funcionários</h1>
<?php
$sql = "SELECT * FROM funcionarios"; // Consulta todos os funcionários
$res = $conn->query($sql); // Executa a consulta
$qtd = $res->num_rows; // Conta o número de resultados

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Cargo</th>";
    print "<th>E-mail</th>";
    print "<th>Telefone</th>";
    print "<th>Status</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_funcionario . "</td>";
        print "<td>" . $row->nome_funcionario . "</td>";
        print "<td>" . $row->cargo_funcionario . "</td>";
        print "<td>" . $row->email_funcionario . "</td>";
        print "<td>" . $row->telefone_funcionario . "</td>";
        print "<td>" . ucfirst($row->status_funcionario) . "</td>";
        print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-funcionario&id_funcionario=" . $row->id_funcionario . "';\">Editar</button>
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-funcionario&acao=excluir&id_funcionario=" . $row->id_funcionario . "';}\">Excluir</button>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p>Não há funcionários cadastrados.</p>";
}
?>
