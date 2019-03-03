<?php

namespace App\Http\Controllers\Sorter;

use App\Http\Controllers\Libs\Sorter\DataMerge;
// use Carbon\Carbon;


class WriteSortController
{
	protected $dataObject;
    protected $setnamefile;
    protected $settxt;

    public function __construct(DataMerge $c) {
        $this->dataObject = $c;
    }

    public function setNameFile($setnamefile)
    {
        $this->setnamefile = $setnamefile;
    }
    
    public function setDataTxt($settxt)
    {
        $this->setdatatxt = $settxt;
    }
    
    public function writeTxt(){
    	$datas = $this->dataObject->writeTxt($this->setnamefile,$this->setdatatxt);
    	$result_sort = file_put_contents($datas['path']."/".$datas['file'].'.txt', $datas['resultData']);
    	return $result_sort;
    }
}
