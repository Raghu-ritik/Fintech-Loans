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
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <div class="mb-9">
                   <div class="row g-6">
                      <div class="col-md-4   col-12">
                         <div class="card blue-border mb-4">
                            <div class="hover-actions-trigger d-flex align-items-center position-relative my-2"
                               >

                               <div class="px-3">
                                  <input class="d-none" id="upload-settings-porfile-picture" type="file" />
                                  <label
                                     class="avatar avatar-4xl status-online feed-avatar-profile cursor-pointer"
                                     for="upload-settings-porfile-picture mb-0"><img
                                     class="rounded-circle img-thumbnail bg-white shadow-sm" src="images/profile.png"
                                     width="200" alt="" /></label>
                               </div>
                               <div class="mb-2 align-items-center">
                                  <h3 class="me-0 mb-0">Ansolo Lazinatov</h3>
                                  <p class="fw-normal fs-0 p-0 m-0">Sofware Engineer </p>
                               </div>
                            </div>
                         </div>
                         <div class="container">
                            <div class="row input-row">
                              <div class="col-12 p-0">
                                <p class="input-heading mb-0 border-bottom">
                                    Company Info
                                </p>
                      
                      
                                <div class="row p-10 pb-4">
                                  <div class="col-12">
                                    <form>
                                      <div class="form-group mt-3">
                                        <label for="formGroupExampleInput">Company Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                          placeholder="Enter Company Name">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-12">
                                    <form>
                                      <div class="form-group mt-3">
                                        <label for="formGroupExampleInput">Website</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Website">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                      
                              </div>
                      
                            </div>
                          </div>
                        </div>

                         <div class="col-md-8   col-12">
                         <div class="rounded border-300 mb-4">
                            <div class="container">
                                <div class="row input-row">
                                  <div class="col-12 p-0">
                                    <p class="input-heading mb-0 border-bottom">
                                        Personal Information
                                    </p>
                          
                          
                                    <div class="row p-10 pb-4">
                                      <div class="col-6">
                                        <form>
                                          <div class="form-group mt-3">
                                            <label for="formGroupExampleInput">First Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                              placeholder="Enter First Name">
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-6">
                                        <form>
                                          <div class="form-group mt-3">
                                            <label for="formGroupExampleInput">Last Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Last Name">
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-6">
                                        <form>
                                          <div class="form-group mt-3">
                                            <label for="formGroupExampleInput">Email</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                              placeholder="Enter Your Email">
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-6">
                                        <form>
                                          <div class="form-group mt-3">
                                            <label for="formGroupExampleInput">Phone</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                              placeholder="Enter Your Phone">
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-12">
                                        <div class="form-icon-container mt-3"><label
                                            class="text-700 form-icon-label" for="info">Info</label>
                                            <div><textarea class="form-control" id="info"
                                               style="height: 115px;" placeholder="Info"></textarea></div>
                                            <span
                                               class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                         </div>
                                      </div>
                                    </div>
                          
                                  </div>
                          
                                </div>
                              </div>

                         </div>
                      </div>

                      <div class="col-md-12 col-12">
                        <div class="container">
                            <div class="row input-row">
                              <div class="col-12 p-0">
                                <p class="input-heading mb-0 border-bottom">
                                    Change Password
                                </p>
                      
                      
                                <div class="row p-10 pb-4">
                                  <div class="col-4">
                                    <form>
                                      <div class="form-group mt-3">
                                        <label for="formGroupExampleInput">Old Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                          placeholder="Enter Old Password">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-4">
                                    <form>
                                      <div class="form-group mt-3">
                                        <label for="formGroupExampleInput">New Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter New Password">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-4">
                                    <form>
                                      <div class="form-group mt-3">
                                        <label for="formGroupExampleInput">Confirm New Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                          placeholder="Confirm New Password">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                      
                              </div>
                      
                            </div>
                          </div>

                        <div class="text-end my-4">
                            <div><button class="btn btn-outline me-2 p-2 px-3 fs-14">Cancel Changes</button><button
                               class="btn btn-primary p-2 px-3 fs-14">Save Information</button></div>
                         </div>
                     </div>


                   </div>
                </div>

             </div>
        </div>
    </div>
  </div>
</section>
<?php $this->endSection() ?>
    
