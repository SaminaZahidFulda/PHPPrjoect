<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');  

  ?><script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
       <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="<?php echo base_url(); ?>style/screen.css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>style/lightbox.css" media="screen"/>
  <div class="page-content">
    <div class="content container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Gallery</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-tasks"></i>
              <h3>Gallery</h3>
            </div>
            <div class="widget-content">
              <div id="examples" class="section examples-section">
                                                <?php   
 
$count=1;
foreach($images As $e){
  ?>
                <div class="col-sm-4 col-md-2">
                  <div class="image-row">
                    <div class="image-set"> <a class="example-image-link" href="<?php echo base_url(); ?>uploads/products/<?php echo $e->product_image; ?>" 
                                               data-lightbox="example-set" title="Click on the right side of the image to move forward."> 
                            <img class="example-image" src="<?php echo base_url(); ?>uploads/products/<?php echo $e->product_image; ?>" alt="Plants: image 1 0f 4 thumb" width="150" height="250"/></a> </div>
                             
                  </div>
                </div>
                                                  <?php   
}
  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once('includes/footer.php');?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/smooth-sliding-menu.js"></script>
<script src="<?php echo base_url(); ?>javascript/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>javascript/lightbox-2.6.min.js"></script>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

