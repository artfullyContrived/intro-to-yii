<?php

class m151027_120130_create_twitter_user_table extends CDbMigration
{
	 protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
    public $tableName='twitter_user';

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	
            $this->createTable($this->tableName, array(
         'id' => 'pk',
         'twitter_user_id' => 'bigint(20) unsigned NOT NULL',
         'screen_name' => 'string NOT NULL',
         'name' => 'string DEFAULT NULL',
         'profile_image_url' => 'string DEFAULT NULL',
         'location' => 'string DEFAULT NULL',
         'url' => 'string DEFAULT NULL',
         'description' => 'string DEFAULT NULL',
         'followers_count' => 'int(10) unsigned DEFAULT NULL',
         'friends_count' => 'int(10) unsigned DEFAULT NULL',
         'statuses_count' => 'int(10) unsigned DEFAULT NULL',
         'time_zone' => 'string DEFAULT NULL',
         'created_at' => 'DATETIME NOT NULL DEFAULT 0',
         'modified_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
           ), $this->MySqlOptions);
           $this->createIndex('twitter_user_id', $this->tableName , 'twitter_user_id', true);

            
            
        }

	public function safeDown()
	{
                $this->dropTable($this->tableName);
	}
	
}