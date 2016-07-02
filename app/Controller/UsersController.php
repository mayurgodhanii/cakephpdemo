<?php
class UsersController extends AppController{

    public function login(){
    $this->layout = false;
    if($this->request->is('post')){
        if(!empty($this->request->data)){

            if($this->Auth->login()){                
               $role_id = $this->Auth->user('role_id');
               if($role_id == 1){
                $this->redirect(array('controller' => 'dashboards','action' => 'index','admin' => 'true'));
               }
               if($role_id == 2){
                $this->redirect(array('controller' => 'Users','action' => 'index'));
               }
            }
        }
    }
}
    public function admin_logout(){
        if($this->Auth->logout()){
            $this->redirect('/login');  
        }

    }

     public function logout(){
        if($this->Auth->logout()){
            $this->redirect(array('action' => 'index'));  
        }

    }
   
    public function change_password() {
        if ($this->request->is('post')) {
            $this->request->data['User']['id'] = $this->Auth->user('id');
            if ($this->$this->User->changePassword($this->request->data)) {
                //$this->Session->setFlash(__d('users', 'Password changed.', true), 'default', array('class' => 'alert-box radius success'));
                // we don't want to keep the cookie with the old password around
                $this->RememberMe->destroyCookie();
                $this->redirect('/');
            }
        }
    }

    public function admin_change_password() {
        $this->layout = "admin";

        if ($this->request->is('post')) {
            $this->request->data['User']['id'] = $this->Auth->user('id');
            if ($this->User->changePassword($this->request->data)) {
                //$this->Session->setFlash(__d('users', 'Password changed.', true), 'default', array('class' => 'alert-box radius success'));
                // we don't want to keep the cookie with the old password around
                //$this->User->destroyCookie();
                $this->redirect('/admin/dashboards');
            }
        }
    }


     
    
    public function forgot(){
        $this->layout = false;  
    }

    public function register(){
        $this->layout = false;  
    }

    

    public function admin_adduser() {
        $this->layout = 'admin';
        $path="upload/user_image";
         $this->loadModel('UserAddress');
        $this->loadModel('UserDetail');  
        
        $this->loadModel('Role');
        $this->loadModel('States');       
        
        $title_for_layout = 'Add User';
        $this->set(compact('title_for_layout'));
        $this->set('role',$this->Role->find('list'));
        $this->set('state',$this->States->find('list'));
        if ($this->request->isPut() || $this->request->isPost()) {
            $data = $this->request->data;
            

            $data['User']['picture'] =  $this->uplaodfiles($data['User']['picture'],$path);
            $data['User']['is_delete'] = 1;
            $data['User']['role_id'] = 3;
            $data['User']['email_verified'] = 1;
            $data['User']['active'] = 1;
            $data['User']['slug'] = $data['User']['username']; 
                   
            $this->User->create();
            if ($this->User->validates() &&$this->UserAddress->validates() ){
             
            if ($this->User->add($data)) {
                $this->redirect(array('action' => 'admin_user'));
            } else {
                $this->Session->setFlash("Error occur please try again after sometime.");
            }
            }
            else{
                print_r($this->UserAddress->validationErrors);
            }
        }
    }

