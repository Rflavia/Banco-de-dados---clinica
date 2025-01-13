<?php
include('config.php');

if (isset($_GET['id_funcionario'])) {
    $id = $_GET['id_funcionario'];

    $sql = "SELECT * FROM funcionarios WHERE id_funcionario = $id";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_object();
    } else {
        echo "<script>alert('Funcionário não encontrado.');</script>";
        echo "<script>location.href='?page=listar-funcionario';</script>";
        exit;
    }
}
?>

<h1>Editar Funcionário</h1>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?= $row->id_funcionario ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_funcionario" value="<?= $row->nome_funcionario ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo_funcionario" value="<?= $row->cargo_funcionario ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_funcionario" value="<?= $row->email_funcionario ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_funcionario" value="<?= $row->telefone_funcionario ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status_funcionario" class="form-control">
            <option value="ativo" <?= ($row->status_funcionario == 'ativo') ? 'selected' : '' ?>>Ativo</option>
            <option value="demitido" <?= ($row->status_funcionario == 'demitido') ? 'selected' : '' ?>>Demitido</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </div>
</form>
