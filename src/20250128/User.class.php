<?php

class User
{ // Properties from the object
    public $id;
    public $username;
    public $email;
    private $password;
    public $avatar;

    function __construct(String $username, String $email, String $avatar = 'default.png')
    {
        $this->username = $username;
        $this->email = $email;
        $this->avatar = $avatar;
    }
    function getId()
    {
        return $this->id;
    }
    function setId($i)
    {
        $this->id = $i;
    }
    function getUsername()
    {
        return $this->username;
    }
    function setUsername($username)
    {
        return $this->username = $username;
    }
    function setPassword($pass)
    {
        return $this->password = $pass;
    }
    // Functions from this object, but we name them methods.
    function login() {}

    function printName()
    {
        return ucwords($this->username);
    }

    function logout() {}

    function getAvatar()
    {
        return $this->avatar;
    }

    function delete() {}

    // Pseudo code just to show private functions exist
    private function getServerMacAddress()
    {
        return $_SERVER['SERVER_ADDR'];
    }
}
