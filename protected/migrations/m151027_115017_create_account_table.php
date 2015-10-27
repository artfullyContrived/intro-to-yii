<?php

class m151027_115017_create_account_table extends CDbMigration {

    protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
    public $tableName='account';

      public function safeUp() {
       
        $this->createTable($this->tableName, array(
            'id' => 'pk',
            'user_id' => 'integer default 0',
            'screen_name' => 'string NOT NULL',
            'oauth_token' => 'string NOT NULL',
            'oauth_token_secret' => 'string NOT NULL',
            'last_checked' => 'TIMESTAMP DEFAULT 0',
            'created_at' => 'DATETIME NOT NULL DEFAULT 0',
            'modified_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                ), $this->MySqlOptions);
    //    $this->addForeignKey('fk_account_user', $this->tableName, 'user_id',  'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown() {
        $this->before();
      //  $this->dropForeignKey('fk_account_user', $this->tableName);
        $this->dropTable($this->tableName);
    }

}
