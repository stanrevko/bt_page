<?php
/**
 * This is the model class for table "page".
 *
 * The followings are the available columns in table 'page':
 * @property string $p_id
 * @property string $p_urigroup
 * @property string $p_uri
 * @property string $p_title
 * @property string $p_content
 * @property integer $p_status
 * @property string $p_pid
 * @property string $p_owner_name
 * @property string $p_owner_id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $p_css
 * @property string $p_js
 * @property string $p_url
 * @property string $p_layout
 * @property string $p_template
 * @property string $p_created
 * @property string $p_updated
 */
class Page extends CActiveRecord {
    
    public $parent_url;
    private static  $tableName='{{btpage}}';


    protected $old_url = '';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return self::$tableName;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_uri, p_title, p_content, p_status, p_layout, p_template', 'required'),
			array('p_status', 'numerical', 'integerOnly'=>true),
			array('p_uri, p_title, p_owner_name, meta_title, p_url, p_layout, p_template', 'length', 'max'=>255),
			array('p_pid, p_owner_id', 'length', 'max'=>10),
			array('meta_description, meta_keywords, p_css, p_js', 'safe'),
			array('p_uri', 'match', 'pattern'=>'/^[a-zA-Z0-9\-_]+$/'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('p_id, p_uri, p_title, p_content, p_status, p_pid, p_owner_name, p_owner_id, meta_title, meta_description, meta_keywords, p_css, p_js, p_url, p_layout, p_template, p_created, p_updated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'parent' => array(self::BELONGS_TO, 'Page', 'p_pid'),
                    'children' => array(self::HAS_MANY, 'Page', 'p_pid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'p_id' => 'id',
			'p_uri' => 'uri',
			'p_title' => 'Заголовок',
			'p_content' => 'Содержание',
			'p_status' => 'Статус',
			'p_pid' => 'Родительская страница',
			'p_owner_name' => 'Класс автора',
			'p_owner_id' => 'id автора',
			'meta_title' => 'Title',
			'meta_description' => 'Description',
			'meta_keywords' => 'Keywords',
			'p_css' => 'Css-код',
			'p_js' => 'Js-код',
			'p_url' => 'Url',
			'p_layout' => 'Layout',
			'p_template' => 'Template',
			'p_created' => 'Дата создания',
			'p_updated' => 'Дата изменения',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('p_id',$this->p_id,true);
		$criteria->compare('p_uri',$this->p_uri,true);
		$criteria->compare('p_title',$this->p_title,true);
		$criteria->compare('p_content',$this->p_content,true);
		$criteria->compare('p_status',$this->p_status);
		$criteria->compare('p_pid',$this->p_pid,true);
		$criteria->compare('p_owner_name',$this->p_owner_name,true);
		$criteria->compare('p_owner_id',$this->p_owner_id,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('p_css',$this->p_css,true);
		$criteria->compare('p_js',$this->p_js,true);
		$criteria->compare('p_url',$this->p_url,true);
		$criteria->compare('p_layout',$this->p_layout,true);
		$criteria->compare('p_template',$this->p_template,true);
		$criteria->compare('p_created',$this->p_created,true);
		$criteria->compare('p_updated',$this->p_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeSave() {
            if (parent::beforeSave()) {
                //формируем url
                $this->old_url = $this->p_url;
                $parent_url = $this->parent->p_url ? $this->parent->p_url.'/' : '';
                $this->p_url = $parent_url.$this->p_uri;
                
                //проверим уникальность url
                $sql = 'SELECT COUNT(*) FROM {{'.$this->tableName().'}} WHERE p_url="'.$this->p_url.'"';
                if (!$this->isNewRecord)
                    $sql .= ' AND p_id<>'.$this->p_id;
                return !Yii::app()->db->createCommand($sql)->queryScalar();
            } else {
                return false;
            }
        }
        
        public function afterSave() {
            //если изменился url, обновляем потомков
            $old_url_len = strlen($this->old_url);
            $sql = 'UPDATE {{'.$this->tableName().'}} SET p_url=CONCAT("'.$this->p_url.'",SUBSTRING(p_url,'.$old_url_len.'))';
            $sql .= 'WHERE LEFT(url, '.$old_url_len.')="'.$this->old_url.'"';
            
        }
        /*
        public function getAllChildren() {
            
        }*/
    public function behaviors() {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'p_created',
                'updateAttribute' => 'p_updated',
            )
        );
    }
    
    public function getStatusArray() {
        return array(
            0 => 'не опубликовано',
            1 => 'опубликовано',
        );
    }

    public static function getTreeData() {
        $raw_data = Yii::app()->db->createCommand('SELECT p_id, p_pid, p_url, p_uri, p_title FROM '.  self::$tableName)->queryAll();

        $page_url_index = array();
        $page_id_index = array();
        $page_tree_root = array();
        
        foreach ($raw_data as $raw_row) {
            $raw_row['id'] = $raw_row['p_id'];
            $raw_row['text'] = '<div class="tree_item" id="id'.$raw_row['p_id'].'" >'.$raw_row['p_title'].'</div>';
            //$raw_row['htmlOptions'] = array('title'=>$raw_row['p_uri']);
            
            $page_id_index[$raw_row['p_id']] = $raw_row;
          //  $page_url_index[$raw_row['p_url']] = $raw_row;
        }
        
        
        foreach ($page_id_index as $row) {
            if (!$row['p_pid']) {
                $page_tree_root[] = &$page_id_index[$row['p_id']];
            } else {
                $page_id_index[$row['p_pid']]['children'][] = &$page_id_index[$row['p_id']];
                $page_id_index[$row['p_pid']]['hasChildren'] = true;
            }
        }
       // var_dump($page_id_index);
        return $page_tree_root;
    }
    
    public function getParentUrl() {
        if ($this->p_pid)
            return $this->parent->p_url;
        else
            return null;
    }
}