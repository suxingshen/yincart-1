<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->com_id,
);

$this->menu=array(
	array('label'=>'List Company', 'url'=>array('index')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->com_id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->com_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company', 'url'=>array('admin')),
);
?>

<h1>View Company #<?php echo $model->com_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'com_id',
		'com_type',
		'uid',
		'country',
		'province',
		'city',
		'com_name',
		'com_sn',
		'com_address',
		'com_logo',
		'com_banner',
		'district',
		'com_desc',
		'contactor',
		'office_phone',
		'mobile_phone',
		'status',
		'start_time',
		'end_time',
		'sort',
		'update_time',
		'commision',
		'com_details',
		'email',
		'com_url',
		'add_time',
		'certified_time',
		'tags',
		'brand_story',
		'express',
		'department',
		'employee',
		'industry',
		'nature',
		'com_brands',
	),
)); ?>
