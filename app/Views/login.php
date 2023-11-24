<?php $this->extend('admin/admintemplate') ?>
<?php $this->section('content') ?>

<section class="login">
  <div class="container-fluid">
    <div class="row">
     <div class="col-12">
       <div class="card Login">
         <div class="py-4 border-bottom mb-3">
           <a class="navbar-brand  text-uppercase text-dark-primary fs-25" href="#"><img src="images/money-bag.png" class="img-fluid" alt=""> <b>Fintech</b> Loans</a>
         </div>
         <div class="Login-20">
           <h2 class="sign-in mb-3">Sign in to start your session</h2>
           <form method="POST" action="make_login" >
             <input class="w-100 form-control mb-3" type="text" id="username" name="email" placeholder="Enter your username">
             <input class="w-100 mb-3 form-control" type="password" id="password" name="password" placeholder="Enter your password">
             
             <h2 class="sign-in mb-3"><?php echo isset($msg) ? $msg: ''?></h2>
           <button class="btn btn-Login w-100 m-0" type="submit">Login</button>
         </form>
         </div>
       </div>
     </div>
    </div>
   </div>
</section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <?php $this->endSection() ?>
 