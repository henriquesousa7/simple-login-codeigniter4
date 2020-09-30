<h2 class="text-center">Login</h2>

<form action="/users/responseLogin" method="post">

    <div class="form group col-md-6 offset-md-3">
        <label for="email">Email</label>
        <input type="text" class="form-control", name="email", id="email">

        <label for="senha">Senha</label>
        <input type="text" class="form-control", name="senha", id="senha">
    </div>
    <br>
    <div class="form-group col-md-6 offset-md-3">
        <input type="submit" class="btn btn-primary" value="Entrar"></input>
        <a href="users/register" class="btn btn-dark">Cadastrar uma nova conta</a>
        <a href="users/allusers" class="btn btn-dark">Ver todos os usuarios</a>
    </div>
    
</form>