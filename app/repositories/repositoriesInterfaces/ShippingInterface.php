<?php

namespace App\repositories\repositoriesInterfaces;

interface ShippingInterface{

    public static function Get_All();
    public static function Store_All(array $data);

}
