<?php
class OrdersController extends AppController {
 public function admin_order(){
        $this->layout ='admin';
        $this->loadModel('Order');
        $this->loadModel('Product');
        $this->loadModel('UserAddress');         
        $data=$this->Order->find('all',array('conditions' => array('Order.is_delete' => 0)));    
        $this->set('order', $data);
       
    }

    public function uplaodfiles($upload_files, $path) {
        $fileName = "";
        if (!empty($upload_files['name'])) {
            $uploadPath = WWW_ROOT . $path;
            $time = date('ymdHis');
            $fileName = $upload_files['name'];
            $fileName = $time . "_" . $fileName;
            $full_image_path = $uploadPath . '/' . $fileName;
            move_uploaded_file($upload_files['tmp_name'], $full_image_path);
        }
        return $fileName;
    }

    public function admin_editorder($id = null ){
        $this->layout ='admin';
        $this->loadModel('Order');
        $this->loadModel('OrderDetail');   
        $Order = $this->Order->findById($id);  
        if (!$this->request->data) {

            $this->request->data = $Order;             
        }
        if ($this->request->is(array('post', 'put'))) {      
            $this->Order->id = $this->request->data['Order']['id'];

            if ($this->Order->saveAssociated($this->request->data)) {
                return $this->redirect(array('action'=>'order'));
            }        
        }
    }

    public function admin_deleteOrder($id = null ){
        $this->loadModel('Order');
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid Product'));
        }
        $status = $this->Order->deleteOrder($id);
         $this->Session->setFlash("Order Successfully Deleted");
        $this->redirect($this->referer());
    }

    public function admin_delete($id = null) {
        $this->loadModel('Product');
        if($this->Product->findById($id)){
            $product= $this->Product->updateAll(array('Product.is_delete'=>1),array('Product.id'=>$id));
            $this->Session->setFlash('Product Deleted successfully', 'default');
            $this->redirect(array('action'=>'product'));
        }else{
            $this->Session->setFlash('Product not found', 'default');
        }
    }

      public function admin_activedeactiveorder($id = null) {
        $this->loadModel('Order');
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid Product'));
        }
        $status = $this->Order->activedeactive($id);
        echo $status;
        exit;
    }


}
?>
