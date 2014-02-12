<?php

class CreateController extends BtPageAdminController {

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionIndex() {
        $model = new Page;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Page'])) {
            $model->attributes = $_POST['Page'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->p_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }
}
