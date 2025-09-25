<?php
$title = "Create Account";
require_once "Layouts/header.php";
$erros = $_SESSION['erros'] ?? [];
unset($_SESSION['erros']);
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 mt-5">
            <h1 class="text-center">Create Account</h1>
            <form action="#" method="post">

                <label for="nome">Nome</label>
                <input type="text"name="nome"class="form-control">
                <?php if(isset($erros['nome'])): ?>
                    <div class="text-danger">
                        <?= $erros['nome'] ?>
                    </div>
                <?php endif; ?>

                <label for="email"class="mt-3">E-mail</label>
                <input type="email"name="email"class="form-control">
                <?php if(isset($erros['email'])): ?>
                    <div class="text-danger">
                        <?= $erros['email'] ?>
                    </div>
                <?php endif; ?>

                <label for="senha"class="mt-3">Senha</label>
                <input type="password"name="senha"class="form-control">
                <?php if(isset($erros['senha'])): ?>
                    <div class="text-danger">
                        <?= $erros['senha'] ?>
                    </div>
                <?php endif; ?>

                <div class="mt-3">
                    <a href="/mvc-studies/">Já tem conta ?</a>
                </div>

                <input type="submit"value="CREATE ACCOUNT"class="btn btn-warning form-control mt-4">

            </form>

        </div>
    </div>
</div>


<?php
require_once "Layouts/footer.php";
?>