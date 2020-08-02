<div class="w-50 d-flex m-auto justify-content-center mt-3 align-items-center">
<form action="<?=$form->action?>" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Endereço de Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$form->email?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" value="<?=$form->pass?>">
    </div>
    <label><?=$form->message?></label>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>