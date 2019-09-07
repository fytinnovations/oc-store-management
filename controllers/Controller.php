<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;
use Backend\Classes\Controller as BackendController;

/**
 * Extending the base Plugin Controller.
 */
class Controller extends BackendController
{
    public function __construct(){
        parent::__construct();
        $this->addCss('/plugins/fytinnovations/storemanagement/assets/css/backend.css');
    }

    public function onPublish() {
        $listConfig = $this->listGetConfig($this->primaryDefinition);
        $model = new $listConfig->modelClass;
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (!$object = $model::find($objectId))
                    continue;
                    
                //Publish only if it is not published
                if(!$object->is_published){
                    $object->is_published=true;
                    $object->save();
                }   
            }
        }
        return $this->listRefresh();
    }

    public function onUnPublish() {
        $listConfig = $this->listGetConfig($this->primaryDefinition);
        $model = new $listConfig->modelClass;
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (!$object = $model::find($objectId))
                    continue;

                //UnPublish only if it is published
                if($object->is_published){
                    $object->is_published=false;
                    $object->save();
                }    
            }
        }
        return $this->listRefresh();
    }
}
