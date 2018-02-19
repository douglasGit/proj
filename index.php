<?php
    $json = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/users"));  
    $count = 0; 

    echo "1) Os websites são: ";

    for($i = 0; $i < count($json); $i++) { // percorre todo o json
        echo $json[$i]->{'website'} . '</br>'; 

        if ($json[$i]->{'username'} == 'Samantha')
          $emailSamantha = $json[$i]->{'email'}; 

       if ($json[$i]->{'address'}->{'geo'}->{'lat'} < 0) 
          $count++; 
    }

    echo "<br/><br/>2) E-mail da Samantha é " .$emailSamantha; // exibe o e-mail da Samantha

    echo "<br/><br/>3) A quantidade de usuários do hemisfério sul é: " . $count; // exibe a quantidade de usuários do hemisfério sul
?>
