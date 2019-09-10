<?php namespace Fytinnovations\StoreManagement\Models;

use Model as BaseModel;
use ApplicationException;
use Lang;
/**
 * Extending the base Plugin Model.
 */
class Model extends BaseModel
{
   protected function beforeUpdate(){
       // Detecting change in the is_published field
       if($this->is_published !=$this->original['is_published']){
            if($this->is_published){
                if(method_exists($this,'getAllChildren')){
                    $this->publishChildren();
                }
                //publish the main model
                $this->publishModel(); 
            }else{
                if(method_exists($this,'getAllChildren')){
                    $this->unPublishChildren();
                }
                //publish the main model
                $this->unPublishModel(); 
            }
       }
   }

   private function publishChildren(){
        //Loop through child nodes and publish them
        foreach ($this->getAllChildren() as $child) {
            $this->publishModel($child);
        }
   }

   private function publishModel($model=null){
        if($model){
            $model->is_published=true;
            $model->save();
        }else{
            $this->is_published=true;
        }
   }

   private function unpublishChildren(){
        //Loop through child nodes and unpublish them
        foreach ($this->getAllChildren() as $child) {
            $this->unPublishModel($child);
        }
    }

    private function unPublishModel($model=null){
        if($model){
            $model->is_published=false;
            $model->findIfAttached($model);
            $model->save();
        }else{
            $this->findIfAttached($this);
            $this->is_published=false;
        }
    }

    private function findIfAttached($model){
        foreach ($model->hasMany as $key => $value) {
            if($model->$key->count()>0 && $key!="children"){
                $entities=$model->$key;
                foreach ($entities as $key => $value) {
                   if($value->is_published){
                    throw new ApplicationException(Lang::get('fytinnovations.storemanagement::lang.form.unable_to_unpublish_selected'));
                   }
                }    
            }
        }
    }
}
