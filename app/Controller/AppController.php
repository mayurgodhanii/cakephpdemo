<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
        public $components = array('Session', 'Cookie',
            'Auth' => array(
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'username')
                    )
                )
            )

            ,'Mailer');

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

        public function beforeFilter(){
            $this->Auth->allow('forgot_password','reset_password','register','index','contactus');
            if($this->Auth->user('id') != ''){
            $user = $this->Auth->user();
            $this->set('data',$user);
        }
        $this->Auth->authenticate = array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'password'),
            ));
        }
    }
