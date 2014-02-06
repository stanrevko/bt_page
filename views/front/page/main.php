<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css" />
        <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
        <script src="<?php echo $this->createUrl('/js/jquery-1.9.1.min.js');?>"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>
                array(array('label' => 'сайт', 'url' => '/admin/default/home'),
                       array('label' => 'пользователи', 'url' => '/admin/user/index'),
                       array('label' => 'вещества', 'url' => '/admin/substance/index'),
                       array('label' => 'категории', 'url' => '/admin/cookSubsection/index'),

                     array('label' => 'рассылка', 'url' => '/admin/messages'),
					   array('label' => 'рецепты', 'url' => '/admin/recipe/index'),
                       array('label' => 'страницы', 'url' => '/admin/page/admin'),
                       array('label' => 'уведомления', 'url' => '/admin/notice/index'),

                       array('label' => 'продукты', 'url' => '/admin/product/index'),
                       array('label' => 'кулинару', 'url' => '/admin/cookTip/index'),
                       array('label' => 'блог', 'url' => '/admin/blog/index'),
                   ),
		)); ?>
	</div><!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>


</div><!-- page -->

</body>
</html>