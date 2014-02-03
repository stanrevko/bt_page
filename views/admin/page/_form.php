<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_urigroup'); ?>
		<?php echo $form->textField($model,'p_urigroup',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_urigroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_uri'); ?>
		<?php echo $form->textField($model,'p_uri',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_uri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_title'); ?>
		<?php echo $form->textField($model,'p_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_content'); ?>
		<?php echo $form->textArea($model,'p_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_status'); ?>
		<?php echo $form->textField($model,'p_status'); ?>
		<?php echo $form->error($model,'p_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_pid'); ?>
		<?php echo $form->textField($model,'p_pid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p_pid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_owner_name'); ?>
		<?php echo $form->textField($model,'p_owner_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_owner_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_owner_id'); ?>
		<?php echo $form->textField($model,'p_owner_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'p_owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_keywords'); ?>
		<?php echo $form->textArea($model,'meta_keywords',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'meta_keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_css'); ?>
		<?php echo $form->textArea($model,'p_css',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p_css'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_js'); ?>
		<?php echo $form->textArea($model,'p_js',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'p_js'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_url'); ?>
		<?php echo $form->textField($model,'p_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_layout'); ?>
		<?php echo $form->textField($model,'p_layout',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_layout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_template'); ?>
		<?php echo $form->textField($model,'p_template',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'p_template'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_created'); ?>
		<?php echo $form->textField($model,'p_created'); ?>
		<?php echo $form->error($model,'p_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_updated'); ?>
		<?php echo $form->textField($model,'p_updated'); ?>
		<?php echo $form->error($model,'p_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->