
<div id="head-nav" class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-collapse">
        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="dropdown profile_menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?php echo base_url('Media/Images/avator.jpg')?>" /><span><?php echo $this->curUser->full_name?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Profile</a></li>              
              <li class="divider"></li>
              <li><a href="#">Thoát</a></li>
            </ul>
          </li>
        </ul>	
      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>