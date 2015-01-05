<?php

/**
 * This is the model class for table "data".
 *
 * The followings are the available columns in table 'data':
 * @property integer $primary_key
 * @property string $date
 * @property string $time
 * @property string $gw_id
 * @property integer $location_id
 * @property integer $task_id
 * @property string $reading
 */
class Data extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Data the static model class
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
		return 'data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, time, gw_id, location_id, task_id, reading', 'required'),
			array('location_id, task_id', 'numerical', 'integerOnly'=>true),
			array('gw_id, reading', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('primary_key, date, time, gw_id, location_id, task_id, reading', 'safe', 'on'=>'search'),
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
			'primary_key' => 'Primary Key',
			'date' => 'Date',
			'time' => 'Time',
			'gw_id' => 'Gw',
			'location_id' => 'Location',
			'task_id' => 'Task',
			'reading' => 'Reading',
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

		$criteria->compare('primary_key',$this->primary_key);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('gw_id',$this->gw_id,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('task_id',$this->task_id);
		$criteria->compare('reading',$this->reading,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}