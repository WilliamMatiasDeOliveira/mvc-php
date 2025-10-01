<?php
$title = "Login";
require_once "Layouts/header.php";
require_once "Layouts/nav.php";
?>


<div class="container">
    <div class="row justify-content-center mt-5">
        <h1 class="text-primary text-center">Login</h1>
        <div class="col-5 mt-3">

            <form action="/meu_pet_sumiu/login_submit" method="post">
                <label for="email">E-mail</label>
                <input type="email"name="email"class="form-control">

                <label for="senha"class="mt-3">Senha</label>
                <input type="password"name="senha"class="form-control">

                <div class="mt-3 d-flex justify-content-between">
                    <div>
                        <a href="/meu_pet_sumiu/create_account">Ainda não tem conta ?</a>
                    </div>
                    <div>
                        <a href="">Esqueceu a senha ?</a>
                    </div>
                </div>

                <input type="submit"value="LOGIN"class="btn btn-primary form-control mt-4">
            </form>

        </div>
    </div>
</div>



<?php
require_once "Layouts/footer.php";
?>