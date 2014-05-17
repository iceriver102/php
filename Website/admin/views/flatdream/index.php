<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('flatdream/head');?>
<link href="<?php echo base_url('html/admin/'); ?>/css/style.css" rel="stylesheet" />
<body>

<div id="cl-wrapper">
<?php $this->load->view('flatdream/sidebar');?>
<div class="container-fluid" id="pcont">
<?php $this->load->view('flatdream/header');?>
<?php $this->load->view('flatdream/main');?>
</div>
</div>
<?php $this->load->view('flatdream/footer');?>
<body>
</html>