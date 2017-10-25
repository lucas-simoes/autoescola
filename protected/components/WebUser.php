<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author Thallys
 */
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->getNome
  public function getNome(){
    $user = $this->loadUser(Yii::app()->user->name);
    return isset($user->nome) ? $user->nome : $user->first_name . ' ' . $user->last_name;
  }

  
  // Load user model.
  protected function loadUser($login=null)
    {
        if($this->_model===null)
        {
            if($login!==null) {
                $criteria = new CDbCriteria();
                $criteria->condition = 'login=:login';
                $criteria->params = array(':login'=>$login);
                $this->_model= usuarios::model()->find($criteria);
                
                if (!isset($this->_model)) {
                    $criteria = new CDbCriteria();
                    $criteria->condition = 'username=:username';
                    $criteria->params = array(':username'=>$login);
                    $this->_model= usuarios::model()->find($criteria);
                }
            }
        }
        
        return $this->_model;
    }
}