<link rel="stylesheet" type="text/css" href="<?php echo base_url('html/admin')?>/js/bootstrap.switch/bootstrap-switch.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('html/admin')?>/js/jquery.select2/select2.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('html/admin')?>/js/bootstrap.slider/css/slider.css" />
<link href="<?php echo base_url('html/admin')?>/js/jquery.icheck/skins/flat/green.css" rel="stylesheet">  
<link href="<?php echo base_url('html/admin/'); ?>css/style.css" rel="stylesheet" />
<div class="cl-mcont">	
		<div class="page-head">
			<ol class="breadcrumb">
			  <li><a href="<?php echo base_url('administrator/dashboard')?>">Trang chủ</a></li>
			  <li><a href="<?php echo base_url('administrator/catology')?>">Loại sản phẩm</a></li>
			  <li class="active">Tạo</li>
			</ol>
		</div>
    <div class="row">
      <div class="col-md-12">
      
        <div class="block-flat">
          <div class="header">							
            <h3>Thêm Loại sản phẩm</h3>
          </div>
          <div class="content">
             <form class="form-horizontal group-border-dashed" action="<?php echo base_url('administrator/catology/insertData')?>" method="post" style="border-radius: 0px;">
              <div class="form-group">
                <label class="col-sm-3 control-label">Tên loại sản phẩm</label>
                <div class="col-sm-6">
                  <input type="text" id="name_loai" name="name_loai" class="form-control" placeholder="Tên loại sản phẩm..">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Parent</label>
                <div class="col-sm-6">
                  
                  <select class="form-control" id="id_parent" name="id_parent" >
                    <option value='0'>....</option>
                    <?php 
						for($i=0;$i<count($this->dataLoai);$i++){
							echo '<option value="'.$this->dataLoai[$i]['id'].'">'.$this->dataLoai[$i]['name'].'</option>';
						}
					?>
                  </select>									
                
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Trạng thái</label>
                <div class="col-sm-6">
                  <div class="radio"> 
                    <label> <input class="icheck" type="checkbox" checked="" name="status" id="status" value="1"> </label> 
                  </div>
                 
                </div>
              </div>             
              <div class="form-group">
                <label class="col-sm-3 control-label">Tags</label>
                <div class="col-sm-6">
                 
                  <input class="tags" type="hidden" value="brown,blue,green" name="tags" id="tags" />
               
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Mô tả</label>
                <div class="col-sm-6">
                  <textarea class="form-control" placeholder="Mô tả" name="content" id="content"></textarea>
                </div>
              </div>
			  <div class="form-group">
			  <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
			  </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>	
	</div>
	
	 </script> 
	 <script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/bootstrap.switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.icheck/icheck.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('html/admin'); ?>/js/jquery.select2/select2.min.js" ></script>
	<script type="text/javascript">
    $(document).ready(function(){
      
      /*Switch*/
      $('.switch').bootstrapSwitch();
      
       /*Tags*/
        $(".tags").select2({tags: 0,width: '100%'});     
        
      /*Input & Radio Buttons*/
        $('.icheck').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
    });
</script>