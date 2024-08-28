<style>

</style>
<div class="container">
    <div class="d-flex justify-content-between mt-5 mb-3">
        <h3 class="">Cart</h3>
        <a href="?url=list" class="btn btn-primary">Giỏ hàng <span class="">
            (<?= isset($_SESSION['count_cart'])?$_SESSION['count_cart']:''?>)
        </span></a>
    </div>
    <?php if (isset($_SESSION['success-update'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" id="success-message" role="alert">
            <?= $_SESSION['success-update'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <body>
        <table class='table'>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $key => $value): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value["pro_name"] ?></td>
                        <td><?= $value["pro_price"] ?></td>
                        <td><?= $value["quantity"] ?></td>
                        <td>
                            <a href="?url=update&id=<?=$value["pro_id"]?>" class='btn btn-primary'>Update Product</a>
                            <a onclick="confirm('Are you delete product for cart?')" href="?url=list&id=<?= $value['pro_id'] ?>" 
                                class='btn btn-danger'>Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td class="scol-span5"></td>
                        <td>Tổng số lượng: <?= $count?></td>
                    </tr>
            </tbody>
        </table>
        <div class="text-end mt-3">
            <a href="?url=listproduct" class="btn btn-primary">Add New Product</a>
        </div>
</div>