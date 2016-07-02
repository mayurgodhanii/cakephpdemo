<?php

class UserAddress extends AppModel {
public $useTable= 'user_addresses';
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'condition' => array('User.id=UserAddress.user_id')

        )
    );

    

}
