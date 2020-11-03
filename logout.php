<?php include('core/init.php');?>

<?php

if(isset($_POST['doLogOut']))
{
    $user = new User();

    if($user->logOut())
        redirect('index.php', 'You have been logged out successfully', 'success');
    else
    redirect('index.php', 'Something went wrong, try again later', 'error');
}

?>