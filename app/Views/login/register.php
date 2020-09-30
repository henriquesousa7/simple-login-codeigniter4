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
        <a href="/users" class="btn btn-dark">Voltar para pagina de login</a>
    </div>   
</form>

<div  id="rules" class="text-center text-danger">
    <h5><strong>Regras</strong></h5>
    <p>Usuario: <strong>Mais que 6 caracteres</strong></p>
    <p>Email: <strong>Mais que 6 caracteres, menor que 50 caracteres</strong></p>
    <p>Senha: <strong>Mais que 8 caracteres, menor que 255 caracteres</strong></p>
</div>