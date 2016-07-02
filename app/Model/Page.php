<?php
class Page extends AppModel{
 
 function activedeletepage($id) {
        $this->id = $id;
        $page = $this->read(null, $id);
        if ($page['Page']['is_delete'] == 1) {
            $this->saveField('is_delete', 0);
        } else {
            $this->saveField('is_delete', 1);
        }

        return ($page['Page']['is_delete'] == 1) ? 0 : 1;
    }
}

?>