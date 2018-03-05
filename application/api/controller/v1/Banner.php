<?php
/**
 * Created by nthsky.
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;

class Banner
{
    public function getBanner($id){
//        $data = ['id'=>$id];
//        $validate = new IDMustBePositiveInt();
//        $result = $validate->check($data);
//        if($result){
//            return $id;
//        }else{
//            return $validate->getError();
//        }
        (new IDMustBePositiveInt())->goCheck();
        return $id;
    }
}