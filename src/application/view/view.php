<?php

class View
{
    function load($file_name, $data = null)
    {
        // Check for data
        if(is_array($data))
        {
            extract($data);
        }

        include $file_name . '.php';
    }
}

?>