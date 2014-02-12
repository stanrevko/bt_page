<?php

class BtPageModule extends CWebModule {

    public $side = 'admin';
    public $layotsPath;
    
    public function init() {
        $this->setImport(array(
            'btpage.models.*',
            'btpage.components.*',
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
            $dir_path = parent::getViewPath().DIRECTORY_SEPARATOR.'front'.DIRECTORY_SEPARATOR.'page';
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
                            $file_name = substr($file, 0, strlen($file)-4);
                            $files[$file_name] = $file_name;
                        } elseif ($file != '.' and $file != '..') {
                            $sub_dir_path = $dir_path.DIRECTORY_SEPARATOR.$file;
                            if (is_dir($sub_dir_path)) {
                                $sub_files = array();
                                $sub_entries = scandir($sub_dir_path);
                                if ($sub_entries) {
                                    foreach ($sub_entries as $sub_entry) {
                                        if (substr($sub_entry, -4) === '.php') {
                                            $file_name = substr($sub_entry, 0, strlen($sub_entry)-4);
                                            $sub_files[$file_name] = $file_name;
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


    public static function getTreeData() {
        $raw_data = Yii::app()->db->createCommand('SELECT p_id, p_pid, p_url, p_uri, p_title FROM '.  self::$tableName)->queryAll();

        $page_id_index = array();
        $page_tree_root = array();
        
        foreach ($raw_data as $raw_row) {
            $page_id_index[$raw_row['p_id']] = $raw_row;
          //  $page_url_index[$raw_row['p_url']] = $raw_row;
        }
        
        
        foreach ($page_id_index as $row) {
            if (!$row['p_pid']) {
                $page_tree_root[] = &$page_id_index[$row['p_id']];
            } else {
                $page_id_index[$row['p_pid']]['children'][] = &$page_id_index[$row['p_id']];
            }
        }
       // var_dump($page_id_index);
        //dis@ добавить кеширование...............
        return $page_tree_root;
    }
}
