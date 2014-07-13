<?php

/**
 * This is the model class for table "relations".
 *
 * The followings are the available columns in table 'relations':
 * @property integer $id1
 * @property string $type1
 * @property string $relation
 * @property integer $id2
 * @property string $type2
 * @property string $inline
 */
class Relation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'relations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id1, type1, relation, id2, type2, inline', 'required'),
			array('id1, id2', 'numerical', 'integerOnly'=>true),
			array('type1, type2', 'length', 'max'=>25),
			array('relation', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id1, type1, relation, id2, type2, inline', 'safe', 'on'=>'search'),
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
			'id1' => 'Id1',
			'type1' => 'Type1',
			'relation' => 'Relation',
			'id2' => 'Id2',
			'type2' => 'Type2',
			'inline' => 'Inline',
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

		$criteria->compare('id1',$this->id1);
		$criteria->compare('type1',$this->type1,true);
		$criteria->compare('relation',$this->relation,true);
		$criteria->compare('id2',$this->id2);
		$criteria->compare('type2',$this->type2,true);
		$criteria->compare('inline',$this->inline,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Relation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
