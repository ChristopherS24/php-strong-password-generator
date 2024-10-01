
<?
    //Funzione
    function generaPassword($length) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*_+-=;:,.<>?';
        $password = '';
        $caratteriLunghezza = strlen($caratteri);
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $caratteri[rand(0, $caratteriLunghezza - 1)];
        }

        return $password;
    }
?>