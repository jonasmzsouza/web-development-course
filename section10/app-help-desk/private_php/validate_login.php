<?php

    session_start();

    //variable that checks whether authentication was performed
    $authenticated_user = false;
    $user_id = null;
    $user_profile_id = null;

    $profiles = array(1 => 'Administrator', 2 => 'User');

    //system users
    $users_list = array(
        array('id' => 1, 'email' => 'adm@test.com', 'password' => '1234', 'profile_id' => 1),
        array('id' => 2, 'email' => 'user@test.com', 'password' => '1234', 'profile_id' => 1),
        array('id' => 3, 'email' => 'john@test.com', 'password' => '1234', 'profile_id' => 2),
        array('id' => 4, 'email' => 'mary@test.com', 'password' => '1234', 'profile_id' => 2)
    );

    foreach($users_list as $user) {
        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
            $authenticated_user = true;
            $user_id = $user['id'];
            $user_profile_id = $user['profile_id'];
        }
    }

    if($authenticated_user) {
        echo 'User authentication success';
        $_SESSION['authenticated'] = 'YES';
        $_SESSION['id'] = $user_id;
        $_SESSION['profile_id'] = $user_profile_id;
        header('Location: home.php');
    } else {
        $_SESSION['authenticated'] = 'NO';
        header('Location: ../../public_html/index.php?login=error');
    }

?>