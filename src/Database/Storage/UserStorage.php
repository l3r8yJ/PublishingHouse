<?php

namespace App\Database\Storage;

use App\Exceptions\AuthorizationException;

class UserStorage{

    private \PDO $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    /**
     * @throws AuthorizationException
     */
    public function registration ($params){

        if(empty($params['login'])){
            throw new AuthorizationException("The login should not be empty!");
        }
        if(empty($params['password'])){
            throw new AuthorizationException("The password should not be empty!");
        }
        if($params['password_confirm'] !== $params['password']){
            throw new AuthorizationException("The password and confirm password must equal!");
        }
        if(empty($params['username'])){
            throw new AuthorizationException("The username should not be empty!");
        }
        if(empty($params['date_of_birth'])){
            throw new AuthorizationException("The date of birth should not be empty!");
        }
        if(empty($params['address'])){
            throw new AuthorizationException("The address should not be empty!");
        }
        if(empty($params['gender'])){
            throw new AuthorizationException("The address should not be empty!");
        }
        if(empty($params['interests'])){
            throw new AuthorizationException("The interests should not be empty!");
        }
        if(empty($params['vk'])){
            throw new AuthorizationException("The vk link should not be empty!");
        }
        if(empty($params['blood_group'])){
            throw new AuthorizationException("The blood group should not be empty!");
        }
        if(empty($params['rh_factor'])){
            throw new AuthorizationException("The rh factor should not be empty!");
        }
       /* if(array_key_exists('password', $params)){
            $pass = $params['password'];
            if(sizeof($pass) < 6){
                throw new AuthorizationException("Incorrect password!");
            }
        }*/

        $stmt = $this->db->prepare('INSERT INTO users (login, password, username, date_of_birth, 
                   address, gender, interests, vk, blood_group, rh_factor) 
                    VALUES (:login,:password, :username,:date_of_birth, :address, :gender,
                            :interests, :vk, :blood_group, :rh_factor)');

//        $stmt->bindValue(':login', $params['login'], \PDO::PARAM_STR);
//        $stmt->bindValue(':password', $params['password'], \PDO::PARAM_STR);
//        $stmt->bindValue(':username', $params['username'], \PDO::PARAM_STR);
//        $stmt->bindValue(':date_of_birth', $params['date_of_birth'], \PDO::PARAM_STR);
//        $stmt->bindValue(':address', $params['address'], \PDO::PARAM_STR);
//        $stmt->bindValue(':gender', $params['gender'], \PDO::PARAM_STR);
//        $stmt->bindValue(':interests', $params['interests'], \PDO::PARAM_STR);
//        $stmt->bindValue(':vk', $params['vk'], \PDO::PARAM_STR);
//        $stmt->bindValue(':blood_group', $params['blood_group'], \PDO::PARAM_STR);
//        $stmt->bindValue(':rh_factor', $params['rh_factor'], \PDO::PARAM_STR);

        $stmt->execute([
            'login' => $params['login'],
            'password' => password_hash($params['password'],PASSWORD_BCRYPT),
            'username' => $params['username'],
            'date_of_birth' => $params['date_of_birth'],
            'address' => $params['address'],
            'gender' => $params['gender'],
            'interests' => $params['interests'],
            'vk' => $params['vk'],
            'blood_group' => $params['blood_group'],
            'rh_factor' => $params['rh_factor']
        ]);
    }

    public function getUserIdByEmailAndPassword($email, $password) {
        //$stmt = $this->db->prepare()
    }

    /**
     * @throws AuthorizationException
     */
    public function login($login, $password){
        $stmt = $this->db->prepare('SELECT * FROM users WHERE login = :login');
        $stmt->execute([
            'login' => $login
        ]);

        $user = $stmt->fetch();

        if(empty($user)){
            throw new AuthorizationException("User with login not found!");
        }

        if(password_verify($password, $user['password'])){
            return $user;
        }

        throw new AuthorizationException("Incorrect email or password");
    }
}