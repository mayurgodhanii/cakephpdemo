<?php 

class CouponsController extends AppController
{

        public function admin_coupons(){
        $this->layout ='admin';
        $this->loadModel('Product');
        $this->loadModel('Category');
        $this->loadModel('User');
        $this->loadModel('Coupon');

        $joins = array(
                    array(
                        'table' => 'products',
                        'alias' => 'Product',
                        'type' => 'LEFT',
                        'conditions' => array(
                            'Product.id = Coupon.product_id'
                            )
                        ),
                    array(
                        'table' => 'users',
                        'alias' => 'User',
                        'type' => 'LEFT',
                        'conditions' => array(
                            'User.id = Coupon.user_id'
                            )
                        ),
                    array(
                        'table' => 'categories',
                        'alias' => 'Category',
                        'type' => 'LEFT',
                        'conditions' => array(
                            'Category.id = Coupon.category_id'
                        )
                    )
                );
        $data = $this->Coupon->find('all',array('fields'=>array('Coupon.*','Product.*','User.*','Category.*'),'joins'=>$joins,'conditions' => array('Coupon.is_delete' => 0)));
        $this->set('coupon',$data);

    }

    public function admin_addcoupon(){
        $this->layout ='admin';
        $this->loadModel('Product');
        $this->loadModel('Category');
        $this->loadModel('User');
        $this->loadModel('Coupon');

        $this->set('user',$this->User->find('list',array('conditions' => array('User.active' => 1))));
        $this->set('category',$this->Category->find('list',array('conditions' => array('Category.active' => 1))));
        $this->set('product',$this->Product->find('list',array('conditions' => array('Product.active' => 1))));

        if($this->request->data){
            if($this->Coupon->save($this->request->data)){
                $this->Session->setFlash('Coupon Added Successfully','deafault');
                $this->redirect(array('action' => 'coupons'));
            }
        }
    }

     public function admin_editcoupons($id = null){
        $this->loadModel('Product');
        $this->loadModel('Category');
        $this->loadModel('User');
        $this->loadModel('Coupon');

        $this->set('user',$this->User->find('list'));
        $this->set('category',$this->Category->find('list'));
        $this->set('product',$this->Product->find('list'));

        $coupon = $this->Coupon->find('first',array('conditions' => array('Coupon.id' => $id)));
        if($this->request->data){
            if($this->Coupon->save($this->request->data)){
                $this->Session->setFlash('Coupon Edited Successfully','deafault');
                $this->redirect(array('action' => 'coupons'));
            }
        }
        $this->request->data = $coupon;
        $this->set('coupon',$coupon);
    }
   
     public function admin_activedeactivecoupon($id = null) {
        $this->loadModel('Coupon');
        $this->Coupon->id = $id;
        if (!$this->Coupon->exists()) {
            throw new NotFoundException(__('Invalid Coupon'));
        }
        $status = $this->Coupon->activedeactive($id);
        echo $status;
        exit;
    }

    public function admin_deletecoupon($id = null) {
        $this->loadModel('Coupon');
        $this->Coupon->id = $id;
        if (!$this->Coupon->exists()) {
            throw new NotFoundException(__('Invalid Coupon'));
        }
        $status = $this->Coupon->activedelete($id);
        $this->Session->setFlash("Coupon Successfully Deleted");
        $this->redirect($this->referer());
    }


}