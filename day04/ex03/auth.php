<?php

function auth($login, $passwd){

    if (!$login || !$passwd) {
        return false;
    }

    $file = '../private/passwd';
    $serialized_data = file_get_contents($file);
    $not_serialized_data = unserialize($serialized_data);

    for ($i = 0; $i < count($not_serialized_data); $i++){
        if ($not_serialized_data[$i]['login'] === $login){
            if ($not_serialized_data[$i]['passwd'] === hash('Whirlpool', $passwd)){
                return (true);
            }
            else {
                return (false);
            }
        }
    }
    return (false);
}

?>