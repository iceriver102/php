<link rel="stylesheet" type="text/css" href="<?php echo base_url('html/admin')?>/js/jquery.datatables/bootstrap-adapter/css/datatables.css" />
<link href="<?php echo base_url('html/admin')?>/css/style.css" rel="stylesheet" />
<div class="cl-mcont"> 
  <div class="page-head">
    <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url('administrator/dashboard')?>">Trang chủ</a>
      </li>
      <li class="active"> Loại sản phẩm </li>
    </ol>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="block-flat">
        <div class="header">          
          <h3>Danh sách Loại sản phẩm</h3>
        </div>
        <div class="content">
          <div class="table-responsive">
            <table class="table table-bordered" id="datatable" >
              <thead>
                <tr>
					<th>Rendering engine </th>       
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
                </tr>
              </thead>
             <tbody>
			 
			 </tbody>
            </table>
			
			<table id="example-basic">
			<thead>
			<tr>
				<th>Tên Loại sản phẩm</th>
				<th>Trạng thái</th>
				<th>Tags</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach($this->htmlListLoai as $data){
				if($data['parent_id']==0){
			  ?>
				<tr data-tt-id='<?php echo $data['loai_id']?>'>				
			<?php 
				}
				else
				{?>
				<tr data-tt-id='<?php echo $data['loai_id']?>' data-tt-parent-id="<?php echo $data['parent_id']?>">	
			<?php
				}
			?>
					<td><?php echo $data['loai_name']?></td>
					<td><?php echo $data['loai_status']?></td>
					<td><?php echo $data['loai_tags']?></td>
				</tr>
			<?php
			}
			?>
			</tbody>
			</table>
			
            
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

<script type="text/javascript" src="<?php echo base_url('html/admin')?>/js/jquery.treetable.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin')?>/js/jquery.datatables/jquery.datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('html/admin')?>/js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      //initialize the javascript
      //Basic Instance
      var oTable = $("#datatable").dataTable({
			"autoWidth": true,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo base_url('administrator/catology/dataTable.html')?>"
		});	
         
	  $("#example-basic").treetable({ 
		expandable: false
	  });
	 $("#example-basic").dataTable(
		 {
			"aaSorting": []
		 }
	    );	
	  $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control'); 
    });
</script>
