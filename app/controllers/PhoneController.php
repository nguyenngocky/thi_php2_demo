<?php
namespace App\Controllers;

use App\Models\Brand;
use App\Models\Phone;

class PhoneController{
    public function index(){
        $phone = Phone::all();
        return view('phones.index', [
            'phone' => $phone
        ]);
    }
    public function xoa($id){
        Phone::destroy($id);
        header('Location:' .BASE_URL . 'phone');
    }

    public function taoForm(){
        $brand = Brand::all();
        return view('phones.add', [
            'brand' => $brand
        ]);
    }

    public function luuTao(){
        $model = new Phone;
        $filename = "";
        $imgvalue = $_FILES['img'];
        if($imgvalue['size'] > 0){
            $filename = uniqid(). '-' . $imgvalue['name'];
            move_uploaded_file($imgvalue['tmp_name'], './public/img/' .$filename);
            $imgvalue = $filename;
            // var_dump($filename);die;
        }
        $data = [
            'name' => $_POST['name'],
            'warranty_months' => $_POST['warranty_months'],
            'manufacturer_date' => $_POST['manufacturer_date'],
            'brand_id' => $_POST['brand_id'],
            'image' => $filename,
        ];
        $model->insert($data);
        header('Location:' .BASE_URL . 'phone');
    }

    public function suaForm($id){
        $model = Phone::find($id);
        $brand = Brand::all();
        return view('phones.update', [
            'model' => $model,
            'brand' => $brand
        ]);
    }

    public function luuSua($id){
        $model = Phone::find($id);
        $img = $_FILES['img'];
        $imgValue = $model->image;
        $filename = "";
        if ($img['size'] > 0) {
            $filename = uniqid() . '-' . $img['name'];
            move_uploaded_file($img['tmp_name'], './public/img/' .$filename);
        }elseif($img['size'] == 0){
            $filename = $imgValue;
        }
        $model->name = $_POST['name'];
        $model->warranty_months = $_POST['warranty_months'];
        $model->manufacturer_date = $_POST['manufacturer_date'];
        $model->brand_id = $_POST['brand_id'];
        $model->image = $filename;
        $model->save();
        header('Location:' .BASE_URL . 'phone');
    }
}

?>