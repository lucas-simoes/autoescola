<?php

/*
 * The MIT License
 *
 * Copyright 2017 Lucas Simões.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Description of WebUser
 *
 * @author Lucas Simões
 */
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->first_name
  public function getNome(){
    $user = $this->loadUser(Yii::app()->user->name);
    return $user->nome;
  }
  
  public function getSenha() {
    $user = $this->loadUser(Yii::app()->user->name);
     return $user->senha;
  }
  
  public function getUserID() {
    $user = $this->loadUser(Yii::app()->user->name);
     return $user->id;
  }
  
  public function getIsAdmin() {
      $user = $this->loadUser(Yii::app()->user->name);
      if (isset($user)) {
          $perfil = ($user->admin == 1)?true:false;
      }
      
      return $perfil;
  }
  
  public function getEmpresa() {
    $user = $this->loadUser(Yii::app()->user->name);
     return $user->empresasId;
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
            }
        }
        return $this->_model;
    }
}
