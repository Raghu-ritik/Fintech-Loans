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
    <div class="row g-6">

        <div class="col-md-8   col-12">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       Loan Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">First Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter First Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Last Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Last Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Email</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter Your Email">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
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
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Loan Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">First Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter First Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Last Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Last Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Email</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter Your Email">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
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
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       Loan Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">First Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter First Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Last Name</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Last Name">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Email</label>
                                  <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Enter Your Email">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
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

     <div class="col-md-4 col-12">
       <div class="card p-4">
        <h3> Loan analysis by Flynx</h3>
        
        <div class="flynx-flex">
            <!-- <p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p> -->
            <div class="circle active">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                  </button>

        </div>
                </button>
                
            <div class="circle">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                  </button>
        </div>
                </button>

            <div class="circle">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                  </button>
        </div>
                </button>
        </div>

        <p class="bottom-flynx">
            Lorem ipsum dolor sit amet
        </p>
       </div>
     </div>


  </div>

  </div>
</section>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

 



<?php $this->endSection() ?>