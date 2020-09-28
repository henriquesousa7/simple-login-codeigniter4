<h2 class="text-center">Cadastrar</h2>

<form action="/users/responseRegister" method="post">

    <div class="form group col-md-6 offset-md-3">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control", name="usuario", id="usuario">

        <label for="email">Email</label>
        <input type="text" class="form-control", name="email", id="email">

        <label for="senha">Senha</label>
        <input type="text" class="form-control", name="senha", id="senha">
    </div>
    <br>
    <div class="form-group col-md-6 offset-md-3">
        <input type="submit" class="btn btn-primary" value="Cadastrar"></input>
    </div>   
</form>