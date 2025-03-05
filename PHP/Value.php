<?php
ini_set('default_charset','UTF-8');
class Value{  
    function ValueNome($GetNome){
        echo htmlspecialchars($GetNome);
     }
     function valueEmail($GetEmail){
        echo htmlspecialchars($GetEmail);
     }
 
}
$Value = new Value();