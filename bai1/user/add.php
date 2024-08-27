<?php print_r($_SESSION['error']) ?>
<div class="container"> 
    <form action="" method="POST">
        <h3 class="mb-5">Add New User</h3>
        <div class="mb-3">
            Username:
            <input type="text" class="form-control" name='username'>
            <span class="text-danger"><?= isset($_SESSION['error']['username'] )?$_SESSION['error']['username'] :'' ?>  </span>
        </div>
        <div class="mb-3">
            Email:
            <input type="text" class="form-control" name="email" >
            <span class="text-danger"><?= isset($_SESSION['error']['email'] )?$_SESSION['error']['email'] :'' ?>  </span>
        </div>
        <div class="mb-3">
            Address:
            <input type="text" class="form-control" name="address" >
            <span class="text-danger"><?= isset($_SESSION['error']['address'] )?$_SESSION['error']['address'] :'' ?>   </span>
        </div>
        <div class="mb-3">
            Phone:
            <input type="text" class="form-control" name="phone" >
            <span class="text-danger"><?= isset($_SESSION['error']['phonereq'] )?$_SESSION['error']['phonereq'] :'' ?> </span>
            <span class="text-danger"><?= isset($_SESSION['error']['phone'] )?$_SESSION['error']['phone'] :'' ?> </span>
        </div>
        <div class="mb-3">
            Gener:
            <input type="text" class="form-control" name="gener" >
            <span class="text-danger"><?= isset($_SESSION['error']['gender'] )?$_SESSION['error']['gender'] :'' ?> </span>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" name="submit">Add New User</button>
            <a href="index.php?act=list" class="btn btn-dark">Exit</a>
        </div>
    </form>
</div>


