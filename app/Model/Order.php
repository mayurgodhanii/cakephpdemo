<?php
class Order extends AppModel{
	public $belongsTo = array(
                        'User'=>array(
                          'className'=>'User',
                          'foreignKey'=>'user_id',
                        ),

                        'Coupon'=>array(
                          'className'=>'Coupon',
                           'conditions' => array('Coupon.id=Order.coupon_id')
                        ),
                         'Wrappers'=>array(
                          'className'=>'Wrappers',
                         'conditions' => array('Wrappers.id=Order.wrappers_id')
                        ),
                         'UserAddress'=>array(
                          'className'=>'UserAddress',
                          'foreignKey'=>'address_id',
                          'conditions' => array('UserAddress.id=Order.address_id')

              )
	 	);
  
	 public $hasOne =  array(
	 		'OrderDetail'=>array(
	            'className' => 'OrderDetail',
	            'conditions' => array('OrderDetail.order_id=Order.id')
            ),

       );      
             
  function activedeactive($id) {
        $this->id = $id;
        $order = $this->read(null, $id);
        if ($order['Order']['order_status'] == 1) {
            $this->saveField('order_status', 0);
        } else {
            $this->saveField('order_status', 1);
        }

        return ($order['Order']['order_status'] == 1) ? 0 : 1;
    }   

  function deleteOrder($id) {
        
        $this->id = $id;
        $order = $this->read(null, $id);
        if ($order['Order']['is_delete'] == 1) {
            $this->saveField('is_delete', 0);
        } else {
            $this->saveField('is_delete', 1);
        }

        return ($order['Order']['is_delete'] == 1) ? 0 : 1;
    }                  
    
	 
}	
?>