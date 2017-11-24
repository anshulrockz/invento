<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Unit;

class UnitController extends Controller
{
    public function __construct()
    {
		$this->unit = new Unit();
    }
    public function index()
    {
		return view('units/list');
    }
    public function add()
    {
		return view('units/add');
    }
    public function save(Request $request)
    {
		return redirect()->back();
    }
    public function view($id)
    {
		return view('units/view');
    }
    public function edit($id)
    {
		return view('units/edit');
    }
    public function update(Request $request,$id)
    {
		return redirect()->back();
    }
    public function delete($id)
    {
		return redirect()->back();
    }
}
