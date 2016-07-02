<?php

App::uses('Security', 'Utility');
App::uses('Model', 'Model');



class Product extends AppModel{



    public $hasMany = array(

        'ProductImage' => array(

            'className' => 'ProductImage',

            )

        );



    public $hasOne = array(

        'ProductSeller' => array(

            'className' => 'ProductSeller',

            'forignKey' => 'user_id'

            )

        );





    public  $validate = array(

            'name' => array(

             'required' => array(

             'rule' => array('notBlank'),

             'message' => 'Error: Please Enter Product Name'

                ),

                'isUnique' => array(

                'rule' => array('isUnique'),

                'message' => 'Product Name is already Exists! Please enter a different Product Name.'

                 )

            ),   



            'category_id' =>array(

            'required' => array(

            'rule' => array('notBlank'),

            'message' => 'Error: Please Select Category'

                 ),

            ),



            'sku' =>array(

            'required' => array(

            'rule' => array('notBlank'),

            'message' => 'Error: Please enter a SKU'

                ),

            )

            );









 function activedeactive($id) {

        $this->id = $id;

        $product = $this->read(null, $id);

        if ($product['Product']['active'] == 1) {

            $this->saveField('active', 0);

        } else {

            $this->saveField('active', 1);

        }



        return ($product['Product']['active'] == 1) ? 0 : 1;

    }

function activedelete($id) {

        $this->id = $id;

        $product = $this->read(null, $id);

        if ($product['Product']['is_delete'] == 1) {

            $this->saveField('is_delete', 0);

        } else {

            $this->saveField('is_delete', 1);

        }



        return ($product['Product']['is_delete'] == 1) ? 0 : 1;

    }



function deleteproduct($id) {

        $this->id = $id;

        $this->delete($id, true);

        return true;

    }



}?>