<link href="<?php echo base_url('html/css/module/search/blocksearch.css');?>" rel="stylesheet" type="text/css">
<div class="block-search-top">
  <div class="icon-search">
    Search
  </div>
  <div id="search_block_top" class='span5'>
    <form method="get" action="http://demo4leotheme.com/prestashop/leo_metro/index.php?controller=search" id="searchbox" class="row-fluid">
      <p>
        <input type="hidden" name="controller" value="search">
        <input type="hidden" name="orderby" value="position">
        <input type="hidden" name="orderway" value="desc">
		
        <input class="search_query span12" placeholder="Tìm kiếm theo sản phẩm, thương hiệu..." type="text" id="search_query_top" name="search_query" value="" autocomplete="off">
        <input type="submit" name="submit_search" value="Search" class="button icon_search_w">
		
      </p>
    </form>
  </div> 
</div>