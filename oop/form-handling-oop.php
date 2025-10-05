<?php
if(isset($_POST['user'])){
    class User{
        function getName($name){
            echo "Username is: ".$name;
        }
    }
    $user = new User();
    $user->getName($_POST['user']);
}else{
    echo "Please enter your username";
}




?>



<form action="" method="post">
    <input type="text" name="user" placeholder="Enter Username">
    <br />
    <br />
    <button>click</button>
</form>