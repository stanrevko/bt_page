<?php

class BtPageModule extends CWebModule {

    public function init() {
        echo 1;
        Yii::app()->end();
        $this->setImport(array(
            'btPage.models.*',
            'btPage.components.*',
        ));
    }
/*
	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}*/
}
