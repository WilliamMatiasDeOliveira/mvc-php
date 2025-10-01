<?php
$title = "Create Account";
require_once "Layouts/header.php";
require_once "Layouts/nav.php";

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <h1 class="text-center">Create Account</h1>
        <div class="col-5 mt-3">

            <form action="/meu_pet_sumiu/create_account_submit" method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
                <?php if (!empty($error['nome'])): ?>
                    <div class="text-danger">
                        <p><?= $error['nome'] ?></p>
                    </div>
                <?php endif; ?>

                <label for="email" class="mt-3">E-mail</label>
                <input type="email" name="email" class="form-control">
                 <?php if (!empty($error['email'])): ?>
                    <div class="text-danger">
                        <p><?= $error['email'] ?></p>
                    </div>
                <?php endif; ?>

                <label for="senha" class="mt-3">Senha</label>
                <input type="password" name="senha" class="form-control">
                 <?php if (!empty($error['senha'])): ?>
                    <div class="text-danger">
                        <p><?= $error['senha'] ?></p>
                    </div>
                <?php endif; ?>

                <div class="mt-3 d-flex justify-content-between">
                    <div>
                        <a href="/meu_pet_sumiu/login">Já tem conta ?</a>
                    </div>
                </div>

                <input type="submit" value="CREATE ACCOUNT" class="btn btn-warning form-control mt-4">
            </form>

        </div>
    </div>
</div>



<?php
require_once "Layouts/footer.php";
?>