<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<a href="create.php" class="btn btn-success mb-3">Adicionar Usuário</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>
