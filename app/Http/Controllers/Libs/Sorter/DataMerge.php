<?php

namespace App\Http\Controllers\Libs\Sorter;

use App\Http\Controllers\Libs\Sorter\DataInterface;
use App\Models\DataModel; //test model

Class DataMerge implements DataInterface {
    protected $getData;

    function __construct(DataModel $a) {
        $this->getData = $a;
    }
    /* test db
    public function getAll(){
        return $this->getData->all();
    }
    public function getByID($id){
    	return $this->getData->find($id);
    }
    */

    public function getTxt($txtdata){
    	$txt = public_path('data/'.$txtdata.'.txt');
    	return $txt;
    }

    public function doSort($txtdata){
    	$txt = public_path('data/'.$txtdata.'.txt');
    	return $txt;
    }

    public function writeTxt($namefile,$txtdata){
    	$data['path'] = public_path('data');
    	$data['file'] = $namefile;
    	$data['resultData'] = $txtdata;
    	return $data;
    }
}

