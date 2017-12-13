<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listaSms
 *
 * @author Lucas Simões
 */
class listaSms {
    
    public $agendado = 0;
    
    public $listMsg;
    
    public function __construct(listaMSG $objLista) {
        
        $this->listMsg = $objLista;
        
    }
}
