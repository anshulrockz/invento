<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Manufacture;

class ManufactureController extends Controller
{
    public function __construct()
    {
		$this->manufacture = new Manufacture();
    }
    public function index()
    {
		return view('manufactures/list');
    }
    public function add()
    {
		return view('manufactures/add');
    }
    public function save(Request $request)
    {
		return redirect()->back();
    }
    public function view($id)
    {
		return view('manufactures/view');
    }
    public function edit($id)
    {
		return view('manufactures/edit');
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