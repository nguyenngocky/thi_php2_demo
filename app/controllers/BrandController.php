<?php
namespace App\Controllers;
use App\Models\Brand;

class BrandController{

    public function trangChu(){
        return view('index');
    }

    public function index(){
        $brand = Brand::all();
        return view('brands.index', [
            'brand' => $brand
        ]);
    }
    public function xoa($id){
        Brand::destroy($id);
        header('Location:' .BASE_URL . 'brands');
    }

    public function taoForm(){
        return view('brands.add', [
            
        ]);
    }

    public function luuTao(){
        $model = new Brand;
        $filename = "";
        $imgvalue = $_FILES['img'];
        if($imgvalue['size'] > 0){
            $filename = uniqid(). '-' . $imgvalue['name'];
            move_uploaded_file($imgvalue['tmp_name'], './public/img/' .$filename);
            $imgvalue = $filename;
            // var_dump($filename);die;
        }
        
        $err = "";
        
        if(empty($_POST['name'])){
            $err .= "name-err=Hãy nhập name&";
            
        }
        if(empty($_POST['address'])){
            $err .= "address-err=Hãy nhập address&";
            
        }
        if(empty($_POST['founding_year'])){
            $err .= "founding_year-err=Hãy nhập founding_year&";
            
        }
        if($_FILES['img']['size'] == 0){
            $err .= "img-err=Hãy up ảnh&";
            
        }
        $err = rtrim($err, '&');
        if(strlen($err) > 0){
            header('location:'.BASE_URL .'brands/tao?' . $err);
            die;
        }
        
        $model->name = $_POST['name'];
        $model->address = $_POST['address'];
        $model->founding_year = $_POST['founding_year'];
        $model->logo = $filename;
        $model->save();
        
        // $data = [
        //     'name' => $_POST['name'],
        //     'address' => $_POST['address'],
        //     'founding_year' => $_POST['founding_year'],
        //     'logo' => $filename,
        // ];
        // $model->insert($data);
        header('Location:' .BASE_URL . 'brands');
    }

    public function suaForm($id){
        $model = Brand::find($id);
        return view('brands.update', [
            'model' => $model,
        ]);
    }

    public function luuSua($id){
        $model = Brand::find($id);
        $img = $_FILES['img'];
        $imgValue = $model->logo;
        $filename = "";
        if ($img['size'] > 0) {
            $filename = uniqid() . '-' . $img['name'];
            move_uploaded_file($img['tmp_name'], './public/img/' .$filename);
        }elseif($img['size'] == 0){
            $filename = $imgValue;
        }
        $model->name = $_POST['name'];
        $model->address = $_POST['address'];
        $model->founding_year = $_POST['founding_year'];
        $model->logo = $filename;
        $model->save();
        header('Location:' .BASE_URL . 'brands');
    }
    
}

?>