<?php
$this->load->model('alliedservices_model');
$allied_services_model=new Alliedservices_model();
$allied_services=$allied_services_model->get_allied_services();
?>
<div class="allied-services">
	<h3>Allied Services</h3>
	<ul>
		<?php foreach ($allied_services as $allied_service): ?>
		<li><a href="#"><?php echo $allied_service['HEADING'] ?></a></li>
		<?php endforeach ?>
	</ul>
</div>