<?php

class UserDetail extends AppModel {
  
public $useTable= 'user_details';
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );



}
