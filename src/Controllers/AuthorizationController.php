<?php

namespace App\Controllers;

use App\Database\Storage\UserStorage;
use App\Exceptions\AuthorizationException;
use DI\Container;
use MongoDB\Driver\Exception\AuthenticationException;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AuthorizationController{

    private \PDO $db;
    private Session $session;
    private UserStorage $userStorage;

    public function __construct(Container $container ) {
        $this->db = $container->get('db');
        $this->session = $container->get('session');
        $this->userStorage = $container->get('userStorage');
    }

    /**
     * @throws AuthorizationException
     */
    public function login (Request $request, Response $response, array $args){
        $params = (array) $request->getParsedBody();

        if(empty($params['login'])){
            throw new AuthorizationException("The login should not be empty!");
        }
        if(empty($params['password'])){
            throw new AuthorizationException("The password should not be empty!");
        }
        try{
            $user = $this->userStorage->login($params['login'], $params['password']);
            $this->session->setData('user', [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'login' => $user['login']

            ]);

        } catch (AuthorizationException $exception){
            $this->session->setData('message', $exception->getMessage());
            return $response->withHeader('Location', '/login')->withStatus(302);
        }

        return $response->withHeader('Location', '/')->withStatus(302);

        return $response;
    }

    /**
     * @throws AuthorizationException
     */
    public function registration (Request $request, Response $response, array $args) {
        $params = (array) $request->getParsedBody();


        try {
            $this->userStorage->registration($params);

        } catch (AuthorizationException $exception) {
            $this->session->setData('message', $exception->getMessage());
            return $response->withHeader('Location', '/registration')->withStatus(302);
        } catch (AuthenticationException $exception) {
            $this->session->setData('message', $exception->getMessage());
            return $response->withHeader('Location', '/registration')->withStatus(302);
        }
        return $response->withHeader('Location','/login' )->withStatus(302);

    }

    public function logout(Request $request, Response $response, array $args) {
        $this->session->setData('user',null);
        return $response->withHeader('Location', '/')
            ->withStatus(302);
    }


}