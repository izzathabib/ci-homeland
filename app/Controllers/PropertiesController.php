<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Property\Property;

class PropertiesController extends BaseController
{
    public function __construct() {
        $this->db = \Config\Database::connect();
    }
    public function getByPropType($type)
    {
        $properties = $this->db->query("SELECT * FROM properties WHERE type='$type'")->getResult();
        return view('props/props-by-type', compact('properties'));
    }

    public function getByPropPrice($order) 
    {
        $properties = $this->db->query("SELECT * FROM properties ORDER BY price ".$order)->getResult();
        return view('props/props-by-price', compact('properties'));
    }

    public function propDetail($id)
    {
        // Declare instances for model
        $model = new Property();

        // Fetch data from database
        $propsDetail = $model->find($id);
        $image_gallery = $this->db->query("SELECT * FROM images WHERE prop_id = '$id'" )->getResult();
        $related_property = $this->db->query("SELECT * FROM properties WHERE home_type = '$propsDetail[home_type]' AND id != '$propsDetail[id]'" )->getResult();

        return view('props/props-detail', compact('propsDetail','image_gallery','related_property'));
    }
}
