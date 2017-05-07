<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    
	
	
	
	
	
<?php endforeach; ?>
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<script  type="text/javascript" src="<?php echo base_url('assets/bootstrap.min.js'); ?>"></script>
	
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div class="navbar navbar-default navbar-fixed-top">
    <div class="container col-md-10 col-md-offset-1 ">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo site_url(); ?>" class="navbar-brand">INDSTUFF</a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				
                  
				   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        User <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/admin')?>'>Admin</a> </li>					
						<li><a href='<?php echo site_url('main/customer')?>'>Customer</a> <li>
						
                    </ul>
					</li>
				   					
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Bank <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/bank')?>'>Bank</a> </li>					
						<li><a href='<?php echo site_url('main/metodepembayaran')?>'>Metode Pembayaran</a> <li>
						
                    </ul>
					</li>
					
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Lokasi <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/provinsi')?>'>Provinsi</a> </li> 
						<li><a href='<?php echo site_url('main/kota')?>'>Kabupaten</a> </li>
                        <li><a href='<?php echo site_url('main/kecamatan')?>'>Kecamatan</a> </li>						
                    </ul>
					</li>
					
					
					<li><a href='<?php echo site_url('main/merch')?>'>Merch</a> </li> 
					
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Produk <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						
						
						<li><a href='<?php echo site_url('main/kategoriproduk')?>'>Kategori Produk</a> </li>						
						<li><a href='<?php echo site_url('main/produk')?>'>Produk</a> </li>
						<li><a href='<?php echo site_url('main/sizeproduk')?>'>Size Produk</a> </li>
                        						
                    </ul>
					</li>
					
					
					
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Customer order <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/order')?>'>Order</a> </li> 
						<li><a href='<?php echo site_url('main/detailorder')?>'>Detail Order</a> </li>
						<li><a href='<?php echo site_url('main/ordershipping')?>'>Order Shipping</a> </li>						
						
                        						
                    </ul>
					</li>
					
					
					<li><a href='<?php echo site_url('main/konfirmasipembayaranorder')?>'>Pembayaran Order</a> </li> 
					
					
                    <li><a href='<?php echo site_url('main/logout')?>'>Log Out</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </nav>
    </div>
</div>

<!-- End of header-->
    <div style='height:100px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>