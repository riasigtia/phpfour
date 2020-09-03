<?php
class Data {
    public $menuList;
   function __construct(array $menuList) {
        if (sizeof($menuList)>0) {
            $this->menuList = $menuList;
        } else {
            throw new Exception("No record available");
        }
    }
    public function getitem($id) {
       $response = [];
       if($id) {
            foreach($this->menuList as $menu_items) {
                if ($id == $menu_items['id']) { 
                  $response = $menu_items;
                    break;
               }
            }
        }
        return json_encode($response);
    }
}
?>