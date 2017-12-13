<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listaMSG
 *
 * @author Lucas Simões
 */
class listaMSG {
    
    public $items = array();
    
    public function setLista(msgSms $value) {    
        
       array_push($this->items, $value);
       
    }
}
