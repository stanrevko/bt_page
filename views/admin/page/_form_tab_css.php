<div class="row">
    <?php echo $form->textArea(
                $model,
                'p_css', array(
                    'rows' => 6, 
                    'cols' => 50, 
                    'placeholder'=>'Введите css-код без тегов <style>'
                )
             ); ?>
    <?php echo $form->error($model, 'p_css'); ?>
</div>