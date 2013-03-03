<html>
<?php $this->load->view('layouts/sections/header',array('title'=>$title)); ?>
<body>
	<div id="container">
	<h1>Welcome to GetYourVenue.com!</h1>
	<?php echo $action_content; ?>
	
	<?php $this->load->view('layouts/sections/footer');?>
	</div>
</body>
</html>