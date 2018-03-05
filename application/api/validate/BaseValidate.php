<?php
/**
 * Created by nthsky.
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $data = Request::instance()->param();
        $result = $this->check($data);
        if(!$result){
            throw new Exception($this->getError());
        }
    }
}