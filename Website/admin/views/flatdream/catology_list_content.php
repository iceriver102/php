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
            
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>


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
       /* $('#datatable2 thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );
         
        $('#datatable2 tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );*/
         
        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
       /* var oTable = $('#datatable2').dataTable( {
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']]
        });*/
         
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        /*$('#datatable2').delegate('tbody td img','click', function () {
            var nTr = $(this).parents('tr')[0];
            if ( oTable.fnIsOpen(nTr) )
            {
                
                this.src = "images/plus.png";
                oTable.fnClose( nTr );
            }
            else
            {
                
                this.src = "images/minus.png";
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
            }
        } );*/
        
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control');    

    });
</script>