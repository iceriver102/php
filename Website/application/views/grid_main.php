<link href="<?php echo base_url('html/css/module/product/product_list.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('html/css/module/leostatic/style.css');?>" rel="stylesheet" type="text/css">
<section id="columns" class="clearfix">
  <div class="container">
    <div class="row-fluid">      
      <section id="center_column" class="span12">
        <div class="contenttop row-fluid">          
          <div id="homecontent-displayHome">
			<?php $this->load->view('leo-custom')?>
           
            <div class="leo-carousel">
              <?php $this->load->view('latest')?>
			  <?php $this->load->view('featured')?>			  
            </div>
          </div>
          <script>
            $(document).ready(function() {
              $('.carousel').each(function(){
					$(this).carousel({
					  pause: true,
					  interval: false
					});
				});
              $(".blockleoproducttabs").each( function(){
                $(".nav-tabs li", this).first().addClass("active");
                $(".tab-content .tab-pane", this).first().addClass("active");
              });
            });
          </script>        
        </div>
        <?php $this->load->view('best-sellers')?>
	  </section>
	 
	 </div>
	</div>
</section>
 <?php $this->load->view('section_footer')?>