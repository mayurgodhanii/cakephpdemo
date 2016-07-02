<?php
class SettingsController extends AppController{

	public function admin_pagecontent(){
		$this->loadModel('Page');
		$this->layout ='admin';
		$data = $this->Page->find('all');
		$this->set('pages',$data);

	}

	public function admin_editpagecontent($id){
		$this->layout ='admin';
		$this->loadModel('Page');
		$page = $this->Page->find('first', array('conditions' => array('Page.id' => $id)));
    	if($this->request->data)
   	    {
	      if($this->Page->save($this->request->data)){
	        $this->Session->setFlash('Page edit Successfully');
	        $this->redirect(array('action' => 'pagecontent'));
           }
        }
    	$this->request->data = $page;
        $this->set('editpagecontent',$page);
	}

	public function admin_social(){
		$this->layout ='admin';	
	}

	public function admin_activedeletepage($id = null) {
        $this->loadModel('Page');
        $this->Page->id = $id;
        if (!$this->Page->exists()) {
            throw new NotFoundException(__('Invalid Page'));
        }
        $status = $this->Page->activedeletepage($id);
        echo $status;
        exit;
    }
}
?>


