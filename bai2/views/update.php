<div class="container">
    <h3 class="mt-3 mb-3">Update product</h3>
    <form action="" method="POST">
        <input type="hidden" class="form-control" name='id' value='<?= $productDetail['pro_id'] ?>' >
        Name:
        <input type="text" class="form-control" name='name' value='<?= $productDetail['pro_name'] ?>' >
        Price:
        <input type="text" class="form-control" name='price' value='<?= $productDetail['pro_price'] ?>' >
        Quantity:
        <input type="number" class="form-control" name='quantity' value='<?= $productDetail['quantity'] ?>'>
        <button name="update" class="btn btn-primary mt-3">Update</button>
        <a href="?url=list" class="btn btn-dark mt-3">Exit</a>
    </form>
</div>