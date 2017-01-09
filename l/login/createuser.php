<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$newuser = $_POST['email'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];
$newgender = $_POST['gender'];
$newage = $_POST['age'];
$newlocation = $_POST['state'];
$newincome = $_POST['income'];
$newparty = $_POST['party'];
$newethnicity = $_POST['ethnicity'];


    //Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules
if ($pw1 != $pw2) {

  header("Location: ../messages/signuperror?title=Passwords don't match!&subtitle=Your fingers must of slipped up!");

} elseif (strlen($pw1) < 4) {

    header('Location: ../messages/signuperror?title=Invalid password!&subtitle=Make sure your password is at least 4 characters. The more the better!');

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    header('Location: ../messages/signuperror?title=Email not valid!&subtitle=Make sure the email provided is a valid one.');

} else {
    //Validation passed
    if (isset($_POST['email']) && !empty(str_replace(' ', '', $_POST['email'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw, $newgender, $newage, $newlocation, $newincome, $newparty, $newethnicity);

        //Success
        if ($response == 'true') {

          header('Location: ../messages/accountcreated');

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');

        } else {
            //Failure
            mySqlErrors($response);

        }
    } else {
        //Validation error from empty form variables
        echo 'An error occurred on the form... try again';
    }
};
