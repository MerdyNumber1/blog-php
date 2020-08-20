<?php

class Controller_Signup extends Controller { 
    public function action_get_signup($request = null) { 
        require_once __DIR__.'/../models/model_signup.php'; 
        $model = new Model_Signup;
        $data = $model->get_data($request); 
        $this->render('signup.php.twig', $data);
    }
}