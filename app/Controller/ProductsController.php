<?php 
class ProductsController extends AppController{

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
	

	public function admin_product(){
        $this->layout = 'admin';
        $this->loadModel('Product');
        $this->set('product',$this->Product->find('all',array('conditions' => array('Product.is_delete' => 0))));
    }


	public function admin_addproduct(){
        $this->layout = 'admin';
        $path = "upload/product";
        $this->loadModel('Product');
        $this->loadModel('ProductImage');
        $this->loadModel('ProductSeller');
        $this->loadModel('Category');
        $this->loadModel('User');

        $this->set('category',$this->Category->find('list',array('conditions' => array('Category.active' => 1))));
        $this->set('user',$this->User->find('list',array('conditions' => array('User.active' => 1))));
        if($this->request->data){
            $data = $this->request->data;
           if($data['ProductImage']['picture']['0']['name']  != ''){
            unset($this->request->data['ProductImage']);   
            foreach($data['ProductImage']['picture'] as $key => $value){
                $this->request->data['ProductImage'][$key]['picture'] =  $this->uplaodfiles($value,$path);
          }
        }
        else{
            unset($this->request->data['ProductImage']);
         }
        if($this->Product->saveAssociated($this->request->data)){
           $this->redirect(array('action'=>'admin_product'));
            }
        }
    }


    public function admin_editproduct($id = null){
        $this->layout = "admin";
     $path = "upload/product";
     $this->loadModel('Category');
     $this->loadModel('Product');
     $this->loadModel('User');
     $this->set('category',$this->Category->find('list',array('conditions' => array('Category.active' => 1))));
     $this->set('user',$this->User->find('list',array('conditions' => array('User.active' => 1))));

     $product = $this->Product->find('first', array('conditions' => array('Product.id' => $id)));
     if($this->request->data){
         $data = $this->request->data;
            if($data['ProductImage']['picture']['0']['name']  != ''){
            unset($this->request->data['ProductImage']);
            foreach($data['ProductImage']['picture'] as $key=>$value){
                $this->request->data['ProductImage'][$key]['picture'] =  $this->uplaodfiles($value,$path);
            }
        }
        else{
             unset($this->request->data['ProductImage']);
        }
        $this->Product->id = $this->request->data['Product']['id'];
        if($this->Product->saveAssociated($this->request->data)){
                $this->Session->setFlash('Product edited successfully', 'default');
                $this->redirect(array('action'=>'product'));
            }
     }
        $this->request->data = $product;
        $this->set('product',$product);
    }

   

     public function admin_activedeactiveproduct($id = null) {
        $this->loadModel('Product');
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid Product'));
        }
        $status = $this->Product->activedeactive($id);
        echo $status;
        exit;
    }


    public function admin_deleteproduct($id = null) {
        $this->loadModel('Product');
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid Product'));
        }
        $status = $this->Product->activedelete($id);
       $this->Session->setFlash("Product Successfully Deleted");
        $this->redirect($this->referer());
    }


    function checkproduct() {
        $this->layout = false;
        $product = isset($_GET['data']['Product']['name']) ? $_GET['data']['Product']['name'] : "";
        //$this->Product = ClassRegistry::init('Product');
        if (!empty($email)) {
            $data = $this->Product->find('first', array('conditions' => array('Product.name' => $product), 'fields' => 'Product.name'));
            if (empty($data)) {
                echo "true";
            } else {
                echo "false";
            }
        } else {
            echo "false";
        }
        exit;
    }

    public function product(){
        $this->layout = 'front';
        $this->loadModel('ProductSeller');
        $this->loadModel('ProductImage');
        $product = $this->Product->find('all',array('conditions' => array('active' => 1)));
        
        $counter = 0;
        $this->set(compact('product'));
        //$this->set('product',$data);
    }


}