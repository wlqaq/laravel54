<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class msgController extends BaseController
{
    public function  getId(){
        $data = ['title'=>'test3','content'=>'test1','stu'=>'17'];
        $res = DB::table('msgs')->insertGetId($data);
        apc_bin_dump($res);
    }
    public  function  edit(){
        //$rs =DB::table('msgs')->where('id',2)->update(['title']=>'DBupdate');
        $rs =DB::table('msgs')->where('id',3)->decrement('stu',3);
        dump($rs);
    }
}
