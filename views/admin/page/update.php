<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Страницы'=>array('index'),
	$model->p_id=>array('view','id'=>$model->p_id),
	'Изменение',
);

$this->menu=array(
	array('label'=>'Управление страницами', 'url'=>array('index')),
	array('label'=>'Создание страницы', 'url'=>array('create')),
	array('label'=>'Просмотр страницы', 'url'=>array('view', 'id'=>$model->p_id)),
);
?>

<h1>Изменение страницы <?php echo $model->p_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>