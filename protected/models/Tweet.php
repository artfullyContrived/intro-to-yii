<?php

/**
 * This is the model class for table "tweet".
 *
 * The followings are the available columns in table 'tweet':
 * @property integer $id
 * @property integer $account_id
 * @property string $twitter_user_id
 * @property string $last_checked
 * @property string $tweet_id
 * @property string $tweet_text
 * @property integer $is_rt
 * @property string $created_at
 * @property string $modified_at
 *
 * The followings are the available model relations:
 * @property Account $account
 * @property TwitterUser $twitterUser
 */
class Tweet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tweet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('twitter_user_id, tweet_id, tweet_text, modified_at', 'required'),
			array('account_id, is_rt', 'numerical', 'integerOnly'=>true),
			array('twitter_user_id, tweet_id', 'length', 'max'=>20),
			array('last_checked, created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, account_id, twitter_user_id, last_checked, tweet_id, tweet_text, is_rt, created_at, modified_at', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'Account', 'account_id'),
			'twitterUser' => array(self::BELONGS_TO, 'TwitterUser', 'twitter_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_id' => 'Account',
			'twitter_user_id' => 'Twitter User',
			'last_checked' => 'Last Checked',
			'tweet_id' => 'Tweet',
			'tweet_text' => 'Tweet Text',
			'is_rt' => 'Is Rt',
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
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('twitter_user_id',$this->twitter_user_id,true);
		$criteria->compare('last_checked',$this->last_checked,true);
		$criteria->compare('tweet_id',$this->tweet_id,true);
		$criteria->compare('tweet_text',$this->tweet_text,true);
		$criteria->compare('is_rt',$this->is_rt);
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
	 * @return Tweet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
