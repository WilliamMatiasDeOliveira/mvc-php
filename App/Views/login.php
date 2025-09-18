<?php
require_once "Layouts/header.php";
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4">

        <h1 class="text-center text-primary mb-4 mt-5">Login</h1>

        <form action="/copia/App/login_submit" method="post">
            <label for="email">E-mail</label>
            <input type="email"name="email"class="form-control">

            <label for="senha"class=" mt-3">Senha</label>
            <input type="password"name="senha"class="form-control">

            <div class="mt-3 mb-4">
                <a href="/copia/App/create_account">Ainda não tem conta ?</a>
            </div>

            <input type="submit"value="LOGIN"class="btn btn-primary form-control">
        </form>
        </div>
    </div>
</div>



<?php
require_once "Layouts/footer.php";
?>