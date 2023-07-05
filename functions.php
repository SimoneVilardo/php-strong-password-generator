<?php
    function passRandom() {
        if (isset($_GET['password'])){
            
            $passwordLength = intval($_GET['password']);
            
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!$%&?';
    
            $pass = array(); 
    
            $alphaLength = strlen($alphabet) - 1; 
    
            for ($i = 0; $i < $passwordLength; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
    
            // converte l'array in una stringa
            return implode($pass); 

        }
        
        return '';
    }
?>