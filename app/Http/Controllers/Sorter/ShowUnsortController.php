<?php

namespace App\Http\Controllers\Sorter;

use App\Http\Controllers\Libs\Sorter\DataMerge;
// use Carbon\Carbon;

class ShowUnsortController
{
	protected $dataObject;
    public function __construct(DataMerge $c) {
        $this->dataObject = $c;
    }
    public function getTxt($txt){
    	$datas = $this->dataObject->getTxt($txt);
    	$file = file_get_contents($datas);
    	return $file;
    }
}
