<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Facades\Config;
use App\Http\Requests;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(!\Session::has('locale')){
            \Session::put('locale', $id);

        }else{
            Session::set('locale', $id);
        }
        return Redirect::back();

        //
    }

}
