<?php

function template_generate(){
  
    if ($_POST['type'] == "contactus"){
        
        $template = file_get_contents(__DIR__ ."/../template/template-contactus.html");
        foreach($_POST as $key => $value)
        {
            $template = str_replace('{{ '.$key.' }}', $value, $template);
        }

        return $template;
    }
}
