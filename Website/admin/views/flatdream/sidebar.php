<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
                <a href="index2.html"></a>
            </div>
          </div>
          <div class="side-user">
            <div class="avatar"><img src="<?php echo base_url('Media/Images/big_avator.jpg')?>" alt="Avatar"></div>
            <div class="info">
              <p>40 <b>GB</b> / 100 <b>GB</b><span><a href="#"><i class="fa fa-plus"></i></a></span></p>
              <div class="progress progress-user">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">50% Complete (success)</span>
                </div>
              </div>
            </div>
          </div>
          <ul class="cl-vnavigation">
            <li class="active"><a href="<?php echo base_url('administrator/dashboard');?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li class="parent"><a href="#"><i class="fa fa-smile-o"></i><span>Loại sản phẩm</span></a>
              <ul class="sub-menu">
                <li><a href="<?php echo base_url('administrator/catology/create.html');?>">Thêm loại sản phẩm</a></li>
                <li><a href="<?php echo base_url('administrator/catology/index.html');?>">Danh sách loại sản phẩm</a></li>               
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="fa fa-list-alt"></i><span>Sản phẩm</span></a>
              <ul class="sub-menu">
                <li><a href="form-elements.html">Thêm sản phẩm</a></li>
                <li><a href="form-validation.html">Danh sách sản phẩm</a></li>                
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-table"></i><span>Thông tin liên hệ </span></a>             
            </li>
            <li class="parent"><a href="#"><i class="fa fa-map-marker nav-icon"></i><span>User </span></a>
              <ul class="sub-menu">
                <li><a href="maps.html">Thêm user</a></li>
                <li><a href="vector-maps.html">Danh sách user</a></li>
              </ul>
            </li>   
          </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <input type="text" class="form-control search" placeholder="Search...">
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>