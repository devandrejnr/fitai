<?php

namespace App\Http\Controllers\Api;

use App\Models\TiposTreino;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiposTreinoController extends Controller
{
    /**
     * @var TiposTreino
     * 
     */

    private $tipos_treino;

    public function __construct(TiposTreino $tipos_treino)
    {
        $this->tipos_treino = $tipos_treino;
    }   

    public function index()
    {
        return response()->json($this->tipos_treino->all());
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $tipos_treino = $this->tipos_treino->create($data);
        
        return response()->json($request->all());
    }
}