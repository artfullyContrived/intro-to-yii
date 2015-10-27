<?php

/**
 * This is the model class for table "twitter_user".
 *
 * The followings are the available columns in table 'twitter_user':
 * @property integer $id
 * @property string $twitter_user_id
 * @property string $screen_name
 * @property string $name
 * @property string $profile_image_url
 * @property string $location
 * @property string $url
 * @property string $description
 * @property string $followers_count
 * @property string $friends_count
 * @property string $statuses_count
 * @property string $time_zone
 * @property string $created_at
 * @property string $modified_at
 *
 * The followings are the available model relations:
 * @property Tweet[] $tweets
 */
class TwitterUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'twitter_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('twitter_user_id, screen_name, modified_at', 'required'),
			array('twitter_user_id', 'length', 'max'=>20),
			array('screen_name, name, profile_image_url, location, url, description, time_zone', 'length', 'max'=>255),
			array('followers_count, friends_count, statuses_count', 'length', 'max'=>10),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, twitter_user_id, screen_name, name, profile_image_url, location, url, description, followers_count, friends_count, statuses_count, time_zone, created_at, modified_at', 'safe', 'on'=>'search'),
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
			'tweets' => array(self::HAS_MANY, 'Tweet', 'twitter_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'twitter_user_id' => 'Twitter User',
			'screen_name' => 'Screen Name',
			'name' => 'Name',
			'profile_image_url' => 'Profile Image Url',
			'location' => 'Location',
			'url' => 'Url',
			'description' => 'Description',
			'followers_count' => 'Followers Count',
			'friends_count' => 'Friends Count',
			'statuses_count' => 'Statuses Count',
			'time_zone' => 'Time Zone',
			'created_at' => 'Created At',
			'modified_at' => 'Modified At',
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
		$criteria->compare('twitter_user_id',$this->twitter_user_id,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('profile_image_url',$this->profile_image_url,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('followers_count',$this->followers_count,true);
		$criteria->compare('friends_count',$this->friends_count,true);
		$criteria->compare('statuses_count',$this->statuses_count,true);
		$criteria->compare('time_zone',$this->time_zone,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('modified_at',$this->modified_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TwitterUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
