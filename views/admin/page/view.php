<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->p_id,
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->p_id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->p_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>View Page #<?php echo $model->p_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'p_id',
		'p_urigroup',
		'p_uri',
		'p_title',
		'p_content',
		'p_status',
		'p_pid',
		'p_owner_name',
		'p_owner_id',
		'meta_title',
		'meta_description',
		'meta_keywords',
		'p_css',
		'p_js',
		'p_url',
		'p_layout',
		'p_template',
		'p_created',
		'p_updated',
	),
)); ?>
