<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 06/04/18
 * Time: 22.21
 */

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\CurlAdapter;

class ProductHalalController extends  Controller
{
    private  $curlAdapter;

    public  function __construct()
    {
        $this->curlAdapter=new CurlAdapter();

    }

    public  function actionIndex(){

        $params=[
            'title'=>'Cari Produk Halal',
        ];
        return view('backend.product.index',$params);

    }

    public  function actionView(Request $request){
        $cariProduct=$request->input('cari');
        $curlResponse=$this->curlAdapter->getProductHalal($cariProduct);
        if($curlResponse->status=='error'){
            return "<div class='alert alert-danger'>Data tidak tersedia!</div>";
        }
        $dataResponse=$curlResponse->data;
        $data=[];
        foreach ($dataResponse as $item){
            $data[]=[
                'title'=>$item->title,
                'nomor_sertifikat'=>$item->nomor_sertifikat,
                'produsen'=>$item->produsen,
                'berlaku_hingga'=>$item->berlaku_hingga
            ];
        }
        $params=[
            'data'=>$data,
        ];

        return view('backend.product.view',$params);

    }

}