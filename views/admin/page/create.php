<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Страницы'=>array('index'),
	'Создание',
);

$this->menu=array(
    array('label' => 'Дерево страниц', 'url' => array('treeAdmin')),
    array('label' => 'Управление страницами', 'url' => array('index/index')),
);
?>

<h1>Создание страницы</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>