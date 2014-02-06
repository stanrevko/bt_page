<?php

class BtPageModule extends CWebModule {

    public $side = 'admin';
    public $layotsPath;
    
    public function init() {
        $this->setImport(array(
            'btPage.models.*',
            'btPage.components.*',
        ));
    }

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
	}
        
        public function getControllerPath() {
            return parent::getControllerPath().DIRECTORY_SEPARATOR.($this->side == 'admin' ? 'admin' : 'front');
        }
        
        public function getViewPath() {
            return parent::getViewPath().DIRECTORY_SEPARATOR.($this->side == 'admin' ? 'admin' : 'front');
        }
        
        public function getLayoutArray() {
            $dir_path = parent::getViewPath().DIRECTORY_SEPARATOR.'front'.DIRECTORY_SEPARATOR.'layouts';
            return $this->getPhpFiles($dir_path);
        }
        
        public function getTemplateArray() {
            $dir_path = parent::getViewPath().DIRECTORY_SEPARATOR.'front';
            return $this->getPhpFiles($dir_path);
        }
        
        /*
         * 
         */
        protected function getPhpFiles($dir_path) {
            $files = array();
            if (is_dir($dir_path)) {
                $dir = opendir($dir_path);
                if ($dir) {
                    while (true) {
                        $file = readdir($dir);
                        if ($file === false)
                            break;
                        if (substr($file, -4) === '.php') {
                            $filelist[$file] = substr($file, 0, strlen($file)-4);;
                        } elseif ($file != '.' and $file != '..') {
                            $sub_dir_path = $dir_path.DIRECTORY_SEPARATOR.$file;
                            if (is_dir($sub_dir_path)) {
                                $sub_files = array();
                                $sub_entries = scandir($sub_dir_path);
                                if ($sub_entries) {
                                    foreach ($sub_entries as $sub_entry) {
                                        if (substr($sub_entry, -4) === '.php') {
                                            $sub_files[$file.DIRECTORY_SEPARATOR.$sub_entry] = substr($sub_entry, 0, strlen($sub_entry)-4);
                                        }
                                    }
                                }
                                if ($sub_files) {
                                    $files[$file] = $sub_files;
                                }
                            }
                        }
                    }
                }
            }
            
            return $files;
        }
}
