<?php
class Coupon extends AppModel {

    public $validate =array(
        'name' =>array(
            
            'isUnique' => array(

                'rule' => array('isUnique'),

                'on' => 'create',

                'message' => 'Coupon Name is already Exists! Please enter a different Coupon Name.'

                 )
            ),

        'user_id' =>array(
            'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'Please Select Any Field',
             'allowEmpty' => false
                ),
            ),

        'amount' =>array(
            'required' => array(
            'rule' => array('numeric'),
            'message' => 'Amount must be numeric',
             'allowEmpty' => false
                ),
            ),

        'discount' =>array(
            'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'Please Select Any Field',
             'allowEmpty' => false
                ),
            ),

        'product_id' =>array(
            'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'Please Select Any Field',
             'allowEmpty' => false
                ),
            ),

        'category_id' =>array(
            'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'Please Select Any Field',
             'allowEmpty' => false
                ),
            ),

        'usage_per_limit' =>array(
            'required' => array(
            'rule' => array('numeric'),
            'message' => 'Limit must be numeric',
             'allowEmpty' => false
                ),
            ),

        'usage_per_user' =>array(
            'required' => array(
            'rule' => array('numeric'),
            'message' => ' enter a Usage per User',
             'allowEmpty' => false
                ),
            ),
        );




 function activedeactive($id) {
        $this->id = $id;
        $coupon = $this->read(null, $id);
        if ($coupon['Coupon']['active'] == 1) {
            $this->saveField('active', 0);
        } else {
            $this->saveField('active', 1);
        }

        return ($coupon['Coupon']['active'] == 1) ? 0 : 1;
    }

    function activedelete($id) {

        $this->id = $id;

        $coupon = $this->read(null, $id);

        if ($coupon['Coupon']['is_delete'] == 1) {

            $this->saveField('is_delete', 0);

        } else {

            $this->saveField('is_delete', 1);

        }



        return ($coupon['Coupon']['is_delete'] == 1) ? 0 : 1;

    }

function deleteCoupon($id) {
        $this->id = $id;
        $this->delete($id, true);
        return true;
    }

    
}?>