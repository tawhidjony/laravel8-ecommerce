<?php


namespace App\repositories;


use App\Models\Shipping;
use App\repositories\repositoriesInterfaces\ShippingInterface;

class ShippingRepository implements ShippingInterface
{


    public static function Get_All(){
        return Shipping::get();
    }
    public static function Store_All(array $data){
        return Shipping::create($data);
    }

}
