<?php print_r($_SESSION['error']) ?>
<div class="container"> 
    <?php foreach($_SESSION['listUser'] as $key=>$value):
        if ($value['user_id'] == $_GET['id']): ?>
    <form action="" method="POST">
        <h3 class="mb-5">Update User</h3>
        <div class="mb-3">
            Username:
            <input type="text" class="form-control" name='username' value="<?= $_SESSION['listUser'][$key]['username']?>" >
            <span class="text-danger"><?= isset($_SESSION['error']['username'] )?$_SESSION['error']['username'] :'' ?>  </span>
        </div>
        <div class="mb-3">
            Email:
            <input type="text" class="form-control" name="email"  value="<?= $_SESSION['listUser'][$key]['email']?>" >
            <span class="text-danger"><?= isset($_SESSION['error']['email'] )?$_SESSION['error']['email'] :'' ?>  </span>
        </div>
        <div class="mb-3">
            Address:
            <input type="text" class="form-control" name="address"  value="<?= $_SESSION['listUser'][$key]['address']?>" >
            <span class="text-danger"><?= isset($_SESSION['error']['address'] )?$_SESSION['error']['address'] :'' ?>   </span>
        </div>
        <div class="mb-3">
            Phone:
            <input type="text" class="form-control" name="phone"  value="<?= $_SESSION['listUser'][$key]['phone']?>" >
            <span class="text-danger"><?= isset($_SESSION['error']['phone'] )?$_SESSION['error']['phone'] :'' ?> </span>
        </div>
        <div class="mb-3">
            Gener:
            <input type="text" class="form-control" name="gener"  value="<?= $_SESSION['listUser'][$key]['gender']?>" >
            <span class="text-danger"><?= isset($_SESSION['error']['gender'] )?$_SESSION['error']['gender'] :'' ?> </span>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" name="submit">Update User</button>
            <a href="index.php?act=list" class="btn btn-dark">Exit</a>
        </div>
    </form>
    <?php 
    endif;
    endforeach;
    ?>
</div>


