<?php

class ViewController extends BtPageAdminController {

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionIndex($id) {
        $this->module->side = 'front';
        
        $model = $this->loadModel($id);
        
        $this->title = $model->meta_title;
        $this->description = $model->meta_description;
        $this->keywords = $model->meta_keywords;
        $this->layout = $model->p_layout;
        $template = $model->p_template;
        
        $this->render($template, array(
            'model' => $model,
        ));
    }

}
