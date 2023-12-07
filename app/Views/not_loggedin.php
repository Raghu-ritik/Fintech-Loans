<?php $this->extend('creditsensetemplate') ?>
<?php $this->section('content') ?>

<div class="container-thank">
    <img class="icon-thank" src="<?=base_url('images/icon/cross.png');?>" alt="Checkmark Icon">
    <h1 class="NoAccess">No Access!</h1>
    <p class="Thank-msg">you are not logged in to the application please login to access you data into the site. </p>
    <p> <a href="<?= base_url('login') ?>"><button class="btn">Login ?</button></a>  </p>
</div>


<?php $this->endSection() ?>