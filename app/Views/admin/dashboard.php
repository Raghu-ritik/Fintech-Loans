<?php $this->extend('admin/admintemplate') ?>
<?php $this->section('content') ?>


  <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header d-flex justify-content-between">
       <div class="d-flex">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="images/menu-left.png" alt="">
        </button>
        <a class="navbar-brand  text-uppercase text-dark-primary" href="<?php echo base_url() ?>"><img src="images/money-bag.png" class="img-fluid" alt=""> <b>Fintech</b> Loans</a>
       </div>
      <div class="navbar-nav ms-auto profile-none">
        <div class="d-flex align-items-center h-100">
          <a href="<?php echo base_url("profile") ?>">
            <img src="images/user.svg" alt="">
          </a>
          <div class="phone-none">
            <span class="d-flex flex-column pl-2 ">
              <p class="mb-0 text-white fs-16 fw-bolder">John Smith hre</p>
              <p class="mb-0 text-white fs-14 text-light">System Admin</p>
            </span>
            <span>
              <img src="images/sign-out.png" class="img-fluid sign-out" alt="">
            </span>
          </div>
        </div>
    </div>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse lateral-left" id="bs-example-navbar-collapse-1">
     
        <div class="navbar-nav ms-auto">
        <div class="d-flex align-items-center">
              <a href="<?= base_url("profile") ?>" ><img src="images/user.svg" class="pe-2" alt=""></a>
              <span class="d-flex flex-column pl-2 phone-none">
                  <p class="mb-0 text-white fs-16 fw-bolder"><?= $data['login_user_detail']->username ?></p>
                  <p class="mb-0 text-white fs-14 text-light"><?php if($data['login_user_detail']->user_type==99){echo "System Admin";}else{echo "Loan user";} ?></p>
              </span>
              <a href="<?= base_url("logout") ?>" ><span><img src="images/sign-out.png" class="img-fluid sign-out" alt=""></span></a>
    
          </div>
      </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



<section class="pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-between w-100">
          <div>
            <h3 class="text-primary mb-0">
              All
            </h3>
            <p class="text-uppercase">opportunity</p>
          </div>
          <div style="display:none;">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>
        </div>

        
          <table class="table table-striped dt-responsive datatable-list data-table" id="opportunityDataTable">
            <thead>
              <tr>
                  <th class="border-left nosort" width="5%">Id</th> 
                  <th class="border-left nosort" width="15%">Opportunity name</th>
                  <th class="border-left nosort" width="15%">Account name</th>
                  <th class="border-left nosort" width="15%">Amount</th>
                  <th class="nosort" width="15%">Close date</th>
                  <th class="border-left nosort" width="15%">Opportunity Owner Alias</th>
                  <th class="border-right nosort" width="10%">Created Date</th>
                  <th class="border-right nosort" width="10%">Actions</th>
              </tr>
            </thead>
          </table>

        



          
    </div>
    </div>
  </div>
</section>

 
    

<?php $this->endSection() ?>