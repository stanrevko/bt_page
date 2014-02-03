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
class Page extends CActiveRecord
{
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
		return 'page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_uri, p_title, p_content, p_status, p_url, p_layout, p_template, p_created, p_updated', 'required'),
			array('p_status', 'numerical', 'integerOnly'=>true),
			array('p_urigroup, p_uri, p_title, p_owner_name, meta_title, p_url, p_layout, p_template', 'length', 'max'=>255),
			array('p_pid, p_owner_id', 'length', 'max'=>10),
			array('meta_description, meta_keywords, p_css, p_js', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('p_id, p_urigroup, p_uri, p_title, p_content, p_status, p_pid, p_owner_name, p_owner_id, meta_title, meta_description, meta_keywords, p_css, p_js, p_url, p_layout, p_template, p_created, p_updated', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'p_id' => 'P',
			'p_urigroup' => 'P Urigroup',
			'p_uri' => 'P Uri',
			'p_title' => 'P Title',
			'p_content' => 'P Content',
			'p_status' => 'P Status',
			'p_pid' => 'P Pid',
			'p_owner_name' => 'P Owner Name',
			'p_owner_id' => 'P Owner',
			'meta_title' => 'Meta Title',
			'meta_description' => 'Meta Description',
			'meta_keywords' => 'Meta Keywords',
			'p_css' => 'P Css',
			'p_js' => 'P Js',
			'p_url' => 'P Url',
			'p_layout' => 'P Layout',
			'p_template' => 'P Template',
			'p_created' => 'P Created',
			'p_updated' => 'P Updated',
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
		$criteria->compare('p_urigroup',$this->p_urigroup,true);
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
}