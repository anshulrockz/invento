<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Firm;

class FirmController extends Controller
{
    public function __construct()
    {
		$this->firm = new Firm();
    }
    public function index()
    {
		return view('firms/list');
    }
    public function show()
    {
		return view('firms/add');
    }
    public function save(Request $request)
    {
		return redirect()->back();
    }
    public function view($id)
    {
		return view('firms/view');
    }
    public function edit($id)
    {
		return view('firms/edit');
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
