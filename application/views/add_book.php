<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css'); ?>" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets/css/layout2.css'); ?>" rel="stylesheet" />
       <link href="<?php echo base_url('assets/plugins/flot/examples/examples.css'); ?>" rel="stylesheet" />
       <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timeline/timeline.css'); ?>" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
               <?php include('include/header.php'); ?>
                <!-- END LOGO SECTION -->
              
            </nav>

        </div>
        <!-- END HEADER SECTION -->


     <!-- MENU SECTION -->
       <?php include('include/side.php'); ?>
        <!--END MENU SECTION -->





        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Admin Dashboard </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="<?php echo base_url('Home/add_book'); ?>">
                                <i class="icon-signal icon-2x"></i>
                                <span>ADD BOOK</span>
                                
                            </a>
                            <a class="quick-btn" href="<?php echo base_url('Home/book_list'); ?>">
                                <i class="icon-external-link icon-2x"></i>
                                <span>BOOK LIST</span>
                               
                            </a>
                            <a class="quick-btn" href="<?php echo base_url('Home/add_author'); ?>">
                                <i class="icon-lemon icon-2x"></i>
                                <span>AUTHOR</span>
                               
                            </a>
                            <a class="quick-btn" href="<?php echo base_url('Home/add_publisher'); ?>">
                                <i class="icon-bolt icon-2x"></i>
                                <span>PUBLISHER</span>
                                
                            </a>

                            
                            
                        </div>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                 
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
        
        <DIV class="container">
		<div class="row">
		<p><?php echo validation_errors(); ?></p>
		<p><?php 
			$message=$this->session->flashdata('msg');
			if($message=='1')
			{
				echo "Book Added";
			}
			else if($message=='update')
			{
				echo "Author Updated";
			}
			else if($message=='debug')
			{
				echo "Author Deleted";
			}
			
			?></p>
		
<?PHP echo form_open("home/book")?>
    <label for="book" class="mb-2 mr-sm-2">Book Name:</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="book" placeholder="Enter Book Name" name="book_name">
    
	<label for="pwd3" class="mb-2 mr-sm-2">Author Name:</label>
	
    <select name="author_name" class="form-control mb-2 mr-sm-2">
	<?php
	foreach($authors as $row1)
	{
      ?>
	<option><?php echo $row1->author_name; ?></option>
	<?php } ?>
	</select>
	
	<label for="pwd2" class="mb-2 mr-sm-2">Publisher Name:</label>
     <select name="pub_name" class="form-control mb-2 mr-sm-2">
	<?php
	foreach($publisher as $row1)
	{
      ?>
	<option><?php echo $row1->pub_name; ?></option>
	<?php } ?>
	</select>
	
	<label for="pwd2" class="mb-2 mr-sm-2">Price:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" placeholder="Enter Price" name="price">
   <p></p> 
  <button type="submit" class="btn btn-primary mb-2" name="add">ADD</button>
 <?php echo form_close(); ?>
  </div>              
</div>
                
                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
       
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url('assets/plugins/flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/flot/jquery.flot.time.js'); ?>"></script>
     <script  src="<?php echo base_url('assets/plugins/flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/for_index.js'); ?>"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
