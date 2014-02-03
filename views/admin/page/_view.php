<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_id), array('view', 'id'=>$data->p_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_urigroup')); ?>:</b>
	<?php echo CHtml::encode($data->p_urigroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_uri')); ?>:</b>
	<?php echo CHtml::encode($data->p_uri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_title')); ?>:</b>
	<?php echo CHtml::encode($data->p_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_content')); ?>:</b>
	<?php echo CHtml::encode($data->p_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_status')); ?>:</b>
	<?php echo CHtml::encode($data->p_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_pid')); ?>:</b>
	<?php echo CHtml::encode($data->p_pid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_owner_name')); ?>:</b>
	<?php echo CHtml::encode($data->p_owner_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->p_owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->meta_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_css')); ?>:</b>
	<?php echo CHtml::encode($data->p_css); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_js')); ?>:</b>
	<?php echo CHtml::encode($data->p_js); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_url')); ?>:</b>
	<?php echo CHtml::encode($data->p_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_layout')); ?>:</b>
	<?php echo CHtml::encode($data->p_layout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_template')); ?>:</b>
	<?php echo CHtml::encode($data->p_template); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_created')); ?>:</b>
	<?php echo CHtml::encode($data->p_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_updated')); ?>:</b>
	<?php echo CHtml::encode($data->p_updated); ?>
	<br />

	*/ ?>

</div>