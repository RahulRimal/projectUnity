<?php require('core/init.php');?>

<?php

if(isset($_POST['loginButton']))
{

    $validate = new Validator();
    $user = new User();

    $userEmail = $_POST['loginEmail'];
    $userPassword = $_POST['loginPassword'];

    if($validate->isValidEmail($userEmail))
    {
        if($user->login($userEmail, $userPassword))
            redirect('index.php', 'You have been logged in', 'success');
        else
            redirect('index.php', 'Invalid Login Credentials', 'error');
    }
    else
        redirect('index.php');
}



$templates = new Template('templates/login.php');


echo $templates;

?>