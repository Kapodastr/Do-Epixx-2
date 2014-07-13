<?php

/**
 * This is the model class for table "solutions".
 *
 * The followings are the available columns in table 'solutions':
 * @property string $id
 * @property integer $taskid
 * @property string $userid
 * @property string $timestarted
 * @property string $timefinished
 * @property string $status
 * @property integer $earned
 * @property string $checkedby
 */
class Solutions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solutions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taskid, earned', 'numerical', 'integerOnly'=>true),
			array('userid', 'length', 'max'=>25),
			array('status', 'length', 'max'=>10),
			array('checkedby', 'length', 'max'=>250),
			array('timestarted, timefinished', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, taskid, userid, timestarted, timefinished, status, earned, checkedby', 'safe', 'on'=>'search'),
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
			'taskid' => 'Taskid',
			'userid' => 'Userid',
			'timestarted' => 'Timestarted',
			'timefinished' => 'Timefinished',
			'status' => 'Status',
			'earned' => 'Earned',
			'checkedby' => 'Checkedby',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('taskid',$this->taskid);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('timestarted',$this->timestarted,true);
		$criteria->compare('timefinished',$this->timefinished,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('earned',$this->earned);
		$criteria->compare('checkedby',$this->checkedby,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function addorupdate($id,$data){
		


	}

	



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solutions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
