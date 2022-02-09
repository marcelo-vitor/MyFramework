<?php require_once 'app/Controller/createController.php' ?>

<h1>Cadastro de Aluno</h1>

<?php if (hasFlash('sucesso')) : ?>
    <div class="alert alert-success" role="alert">
        <?= flash('sucesso') ?>
    </div>
<?php endif; ?>

<?php if (hasFlash('error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= flash('error') ?>
    </div>
<?php endif; ?>

<form class="mt-4" action="<?= route('create') ?>" method="POST">
    <div class="row mb-3">
        <div class="col">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control <?= hasFlash('email') ? 'is-invalid' : '' ?>" value="<?= old("email") ?>" id="email" name="email">
            <div class="invalid-feedback">
                <?= flash('email') ?>
            </div>
        </div>
        <div class="col">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control <?= hasFlash('senha') ? 'is-invalid' : '' ?>" value="<?= old("senha") ?>" id="senha" name="senha">
            <div class="invalid-feedback">
                <?= flash('senha') ?>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control <?= hasFlash('telefone') ? 'is-invalid' : '' ?>" value="<?= old("telefone") ?>" id="telefone" name="telefone">
            <div class="invalid-feedback">
                <?= flash('telefone') ?>
            </div>
        </div>
        <div class="col">
            <label for="valor_mensalidade" class="form-label">Valor Mensal:</label>
            <input type="number" class="form-control <?= hasFlash('valor_mensalidade') ? 'is-invalid' : '' ?>" value="<?= old("valor_mensalidade") ?>" id="valor_mensalidade" name="valor_mensalidade">
            <div class="invalid-feedback">
                <?= flash('valor_mensalidade') ?>
            </div>
        </div>
        <div class="col">
            <label for="situacao" class="form-label">Situação:</label>
            <select class="form-control" id="situacao" name="situacao">
                <option value="ATIVO">Ativo</option>
                <option value="INATIVO">Inativo</option>
            </select>
        </div>
        <div class="col">
            <label for="observacao" class="form-label">Observação:</label>
            <input type="text" class="form-control <?= hasFlash('observacao') ? 'is-invalid' : '' ?>" value="<?= old("observacao") ?>" id="observacao" name="observacao">
            <div class="invalid-feedback">
                <?= flash('observacao') ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php unset($_SESSION['old']); ?>