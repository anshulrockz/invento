<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use DB;
use Auth;
use Carbon\Carbon;

class Account extends Model
{
	public function __construct()
    {
		$this->date = Carbon::now('Asia/Kolkata');
    }
}