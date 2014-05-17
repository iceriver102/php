<section id="bottom">
  <div class="container">
    <div class="row-fluid">
      <div id="homecontent-displayBottom" class="leo-manage">
        <div class="leo-custom customhtml">
          <h1 class="title_block">
            <span class="tcolor">
              Our
            </span>
            Special Offers
          </h1>
          <div class="row-fluid">
            <div class="span4">
              <img src="<?php echo base_url('Media/Images/img-offers1.jpg');?>" alt="">
            </div>
            <div class="span4">
              <img src="<?php echo base_url('Media/Images/img-offers2.jpg');?>" alt="">
            </div>
            <div class="span4">
              <img src="<?php echo base_url('Media/Images/img-offers3.jpg');?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('.carousel').each(function(){
            $(this).carousel({
              pause: true,
              interval: false
            }
                            );
          }
                             );
          $(".blockleoproducttabs").each( function(){
            $(".htabs li", this).first().addClass("active");
            $(".tab-content .tab-pane", this).first().addClass("active");
          }
                                        );
        }
                         );
      </script>
    </div>
  </div>
</section>