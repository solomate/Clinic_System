<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_us;

class contactUs extends Controller
{
    //
    function addData(Request $request)
    {
      $contactus = new contact_us;
      $contactus->name = $request->name;
      $contactus->save();
      return redirect('contactus');
    }
}
