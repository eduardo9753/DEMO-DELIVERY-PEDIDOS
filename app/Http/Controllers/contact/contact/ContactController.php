<?php

namespace App\Http\Controllers\contact\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    public function index()
    {
        $company = DB::connection('other_system')->table('companies')->first();
        
        return view('contacto.index', [
            'company' => $company
        ]);
    }
}
