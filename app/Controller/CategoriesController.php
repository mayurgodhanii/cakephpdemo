<?php
class CategoriesController extends AppController{


	public function admin_category(){
		$this->layout = 'admin';
		$this->loadModel('Category');
        $this->Category->virtualFields['parant_name'] = '(select name from categories where id = Category.parent_id)';
        $category = $this->Category->find('all',array('fields'=>array('Category.parent_id','Category.*'),'conditions' => array('is_delete' => 0)));
        $this->set('category',$category);
	}

	public function admin_addcategory(){
		$this->layout = 'admin';
		$this->set('category',$this->Category->find('list',array('conditions' => array('active' => 1))));
		if($this->request->data){
			/*echo "<pre>";
			print_r($this->request->data);
			exit;*/
			if($this->Category->save($this->request->data)){
				//$this->Session->setFlash(__("Category Successfully Added"));
				$this->redirect(array('action' => 'category'));
			}
		}
	}

	public function admin_editcategory($id = null){
		$this->layout = 'admin';
    $this->loadModel('Category');
    $data = $this->Category->find('list');
    foreach($data as $key => $value){
        if($key == $id){
        unset($data[$key]);
        }
    }
    $this->set('category',$data);
    $category = $this->Category->find('first', array('conditions' => array('Category.id' => $id)));
    if($this->request->data)
    {
        if($this->Category->save($this->request->data)){
            $this->Session->setFlash('Category edit Successfully');
            $this->redirect(array('action' => 'category'));
        }
    }
    $this->request->data = $category;
        $this->set('editcategory',$category);

    }

    public function admin_activedeactivecategory($id = null) {
        $this->loadModel('Category');
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            throw new NotFoundException(__('Invalid Category'));
        }
        $status = $this->Category->activedeactive($id);
        echo $status;
        exit;
    }
    public function admin_deletecategory($id = null) {
        $this->loadModel('Category');
        $this->Category->id = $id;
        if (!$this->Category->exists()) {
            throw new NotFoundException(__('Invalid Category'));
        }
        $status = $this->Category->activedelete($id);
        $this->Session->setFlash("Category Successfully Deleted");
        $this->redirect($this->referer());
    }
}?>

