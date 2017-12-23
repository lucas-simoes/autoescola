<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author Lucas Simões
 */
class Email {
    
    /*
     * Define o email do destinatário da mensagem
     */
    private $para;
    
    /*
     * Assunto do email
     */
    private $assunto;
    
    /*
     * Mensagem do email
     */
    private $mensagem;
    
    /*
     * Nome do Remetente do Email
     */
    private $nomeRemetente;
    
    /*
     * Email do remetente
     */
    private $emailRemetente;
    
    function __set($name, $value) {
        
        if (strpos($name,'para') !== false) {
            $this->para = $value;
         }  
         
        if (strpos($name,'assunto') !== false) {
           $this->assunto = $value;
        }  
         
        if (strpos($name,'mensagem') !== false) {
           $this->mensagem = $value;
        } 
         
        if (strpos($name,'nomeRemetente') !== false) {
           $this->nomeRemetente = $value;
        } 
        
        if (strpos($name,'emailRemetente') !== false) {
           $this->emailRemetente = $value;
        } 
    }
    
    public function send() {
        
        $to = $this->para;
        $subject = $this->assunto;
        $mensagem = $this->mensagem;
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Title-type: text/html; charset=UT8' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UT8' . "\r\n";
        $headers .= 'From: '. $this->nomeRemetente .' <'. $this->emailRemetente .'>' . "\r\n" .
                'Reply-To: no-reply@cfcalifornia.xyz' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
        return $teste = mail(utf8_decode($to), '=?utf-8?B?'.base64_encode($subject).'?=', utf8_decode($mensagem), utf8_decode($headers));
        
    }
}
