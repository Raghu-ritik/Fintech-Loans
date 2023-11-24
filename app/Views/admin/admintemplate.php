<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?=base_url('css/admin/style.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('css/dataTables.bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.bootstrap.min.css') ?>"/>


</head>
<body>

<?= $this->renderSection('content') ?>


 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('js/dataTables.responsive.min.js') ?>"></script>

<script src="<?php echo base_url('js/admin.js'); ?>"></script>

<script>
    $(document).ready( function () {
        $('#myDataTable').DataTable();
    } );
</script>
    
</body>
</html>