    public function admin_myprofile() {
        $this->layout = 'admin';
        $id = $this->Auth->user('id');

        $title_for_layout = 'My Profile';
        $this->set(compact('title_for_layout'));

        if ($this->request->isPut() || $this->request->isPost()) {
            $data = $this->request->data;

            $result = $this->User->edit($id, $data);

            if ($result == 1) {
                $this->Session->write('Auth', $this->User->read(null, $this->Auth->User('id')));
                $this->Session->setFlash(__('Your profile has been updated successfully.'));
                $this->redirect(array('plugin' => false, 'controller' => 'dashboards', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('Your profile could not be updated. Please, try again.'));
                $this->redirect(array('plugin' => false, 'controller' => 'dashboards', 'action' => 'index'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->User->recursive = 1;
            $this->request->data = $this->User->find('first', $options);
        }
    }

    public function admin_user(){
        $this->layout = 'admin';
        $title_for_layout = 'All Users';
        $this->set(compact('title_for_layout'));
        $this->loadModel('User');       
        $this->loadModel('UserAddress');
        $this->loadModel('Role');
        $this->loadModel('UserDetail');  
        $joins = array(
                    array(
                        'table' => 'roles',
                        'alias' => 'Role',
                        'type' => 'LEFT',
                        'conditions' => array(
                            'Role.id = User.role_id'
                        ),
                    ),
                );       
        $data=$this->User->find('all',array('recursive'=> 1,'fields'=>array('User.*','UserAddress.*','UserDetail.*','Role.*' ),'joins'=>$joins,'conditions' => array('User.is_delete' => 0))); 

        /*$data['UserAddress']=$this->UserAddress->find('all');
        $data['UserDetail']=$this->UserDetail->find('all');  */       
        $this->set('user', $data);
    }


    public function admin_edituser($id = nulL) {
        $this->layout ='admin';
        $path="upload/user_image";
        $title_for_layout = 'Edit Customer';
        $this->set(compact('title_for_layout'));
        $this->loadModel('UserAddress');
        $this->loadModel('UserDetail');
        $this->loadModel('State');
         $this->set('state',$this->State->find('list'));
         
        if ($this->request->isPut() || $this->request->isPost()) {
           
            $data = $this->request->data;
          
             if($data['userOld']['img']=='' && $data['User']['picture']['name']!=''){
                $data['User']['picture'] =  $this->uplaodfiles($data['User']['picture'],$path);
                
             }
            elseif($data['User']['picture']['name']!='' && $data['userOld']['img']!=''){
            $data['User']['picture'] =  $this->uplaodfiles($data['User']['picture'],$path);
            $root=WWW_ROOT."upload/user_image/".$data['userOld']['img'];
           }
           else{
            unset($data['User']['picture']); 
           }
//            $data['User']['role_id'] = 3;
//            $data['User']['email_verified'] = 1;
//            $data['User']['active'] = 1;

            $this->User->create();
            
             $this->User->id = $data['User']['id'];

            if ($this->User->saveAssociated($data)) {
                  $this->Session->setFlash("User details has been updated successfully.");
                return $this->redirect(array('action'=>'admin_user'));
            }        
           /* if ($this->User->edit($id, $data)) {
                $this->Session->setFlash("Customer details has been updated successfully.");
                $this->redirect(array('action' => 'customers'));
            }*/ else {
                //$this->Session->setFlash("Error occur please try again after sometime.");
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id),'recursive'=>1);
            $this->request->data = $this->User->find('first', $options);

        }
    }

    public function admin_activedeactiveUser($id = null) {
        $this->loadModel('User');
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid User'));
        }
        $status = $this->User->activedeactiveUser($id);
        echo $status;
        exit;
    }


     public function admin_deleteUser($id = null) {
        $this->loadModel('User');
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid User'));
        }
        $status = $this->User->deleteUser($id);
        echo $status;
        exit;
    }
    public function forgot_password() {
        $this->layout = false;       
        Configure::write('debug',2);
         $this->loadModel('UserToken');
        $timeStr = str_replace("0.", "", microtime());
        $token = str_replace(" ", "", $timeStr);    
              
        
       /* print_r($token);*/
       
        if ($this->request->is('post')) {
            $email = $this->request->data['User']['email'];
            

            $data = $this->User->find('first', array('conditions' => array('email' => $email)));
            
            
            if (!empty($data)) {                
                $url='http://sealpack.in/Users/reset_password/'.$token;
                $tokendata=array();
                $tokendata['user_id']=$data['User']['id'];
                $tokendata['token_value']=$token;
                $tokendata['status']=1;                
                $this->UserToken->create();
                $output=$this->UserToken->save($tokendata); 
                print_r($output);
                exit;               
                $mailer_to = $email;
                $mailer_subject = "New Password Link : Sealpack";
                $mailer_from = 'info@sealpack.in';
                $SiteTeam = 'Sealpack Team';

                $body = "<p>Hello </p>";               
                $body .= "<p>Please Click  this one time link to generate new Password</p>";
                $body .= "<p>Your Link For Reset Password: " . $url . "</p>";
                $body .= "<p>Thank you <br/> " . $SiteTeam . "</p>";

                $this->Mailer->sendMail($mailer_to, $mailer_subject, $mailer_from, $body);
                $this->Session->setFlash('Reset Password email has been sent to your registered email address.');  
                $this->redirect(array('controller'=>'pages','action'=>'index'));  
            } else {
                $this->Session->setFlash('Email address not found');
            }
        }
    }

     public function reset_password($token) {
       Configure::write('debug',2);
        $this->layout = false;
        //$token=$this->parmas->pass[0];
        
          $this->loadModel('UserToken');
        $url=Router::url( $this->here, true );
          
        
       $IsFindToken=$this->UserToken->find('first',array('conditions'=>array('UserToken.token_value'=> $token,'UserToken.status'=> 1),'fields'=>array('UserToken.id','UserToken.user_id','UserToken.token_value')));
        if($IsFindToken){
        
           $this->set('IsFindToken',$IsFindToken);
         
        }
        else{
          
           $this->Session->setFlash('This Link Is Not Available Or Expired.');
            $this->redirect(array('controller'=>'Users','action'=>'login'));
         
        }

      }
      public function new_password($id,$tokenid) {
         Configure::write('debug',2);
           $this->loadModel('UserToken');
        if ($this->request->is('post')) {
            $data=$this->request->data;
            $userdata=array();
           
            $this->UserToken->id=$tokenid;
            $userdata['User']['password']=$data['User']['password'];
            $userdata['User']['id']=$id;
            $userdata['UserToken']['id']=$tokenid;
            $userdata['UserToken']['status']=0;

         $this->UserToken->saveAssociated($userdata) ;
         
           
            $this->Session->setFlash('Your New Password is set Please Login To Continue');
            $this->redirect(array('controller'=>'pages','action'=>'index'));  
            
        }


      }

      public function index(){
        $this->layout ='front';
        $this->loadModel('Product');
        $this->loadModel('ProductSeller');
        $this->loadModel('ProductImage');
        $product = $this->Product->find('all',array('conditions' => array('active' => 1,'account' => 0,'is_delete' => 0)));
        
        $this->set('product',$product);

      }

       public function contactus(){
        $this->layout ='front';


      }

      public function myproducts(){
        $this->layout ='front';
        $this->layout ='front';
        $this->loadModel('Product');
        $this->loadModel('ProductSeller');
        $this->loadModel('ProductImage');
        $product = $this->Product->find('all',array('conditions' => array('active' => 1,'account' => 1,'is_delete' => 0)));
        
        $this->set('product',$product);        
      }

    public function product(){
        
        //$this->set('product',$data);
    }

    public function adduser() {
        $this->layout = 'admin';
        $path="upload/user_image";
         $this->loadModel('UserAddress');
        $this->loadModel('UserDetail');  
        
        $this->loadModel('Role');
        $this->loadModel('States');       
        
        $title_for_layout = 'Add User';
        $this->set(compact('title_for_layout'));
        $this->set('role',$this->Role->find('list'));
        $this->set('state',$this->States->find('list'));
        if ($this->request->isPut() || $this->request->isPost()) {
            $data = $this->request->data;
            
            $data['User']['picture'] =  "admin.jpg";
            $data['User']['is_delete'] = 1;
            $data['User']['role_id'] = 2;
            $data['User']['email_verified'] = 1;
            $data['User']['active'] = 1;
            $data['User']['slug'] = $data['User']['username']; 
                   
            $this->User->create();
            
             
            if ($this->User->add($data)) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("Error occur please try again after sometime.");
            }
            
        }
    }


}

?>