<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property string $shortname
 * @property string $fullname
 * @property integer $status
 * @property string $role
 * @property string $phone
 * @property string $vk
 * @property string $referer
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shortname, fullname, status, role, phone, vk, referer', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('shortname', 'length', 'max'=>15),
			array('fullname', 'length', 'max'=>100),
			array('role', 'length', 'max'=>10),
			array('phone, vk, referer', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, shortname, fullname, status, role, phone, vk, referer', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'shortname' => 'Shortname',
			'fullname' => 'Fullname',
			'status' => 'Status',
			'role' => 'Role',
			'phone' => 'Phone',
			'vk' => 'Vk',
			'referer' => 'Referer',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('shortname',$this->shortname,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('vk',$this->vk,true);
		$criteria->compare('referer',$this->referer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function primaryKey()
	{
	    return 'id';
	    // Для составного первичного ключа следует использовать массив:
	    // return array('pk1', 'pk2');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
