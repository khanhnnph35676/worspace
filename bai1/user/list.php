<div class="container">
    <h3 class="mt-5 mb-5">List Users</h3>

    <?php if (isset($_SESSION['success-user'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" id="success-message" role="alert">
            <?= $_SESSION['success-user'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <a href="?act=add" class="btn btn-primary mb-3">Add New User</a>
    <table class="table border">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Genner</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listUser as $key => $value): ?>
                <tr>
                    <td><?= $value['user_id'] ?></td>
                    <td><?= $value['username'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['address'] ?></td>
                    <td><?= $value['phone'] ?></td>
                    <td><?= $value['gender'] ?></td>
                    <td>
                        <a href="index.php?act=update&id=<?= $value['user_id'] ?>" class="btn btn-primary">Update</a>
                        <a onclick="confirm('Are you delete this user ?')" href="index.php?act=delete&id=<?= $value['user_id']  ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
