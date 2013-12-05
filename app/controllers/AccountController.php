<?php

class AccountController extends BaseController
{
    public function getIndex()
    {
        echo "This is the profile page.";
    }
    
    public function getLogin()
    {
        echo "This is Login page.";
    }
    
    public function getLogout()
    {
        echo "This is Logout page.";
    }
    
    public function getWelcome($name = null)
    {
        $data = array('name'=>$name);
        
        return View::make('account/welcome',$data);
    }
}