<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{

    public function is_logged_in ()
    {
        // Change this to your actual "am I logged in?" logic
        return $_SESSION['logged_in'];
    }

}