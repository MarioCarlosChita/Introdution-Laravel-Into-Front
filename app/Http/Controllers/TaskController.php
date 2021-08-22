<?php

namespace App\Http\Controllers;

use App\Models\model\task as ModelTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class TaskController extends Controller
{
    public function __construct()
    {
    }

    public function Listar()
    {
        $data["data"] = ModelTask::all();
        return  view('formulario', $data);
    }

    public function Adicionar(Request  $request)
    {

        $task = $request->all();
        $validator = Validator::make($task, [
            'nome' => 'required|max:20|min:6',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            $data["error"] =  $validator->errors();
            return view('error', $data);
        }
        $add  = ModelTask::create($task);
        $data["data"] = ModelTask::all();
        return  view('formulario', $data);
    }
}
