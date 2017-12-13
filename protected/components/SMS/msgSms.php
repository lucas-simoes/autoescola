<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of msgSms
 *
 * @author Lucas Simões
 */

class msgSms {
   
    /*
     * CNPJ cadastrado no Web Services da Fácil
     */
    public $cnpjConta;
    
    /*
     * CNPJ da empresa que está enviando o SMS
     */
    public $cnpjEmpresa;
    
    /*
     * Senha para acessar a conta no Web Services da Fácil
     */
    public $senha;
    
    /*
     * Mensagem a ser enviada
     */
    public $msg;
    
    /*
     * Celular do destinatário no formato DDI + DDD + CELULAR
     */    
    public $celular;
    
    /*
     * Data da mensagem. Em caso de mensagem agendada para envio posterior
     * deve ser informada data para envio da mensagem
     */
    public $data;
   
    /*
     * Código de referencia externa para possíveis atualizações de status 
     * da mensagem
     */
    public $refExterna;
    
    function __set($name, $value) {
        
        if (strpos($name,'msg') !== false) {
            $this->msg = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($value)));
          }        
    }
    
}
