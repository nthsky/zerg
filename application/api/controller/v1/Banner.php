<?php
/**
 * Created by nthsky.
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
class Banner
{
    public function getBanner($id){
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        return $banner;
    }
}