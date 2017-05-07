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
            <a href="<?php echo site_url(); ?>" class="navbar-brand">Travel Mate</a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
				
                <li><a href='<?php echo site_url('main/admin')?>'>Admin</a> </li>
                   
					
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Tourism Spot <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/tourism_spot')?>'>Tourism Spot</a> </li>					
						<li><a href='<?php echo site_url('main/category')?>'>Category</a> <li>
						
                    </ul>
					</li>
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Attraction <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/att')?>'>Attraction</a> </li> 
						<li><a href='<?php echo site_url('main/big_att')?>'>Big</a> </li>
                        <li><a href='<?php echo site_url('main/daily_att')?>'>Daily</a> </li>
						<li><a href='<?php echo site_url('main/ticket')?>'>Ticket</a> <li>
						
                    </ul>
					</li>
					
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Transport <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href='<?php echo site_url('main/transport')?>'>Transport</a>  </li>
                        <li><a href='<?php echo site_url('main/in_trans')?>'>In Trans</a> </li>
						<li><a href='<?php echo site_url('main/out_trans')?>'>Out Trans</a> </li>
						<li><a href='<?php echo site_url('main/track')?>'>Track</a> <li>
						<li><a href='<?php echo site_url('main/range_trans')?>'>Range</a> </li>
						<li><a href='<?php echo site_url('main/route_trans')?>'>Route</a> </li>
						<li><a href='<?php echo site_url('main/schedule')?>'>Schedule</a> </li>
						<li><a href='<?php echo site_url('main/stops')?>'>Stops</a> </li>
						
                    </ul>
					</li>
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