<?php
namespace Backend\Controllers\V1;

use Backend\Components\Auth\Session;
use Backend\Controllers\BaseController;

/**
 * Class SignController
 * @package Backend\Controllers\V1
 * @RoutePrefix('/api/v1/sign')
 */
class SignController extends BaseController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    /**
     * @Post(
     *     '/in'
     * )
     * @throws \Exception
     */
    public function inAction()
    {
//        $user      = 'heping';
//        $pwd       = '123456';
//        $startTime = time();
//        $session   = new Session(1, $startTime, $startTime + 86400);
//        $token     = $this->jwt->getToken($session);
//        $session->setToken($token);
//        $currentSession = $this->jwt->getSession($token);
    }
}