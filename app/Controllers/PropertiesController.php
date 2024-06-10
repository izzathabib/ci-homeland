<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Property\Property;
use App\Models\Request\Request;

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

    public function sendRequest($id)
    {
        // Declare instances for model
        $model = new Request();

        // Fetch data
        $data = [
            "user_id" => auth()->user()->id,
            "prop_id" => $id,
            "name" => $this->request->getPost('name'),
            "email" => $this->request->getPost('email'),
            "phone" => $this->request->getPost('phone'),
            "prop_image" => $this->request->getPost('prop_image'),
            "prop_name" => $this->request->getPost('prop_name'),
            "prop_price" => $this->request->getPost('prop_price'),
            "prop_location" => $this->request->getPost('prop_location'),
        ];

        // Save $model data to database
        $model->save($data);
        echo "Request Sent";
    }
}
