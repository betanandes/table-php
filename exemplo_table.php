    <h1>Lista de Usuários</h1>
    <a href="create.php">Criar Novo Usuário</a><br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="update.php?id=<?= $usuario['id']; ?>">Editar</a>
                <a href="delete.php?id=<?= $usuario['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>