 <div class="text-center">   
    <h2>Usuarios</h2>
    <a href="/users" class="btn btn-dark mb-2">Voltar para pagina de login</a>
    <table class="table">
        <tr>
            <th>Usuario</th>
            <th>Email</th>
        </tr>
        <?php if(!empty($users)): ?>
            <?php foreach($users as $user): ?> 

                <tr>
                    <td>
                        <?php echo $user['usuario'] ?>
                    </td>
                    <td>
                    <?php echo $user['email'] ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        
        <?php else: ?>
            <tr>
                <td colspan="2">Nenhuma noticia encontrada</td>
            </tr>
        <?php endif; ?>
        
    </table>
</div>