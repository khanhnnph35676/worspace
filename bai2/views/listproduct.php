<div class="container">
    <h3 class="mt-3 mb-3">List product</h3>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" id="success-message" role="alert">
            <?= $_SESSION['success'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <a href="?url=list" class="btn btn-dark mt-3 mb-3">Cart</a>

    <div class="d-flex justify-content-center gap-5">
        <?php foreach ($list as $key => $value): ?>
            <form action="" method="POST">
                <input type="hidden" name='id' value="<?= $value['pro_id'] ?>">
                <input type="hidden" name='name' value="<?= $value['pro_name'] ?>">
                <input type="hidden" name='price' value="<?= $value['pro_price'] ?>">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value["pro_name"] ?></h5>
                        <p class="card-text"><?= $value["pro_price"] ?></p>
                        <button class="btn btn-primary" name="submit">Add to Cart</button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</div>