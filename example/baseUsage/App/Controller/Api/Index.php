<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/3/15
 * Time: 下午8:21
 */

namespace App\Controller\Api;


use Core\AbstractInterface\AbstractController;
use Core\Http\Message\UploadFile;

class Index extends AbstractController
{

    function index()
    {
        // TODO: Implement index() method.
//        $this->response()->write("this is api index");/*  url:domain/api/index.html  domain/api/  */
        $this->response()->write('');
    }

    function onRequest($actionName)
    {
        // TODO: Implement onRequest() method.
    }

    function actionNotFount($actionName = null, $arguments = null)
    {
        // TODO: Implement actionNotFount() method.
    }

    function afterAction()
    {
        // TODO: Implement afterResponse() method.
    }
    function test(){
        $file = $this->request()->getUploadedFile("a");
        if($file instanceof UploadFile){
            $file->moveTo(ROOT."/Temp/a.json");
        }
    }
}