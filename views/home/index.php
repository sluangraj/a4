<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Hello From the View</h1>
  </div>



	<?php

		foreach($feed_data as $item) {?>
		<h3><?php echo $item->title?></h3>
		<p><?php echo $item->description?></p>
		<p><?php echo $item->pubDate?></p>
		<a href="<?php echo $item->guid?>">Read More</a>
		
	<?php }?>

</div>
<?php include('views/elements/footer.php');?>
