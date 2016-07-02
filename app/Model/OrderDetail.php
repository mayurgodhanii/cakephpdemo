<?php
class OrderDetail extends AppModel{
public $belongsTo = array(
	'Product'=>array(
                          'className'=>'Product',
                         'conditions' => array('Product.id=OrderDetail.product_id')
                        )
	);
	
}?>