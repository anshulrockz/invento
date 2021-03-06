<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Form;

class FormController extends Controller
{
    public function __construct()
    {
		$this->form = new Form();
    }
    public function index()
    {
		return view('forms/list');
    }
    public function add()
    {
		return view('forms/add');
    }
    public function save(Request $request)
    {
		return redirect()->back();
    }
    public function view($id)
    {
		return view('forms/view');
    }
    public function edit($id)
    {
		return view('forms/edit');
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
