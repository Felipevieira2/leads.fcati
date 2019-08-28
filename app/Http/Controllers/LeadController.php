<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Utils\Helper;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request['telefone'] = Helper::removeMascara($request->telefone);

        try{

            Lead::create($request->all());

        }catch(\Exception $e){

            \Log::error($e->getMessage());

        }

        return redirect('/lead/agradecimento');
    }

}
