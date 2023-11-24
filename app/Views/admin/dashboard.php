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
  
        <a class="navbar-brand  text-uppercase text-dark-primary" href="#"><img src="images/money-bag.png" class="img-fluid" alt=""> <b>Fintech</b> Loans</a>

       </div>
  
  
      <div class="navbar-nav ms-auto profile-none">
        <div class="d-flex align-items-center h-100">
          <img src="images/user.svg" alt="">
          <div class="phone-none">
            <span class="d-flex flex-column pl-2 ">
              <p class="mb-0 text-white fs-16 fw-bolder">John Smith</p>
              <p class="mb-0 text-white fs-14 text-light">System Admin</p>
          </span>
      <span><img src="images/sign-out.png" class="img-fluid sign-out" alt=""></span>
          </div>
        </div>
    </div>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse lateral-left" id="bs-example-navbar-collapse-1">
     
        <div class="navbar-nav ms-auto">
          <div class="d-flex align-items-center">
            <img src="images/user.svg" class="pe-2" alt="">
              <span class="d-flex flex-column pl-2 phone-none">
                  <p class="mb-0 text-white fs-16 fw-bolder">John Smith</p>
                  <p class="mb-0 text-white fs-14 text-light">System Admin</p>
              </span>
          <span><img src="images/sign-out.png" class="img-fluid sign-out" alt=""></span>
    
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
              New this week
            </h3>
            <p class="text-uppercase">opportunity</p>
          </div>
          <div>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>
        </div>

        
          <table class="table table-striped dt-responsive datatable-list data-table" id="myDataTable"
                        data-opts='{"sAjaxSource":"<?php echo base_url("/get_all_loans_opportunity") ?>","searching": false}'>
            <thead>
              <tr>
                  <th class="border-left nosort" width="5%">Id</th> 
                  <th class="border-left nosort" width="5%">Opportunity name</th>
                  <th class="border-left nosort" width="25%">Account name</th>
                  <th class="border-left nosort" width="30%">Amount</th>
                  <th class="nosort" width="25%">Close date</th>
                  <th class="border-left nosort" width="30%">Opportunity Owner Alias</th>
                  <th class="border-right nosort" width="15%">Created Date</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

        



          
    </div>
    </div>
  </div>
</section>

 
    

<?php $this->endSection() ?>