<h1>Cadastrar Funcionário</h1>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_funcionario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo_funcionario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_funcionario" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone_funcionario" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status_funcionario" class="form-control">
            <option value="ativo">Ativo</option>
            <option value="demitido">Demitido</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
