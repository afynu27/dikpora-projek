<style>
    .container{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        border-radius:20px;
        background-color:ghostwhite;
        margin-top: 50px;
        padding:30px;
    }
    form div{
        margin-top: 20px;
    }
</style>
<div class="container d-flex flex-column align-items-center justify-content-center">
    <div class="font-weight-bold text-info">LOGIN</div>
    <div class="text-danger font-weight-bold">
    <?php 	  echo $this->session->flashdata('pesan_flash'); ?>
    </div>
    <form action="<?= base_url()?>index.php/Login/logValidate" method="post"class="w-75 d-flex flex-column">
        <div>
            <input  class="form-control" type="text"  placeholder="Username" name="username">
        </div>
        <?= form_error('username',' <small class="text-danger pl-3">', '</small>'); ?>
        <div>
            <input class="form-control" type="password"  placeholder="Password" name="password">
        </div>
        <?= form_error('password',' <small class="text-danger pl-3">', '</small>'); ?>
        <div class="d-flex flex-column align-items-center justify-content-center">
        <input type="submit" value="Login" class="btn btn-primary col-2 align-items-center" style="margin-top:20px; margin-bottom:10px">
         
        <a href="<?= base_url()?>index.php/Login/registrasi">Sign Up</a>
        </div>
    </form>
</div>