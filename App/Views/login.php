<?php
$title = "Login";
include "Layouts/header.php"
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 mt-5">
            <h1 class="text-center">LOGIN</h1>
            <form action="" method="post">
                <label for="email">E-mail</label>
                <input type="email"name="email"class="form-control">

                <label for="senha"class="mt-3">Senha</label>
                <input type="password"name="senha"class="form-control">

                <div class="links mt-3">
                    <a href="/copia/App/create-account">Ainda não tem conta ?</a>
                </div>

                <input type="submit"value="LOGIN"class="btn btn-primary form-control mt-4">
            </form>
        </div>
    </div>
</div>



<?php
include "Layouts/footer.php"
?>