<?php 
$title = 'Connexion'; 

ob_start();?>

<style type="text/css">
  body{
    background: #007bff;
    background: linear-gradient(to right, #0060E6, #33AEFF);
  }
</style>

<div class="row">
  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Connectez vous</h5>
        <form class="form-signin" action="connecting" method="post" href="/connecting">
          <div class="form-label-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="pseudo" required autofocus>
            <label for="inputEmail">Pseudo</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
            <label for="inputPassword">Mot de passe</label>
          </div>

          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Se rappeler du mot de passe</label>
          </div>
          <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Connexion</button>
          
        </form>

      </div>
    </div>
  </div>
</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>