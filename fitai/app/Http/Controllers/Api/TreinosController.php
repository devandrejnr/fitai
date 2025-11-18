<?php

namespace App\Http\Controllers\Api;

use App\Models\Treinos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TreinosController extends Controller
{
    /**
     * @var Treinos
     * 
     */

    private $treinos;

    public function __construct(Treinos $treinos)
    {
        $this->treinos = $treinos;
    }   

    public function index()
    {
        return response()->json($this->treinos->all());
    }

    public function save(Request $request)
    {
        $data = $request->all();
        $treinos = $this->treinos->create($data);
        
        return response()->json($request->all());
    }
}
