<?php

namespace App\Http\Controllers\Sorter;

use App\Http\Controllers\Sorter\WriteSortController as Write;
use App\Http\Controllers\Libs\Sorter\DataMerge;
// use Carbon\Carbon;


class SorterController extends Write
{
	protected $dataObject;
    public function __construct(DataMerge $c) {
        $this->dataObject = $c;
    }

    /* test db
    public function getIndex(){
        $datas = $this->dataObject->getAll();
        dd($datas);
    }

    public function getDataById($id){
        $datas = $this->dataObject->getByID($id);
        dd($datas);
    }
    */

    public function doSort($txt){
    	$datas = $this->dataObject->getTxt($txt);
    	$newArray = array();
    	$result = "";
    	$file = explode(PHP_EOL, file_get_contents($datas));
    	foreach ($file as $key => $value) {	
    		$tempArr = explode(" ", $value);
    		$lastElement = end($tempArr);
    		$temp[$lastElement] = $value;
    		$newArray = $temp;
    	}
    	ksort($newArray);
    	foreach ($newArray as $key => $value) {
    		$result .= $value."\n";
    	}
    	$this->setNameFile('sorted-names-list');
    	$this->setDataTxt($result);
    	$show = $this->writeTxt();
    	if(!$show){
    		return "failed";
    	}else{		
    		return $result;
    	}
    }

}
