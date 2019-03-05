<?php
require_once('includes/header.php');
require_once('includes/sidebar.php');
?>

<link href="<?php echo base_url(); ?>css/demo_table.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">


<div class="page-content">
    <div class="content container">
        <div class="col-md-12">
            <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Product</a></li>
                <li class="active">List</li>
            </ol>
        </div>
        <div class="col-lg-12">
            <div id="alert">
                <?php echo $this->session->flashdata('verify'); ?>
            </div>
            <div class="widget">
                <div class="widget-header"><i class="icon-large icon-group"></i>
                    <h3 class="left">Workers</h3>  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  

                    <a href="javascript:void(0)" class="btn btn-success generate_barcode" target="_blank" title="Generate Barcode" ><i class="fa fa-barcode"></i> Barcode</a>

                    </h3>

                </div>
               
      <div class="widget-content">         
  <div id="demo">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover " id="example">
       <thead>
                                    <tr>
                                        <th> <i class="fa  fa-dot-circle-o"></i></th>
                                        <th>  Article</th>
                                        <th> <i class="fa fa-gift"></i> Title</th>
                                        <th> <i class="fa fa-asterisk"></i> Category</th>
                                        <th> <i class="fa fa-bullseye"></i>Color</th>
                                        <th> <i class="fa  fa-usd"></i>Cost Price</th>
                                        <th> <i class="fa fa-money"></i>Sale Price</th>
                                        <th> <i class="fa fa-picture-o"></i>&nbsp;Image</th>
                                        <th> <i class="icon-large icon-plus-sign"></i> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (empty($products)) {
                                        ?>
                                        <tr>
                                            <td>   </td><td></td><td></td><td><?php echo "No record found"; ?></td><td></td><td></td></tr>

                                        <?php }
                                    ?> 
                                    <?php
                                    $count = 1;
                                    foreach ($products As $e) {
                                        ?>
                                        <tr>

                                            <td><input type='checkbox' class="product_id" value="<?php echo $e->product_id; ?>"></td>
                                            <td><?php echo $e->product_article; ?></td>
                                            <td><?php echo $e->product_itemname; ?></td>
                                            <td><?php echo $e->category_name; ?></td>
                                            <td><?php echo $e->ColorName; ?></td>
                                            <td><?php echo $e->cost_price; ?></td>
                                            <td><?php echo $e->product_saleprice; ?></td>
                                            <td> <img src="<?php echo base_url(); ?>uploads/products/<?php echo $e->product_image; ?>" width="100" height="100"></td>
                                            <td class="td-actions">
                                                <a class="btn btn-small btn-success" href="<?php echo base_url(); ?>Product_controller/update/<?php echo $e->product_id; ?>"><i class="btn-icon-only icon-edit"> </i></a>
                                                <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>Product_controller/delete/<?php echo $e->product_id; ?>"><i class="btn-icon-only fa fa-trash-o"> </i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                    }
                                    ?>  

                                </tbody>
                            </table>
                        </div>

                  



               </div>
               </div>




 </div>
    







        <?php require_once('includes/footer.php'); ?>



    </div></div>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery.dataTables.js"></script>
			
<script>
    
		
    $(document).ready(function () {
        $('#example').dataTable( {
					"sPaginationType": "full_numbers"
				} );
        $('.generate_barcode').click(function () {
            var id = $('.table tbody :checkbox:checked').val();
            if(id!='undefined'){
                $(this).attr('href', '<?php echo base_url(); ?>Product_controller/generate_barcode/' + id);
            }
        });
    });
</script>