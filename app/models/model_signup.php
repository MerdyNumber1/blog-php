<?php

use RedBeanPHP\R;
class Model_Signup extends Model {
    public $result;
    public function post_data($data = null) {
        $this->result = [
            "title" => "Регистрация не успешна!",
            "header_title" => "Регистрация не успешна!",
            "done_registration" => true,
        ];
        if($data['login'] AND $data['password']) {
            if(R::find('users', 'login = ?', [$data['login']])) {
                $this->result['title'] = 'Регистрация не успешна!';
                $this->result['header_title'] = 'Данный пользователь существует!';
            } else {
                $user = R::dispense('users');
                $user->login = $data['login'];
                $user->password_hash = password_hash($data['password'], PASSWORD_BCRYPT);
                R::store($user);
                $this->result['title'] = 'Регистрация успешна!';
                $this->result['header_title'] = 'Регистрация успешна!';

                session_start();
                $_SESSION['logged'] = true;
            }
        } else {
            $this->result['title'] = 'Регистрация не успешна!';
            $this->result['header_title'] = 'Заполните логин и пароль';
        }
        return $this->result;
    }

    public function get_data($data = null) {
        $this->result = [
            "title" => "Регистрация",
            "header_title" => "Регистрация",
            "done_registration" => false,
        ];
        return $this->result;
    }
}