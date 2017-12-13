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

class SMS {
    
    private static $_url = 'http://facilsistemas.com.br/facilsms/index.php/send/';
    
    private static $_MultipleApi = 'smsmultiple';
    
    private static $_SingleApi = 'sms';
    
    public static function sendListSMS(listaSms $objMsg) {
        
        $json = CJSON::encode($objMsg);
        
        $url = self::$_url . self::$_MultipleApi;
        
        $header = array(
            'username: 41218264000101',
            'password: 123456',
        );
        
        ob_start();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_POST, 1               );
        curl_setopt($ch, CURLOPT_URL, $url             );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json     );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header   );

        curl_exec($ch);

        $response_json = ob_get_contents(); 

        ob_end_clean(); 
        curl_close($ch); 
    }
    
    public static function sendSingleSMS(msgSms $objMsg) {
        
        $json = CJSON::encode($objMsg);
        
        $url = self::$_url . self::$_SingleApi;
        
        $header = array(
            'username: 41218264000101',
            'password: 123456',
        );
        
        ob_start();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_POST, 1               );
        curl_setopt($ch, CURLOPT_URL, $url             );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json     );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header   );

        curl_exec($ch);

        $response_json = ob_get_contents(); 

        ob_end_clean(); 
        curl_close($ch); 
        
    }
}
