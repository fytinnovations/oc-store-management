<?php namespace Fytinnovations\StoreManagement\Controllers;

use BackendMenu;
use Backend\Classes\Controller as BackendController;
use Flash;
use Lang;
use ApplicationException;
/**
 * Extending the base Plugin Controller.
 */
class Controller extends BackendController
{
    /**
     * Holds the reference of model Class Name
     *
     * @var string
     */
    private $modelClass;

    public function __construct(){
        parent::__construct();
        $this->addCss('/plugins/fytinnovations/storemanagement/assets/css/backend.css');
        $this->modelClass= $this->listGetConfig($this->primaryDefinition)->modelClass;
    }

    protected function onPublish() {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (!$object = $this->modelClass::find($objectId))
                    continue;

                $object->is_published=true;    
                $object->save();
            }
            Flash::success(Lang::get('fytinnovations.storemanagement::lang.form.published_selected'));
        }
        return $this->listRefresh();
    }

    protected function onUnPublish() {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            try {
                foreach ($checkedIds as $objectId) {
                    if (!$object = $this->modelClass::find($objectId))
                        continue;
                    $object->is_published=false;    
                    $object->save(); 
                }
                Flash::success(Lang::get('fytinnovations.storemanagement::lang.form.unpublished_selected'));
            } catch (ApplicationException $e) {
                Flash::error($e->getMessage());
            }
        }
        return $this->listRefresh();
    }

}
