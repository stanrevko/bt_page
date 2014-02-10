<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs = array(
    'Страницы' => array('index'),
    'Управление',
);

$this->menu = array(
    array('label' => 'Дерево страниц', 'url' => array('treeAdmin')),
    array('label' => 'Создание страницы', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление страницами</h1>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'page-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'p_id',
        'p_uri',
        'p_title',
        'p_status',
//	'p_pid',
	'p_owner_name',
	'p_owner_id',
//	'meta_title',
//	'meta_description',
//	'meta_keywords',
//	'p_css',
//	'p_js',
	'p_url',
	'p_layout',
	'p_template',
	'p_created',
	'p_updated',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
