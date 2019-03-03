<?php

namespace App\Http\Controllers\Libs\Sorter;

interface DataInterface {
	/* test db
    public function getAll();
    public function getByID($id);
    */
    public function doSort($txtdata);
    public function writeTxt($namefile,$txtdata);
    public function getTxt($txtdata);
}

