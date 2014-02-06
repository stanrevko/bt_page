<div class="row">
    <?php 
    echo $form->textArea(
                $model, 
                'p_js', 
                array(
                    'rows' => 6, 
                    'cols' => 50,
                    'placeholder'=>'Введите js-код без тегов <script>'
                )
            );
    ?>
    <?php echo $form->error($model, 'p_js'); ?>
</div>