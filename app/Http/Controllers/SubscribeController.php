<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class SubscribeController extends Controller
{
    //
    public function create(Request $request) {
        $lead = new Lead();
        $lead->first_name = $request->first_name;
        $lead->last_name = $request->last_name;
        $lead->email = $request->email;
        $lead->address = $request->address;
        $lead->address_2 = $request->address_2;
        $lead->country = $request->country;
        $lead->state = $request->state;
        $lead->zip = $request->zip;
        $lead->privacy = $request->privacy;
        $lead->ip_address = $request->ip();

        $lead->save();
        return redirect('/thank-you');
    }
}
