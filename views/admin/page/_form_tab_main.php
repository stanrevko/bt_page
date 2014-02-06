<div class="row" style="display:inline-block;">
    <?php echo $form->textField($model, 'p_urigroup', array('size' => 20, 'maxlength' => 255, 'placeholder'=>'группа')); ?>
    <?php echo $form->error($model, 'p_urigroup'); ?>
</div>
    
<div class="row" style="display:inline-block;margin-left:10px;">
    <?php echo $form->textField($model, 'p_uri', array('size' => 30, 'maxlength' => 255, 'placeholder'=>'uri')); ?>
    <?php echo $form->error($model, 'p_uri'); ?>
</div>
    
<div class="row" style="display:inline-block;margin-left:10px;">
    <?php echo $form->dropDownList($model, 'p_status', $model->statusArray); ?>
    <?php echo $form->error($model, 'p_status'); ?>
</div>

<div class="row">
    <?php echo $form->textField($model, 'p_title', array('size' => 80, 'maxlength' => 255, 'placeholder'=>'заголовок')); ?>
    <?php echo $form->error($model, 'p_title'); ?>
</div>

<div class="row">
    <?php echo $form->textArea($model, 'p_content', array('rows' => 6, 'cols' => 80, 'placeholder'=>'контент')); ?>
    <?php echo $form->error($model, 'p_content'); ?>
</div>

<div class="row" >
    <?php echo $form->hiddenField($model, 'p_pid', array('id' => 'parent_id')); ?>
    <?php echo $form->textField($model, 'parent_url', array(
                                                    'id' => 'parent_url',
                                                    'size' => 60, 
                                                    'maxlength' => 10, 
                                                    'readonly' => true, 
                                                    'style' => 'float:left;'
        )); ?>
    <?php echo CHtml::button('Выбрать', array('id'=>'choose_parent_button', 'style'=>'float:left;margin-left:10px;')); ?>
    <?php echo $form->error($model, 'p_pid'); ?>
</div>

<div class="row" style="display:inline-block;width:200px;">
    <?php echo $form->dropDownList($model, 'p_layout', $this->module->getLayoutArray(), array('prompt'=>'выберите layout')); ?>
    <?php echo $form->error($model, 'p_layout'); ?>
</div>

<div class="row" style="display:inline-block;margin-left:10px;width:200px;">
    <?php echo $form->dropDownList($model, 'p_template', $this->module->getTemplateArray(), array('prompt'=>'выберите view')); ?>
    <?php echo $form->error($model, 'p_template'); ?>
</div>

<?php
$this->renderPartial('_form_choose_parent', array('model'=>$model, 'parentIdSelector'=>'#parent_id', 'parentUrlSelector'=>'#parent_url', 'buttonSelector'=>'#choose_parent_button'));
?>