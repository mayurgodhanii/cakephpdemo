<?php
class Category extends AppModel{


	public  $validate = array(
            'name' => array(
             /*'rule' => array('notEmpty'),
             'message' => 'Category Name is already Exists! Please enter a different Category Name.'
                ),*/
                'isUnique' => array(
                'rule' => array('isUnique'),
                'on' => 'create',
                'message' => 'Category Name is already Exists! Please enter a different Category Name.'
                 )
         	   )
            );
         	

    
    function activedeactive($id) {
        $this->id = $id;
        $category = $this->read(null, $id);
        if ($category['Category']['active'] == 1) {
            $this->saveField('active', 0);
        } else {
            $this->saveField('active', 1);
        }
        return ($category['Category']['active'] == 1) ? 0 : 1;
    }

     function activedelete($id) {
        $this->id = $id;
        $category = $this->read(null, $id);
        if ($category['Category']['is_delete'] == 1) {
            $this->saveField('is_delete', 0);
        } else {
            $this->saveField('is_delete', 1);
        }

        return ($category['Category']['is_delete'] == 1) ? 0 : 1;
    }

    function deletecategory($id) {
        $this->id = $id;
        $this->delete($id, true);
        return true;
    }

    function Activecategory($id) {
        $this->id = $id;
        $this->delete($id, true);
        return true;
    }
}?>