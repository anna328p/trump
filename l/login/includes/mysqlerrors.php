<?php
function mySqlErrors($response)
{
    //Returns custom error messages instead of MySQL errors
    switch ($response) {

        case 'Error: SQLSTATE[23000]':
            header('Location: ../messages/signuperror?title=Email already taken.&subtitle=Either login or try another email.');
            break;

        default:
        header('Location: ../messages/signuperror?title=An error occured.&subtitle=Please try again.');
        break;

    }
}
