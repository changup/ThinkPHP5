<?php
/**
 * Created by PhpStorm.
 * User: leidong
 * Date: 2017/9/19
 * Time: 15:59
 */

namespace app\api\controller;

use app\api\service\Token as TokenService;
use think\Controller;

class BaseController extends Controller
{
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScope(){
        TokenService::needExclusiveScope();
    }

    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }
}