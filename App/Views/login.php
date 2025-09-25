<?php
$title = "Login";
require_once "Layouts/header.php";
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 mt-5">
            <h1 class="text-primary text-center">Login</h1>
            <form action="#" method="post">
                <label for="email">E-mail</label>
                <input type="email"name="email"class="form-control">

                <label for="senha"class="mt-3">Senha</label>
                <input type="senha"name="senha"class="form-control">

                <div class="mt-3">
                    <a href="/mvc-studies/create-account">Ainda não tem conta ?</a>
                </div>

                <input type="submit"value="LOGIN"class="btn btn-primary form-control mt-4">
            </form>

        </div>
    </div>
</div>


<?php
require_once "Layouts/footer.php";
?>