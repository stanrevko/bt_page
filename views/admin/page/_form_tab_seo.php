<div class="row">
    <?php echo $form->textField($model, 'meta_title', array('size' => 60, 'maxlength' => 255, 'placeholder'=>'title')); ?>
    <?php echo $form->error($model, 'meta_title'); ?>
</div>

<div class="row">
    <?php echo $form->textArea($model, 'meta_description', array('rows' => 6, 'cols' => 50, 'placeholder'=>'description')); ?>
    <?php echo $form->error($model, 'meta_description'); ?>
</div>

<div class="row">
    <?php echo $form->textArea($model, 'meta_keywords', array('rows' => 6, 'cols' => 50, 'placeholder'=>'keywords')); ?>
    <?php echo $form->error($model, 'meta_keywords'); ?>
</div>
