<?php
    // sesion mỗi lần chuyển kênh phải gọi lại nó 
    $_SESSION['error'] = [];
    function validate($userName,$email,$address,$phone,$gender){
        $regexPhone = '/^[0-9]{1,11}$/';
        if ($userName == NULL || $userName == '') {
            $_SESSION['error']['username'] = 'User cannot be empty';
        }
        if ($email == NULL || $email == '') {
            $_SESSION['error']['email']  = 'Email cannot be empty';
        }
        
        if ($address == NULL || $address == '') {
            $_SESSION['error']['address']  = 'Address cannot be empty';
        }
        if($phone == NULL || $phone == ''){
            $_SESSION['error']['phone'] = 'Phone cannot be empty';
        }
        if($phone != NULL && !preg_match($regexPhone,$phone)){
            $_SESSION['error']['phone'] = 'Phone Invalid';
        }
        if ($gender == NULL || $gender == '') {
            $_SESSION['error']['gender']  = 'User cannot be empty';  
        }

        if ($userName == NULL || $userName == '') {
            $_SESSION['error']['username'] = 'User cannot be empty';
        } else if ($email == NULL || $email == '') {
            $_SESSION['error']['email']  = 'Email cannot be empty';
        } else if ($address == NULL || $address == '') {
            $_SESSION['error']['address']  = 'Address cannot be empty';
        } else if ($phone == NULL || $phone == '') {
            $_SESSION['error']['phone']  = 'Phone cannot be empty';
        } else if ($gender == NULL || $gender == '') {
            $_SESSION['error']['gender']  = 'Gender cannot be empty';
        }
    }
?>