<?php
    $names = array('aman', 'john', 'alex', 'andrew', 'dave', 'david');
    //getting value of q (entered input) from url
    $q = $_GET['q'];
    //initializing hint
    $hint = "";

    //if entered input is not empty
    if($q!="")
    {
        //iterating array names
        foreach($names as $name)
        {
            //checking if substring of name (upto length of q) is in q variable
            if(stristr($q, substr($name, 0, strlen($q)))){
                //appending hints with hint variable
                if($hint=="")
                    $hint = $name;
                else
                    $hint .= ", $name";
            }
        }
    }

    //displaying hint
    echo $hint==""?"no suggestions":$hint;
?>