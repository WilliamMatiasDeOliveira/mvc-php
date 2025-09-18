<?php
session_start();
$title = "Create Account";
include "Layouts/header.php";

if (!isset($_SESSION['empty_nome']) && !isset($_SESSION['empty_email']) && !isset($_SESSION['empty_senha'])) {
    unset($_SESSION['old']);
}
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 mt-5">
            <h1 class="text-center">CREATE ACCOUNT</h1>
            <form action="/copia/App/create_account_submit" method="post">

                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $_SESSION['old']['nome'] ?? '' ?>">
                <?php if (isset($_SESSION['empty_nome'])): ?>
                    <div class="text-danger">
                        <?= $_SESSION['empty_nome'] ?>
                    </div>
                    <?php unset($_SESSION['empty_nome']); ?>
                <?php endif; ?>

                <label for="email" class="mt-3">E-mail</label>
                <input type="email" name="email" class="form-control" value="<?= $_SESSION['old']['email'] ?? '' ?>">
                <?php if (isset($_SESSION['empty_email'])): ?>
                    <div class="text-danger">
                        <?= $_SESSION['empty_email'] ?>
                    </div>
                    <?php unset($_SESSION['empty_email']); ?>
                <?php endif; ?>

                <label for="senha" class="mt-3">Senha</label>
                <input type="password" name="senha" class="form-control" value="<?= $_SESSION['old']['senha'] ?? '' ?>">
                <?php if (isset($_SESSION['empty_senha'])): ?>
                    <div class="text-danger">
                        <?= $_SESSION['empty_senha'] ?>
                    </div>
                    <?php unset($_SESSION['empty_senha']); ?>
                <?php endif; ?>

                <div class="links mt-3">
                    <a href="/copia/App">Já tem conta ?</a>
                </div>

                <input type="submit" value="CREATE ACCOUNT" class="btn btn-warning form-control mt-4">
            </form>
        </div>
    </div>
</div>

<?php
include "Layouts/footer.php";
?>