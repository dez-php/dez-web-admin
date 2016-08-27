<?php

namespace Adminka\Core\Mvc;

use Dez\Authorizer\Adapter\Session;
use Dez\Authorizer\Adapter\Token;
use Dez\Http\Response;
use Dez\Mvc\Controller;

/**
 * @property Session authorizer
 */

class ControllerWeb extends Controller {

    public function beforeExecute()
    {
        $this->response->setBodyFormat(Response::RESPONSE_HTML);
        $this->view->setMainLayout('index');
    }

    protected function authId()
    {
        return $this->authorizer->credentials()->id();
    }
    
}