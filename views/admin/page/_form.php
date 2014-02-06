<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>
<script>
</script>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'page-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <?php
    $this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs' => array(
            'общее' => $this->renderPartial('_form_tab_main', array('model'=>$model, 'form'=>$form), true),
            'js' => $this->renderPartial('_form_tab_js', array('model'=>$model, 'form'=>$form), true),
            'css' => $this->renderPartial('_form_tab_css', array('model'=>$model, 'form'=>$form), true),
            'seo' => $this->renderPartial('_form_tab_seo', array('model'=>$model, 'form'=>$form), true),
            //'StaticTab 2'=>array('content'=>'Content for tab 2', 'id'=>'tab2'),
        ),
        // additional javascript options for the tabs plugin
        'options' => array(
            'collapsible' => true,
        ),
    ));
    ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->