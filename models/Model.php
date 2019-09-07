<?php namespace Fytinnovations\StoreManagement\Models;

use Model as BaseModel;

/**
 * Extending the base Plugin Model.
 */
class Model extends BaseModel
{
      public function beforeUpdate(){
         //Detect change in the published value
         if($this->is_published!= $this->original['is_published']){

            if($this->is_published){
                $this->publishChildren();
            }else{
                $this->unPublishChildren();
            }   
         }
      }

      /**
       * Publish all childrens of the root node
       *
       * @return void
       */
      private function publishChildren(){
          //Loop through child nodes and publish them if they exists
          foreach ($this->getAllChildren() as $child) {
            //publish the child only if it is not published
            if(!$child->is_published){
                $child->is_published=true;
                $child->save();
            }  
        }
      }

      /**
       * Unpublish all childrens of the root node
       *
       * @return void
       */
      private function unPublishChildren(){
          //Loop through child nodes and unpublish them if they exists
          foreach ($this->getAllChildren() as $child) {
            //Unpublish the child only if it is published
             if($child->is_published){
                 $child->is_published=false;
                 $child->save();
             }
        }
      }
}
