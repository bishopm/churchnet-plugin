<?php

namespace Bishopm\Churchnet\Controllers\Api;

use Illuminate\Http\Request;
use Backend\Classes\Controller;
use Bishopm\Churchnet\Models\Provincial;

class ProvincialsController extends Controller
{
    /**
     * Update the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Provincial::where('denomination_id',1)->get();
    }
    
    public function update(Request $request, $id)
    {
        //
    }
}