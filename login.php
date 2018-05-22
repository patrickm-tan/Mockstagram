<?php
    
    //This includes the index.html so we can reference the document
    include("index.html");

    //Check if the input is useable
    if(isset($_POST['usern']) And isset($_POST['passw'])) {
        $username = $_POST['usern'];
        $password = $_POST['passw'];
    }

    //We load the userinfo xml, to access the registered user info
    $loadedUsers = simplexml_load_file("assets/xml/userinfo.xml");

    //Loop through the XML at "user" node
    foreach ($loadedUsers->disclaimer->user as $node) {
        //If the username and password of the inputted match in the XML, log the user in. 
        if ($username == $node->username & $password == $node->password) {
            $userBOOL = true;
        }
    }


?>


<script>
    //Create a welcome message near the bottom left of the screen
    //When the user log in successfully
    var userCheck = "<?php echo $userBOOL;?>";
    
    if (userCheck) {
        var username = "<?php echo $username;?>";
        document.getElementById("loggedUser").innerHTML = "Welcome " + username + "!";
    } else {
        pass;
    }
    
</script>