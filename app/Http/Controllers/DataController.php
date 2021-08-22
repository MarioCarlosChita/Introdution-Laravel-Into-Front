<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function __construct() {
    }

    public function Listar(){
        $data = DB::select('select  * from task');
        return  view('formulario',[$data]);
    }
}
