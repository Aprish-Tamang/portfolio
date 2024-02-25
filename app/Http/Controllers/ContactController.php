<?php

namespace App\Http\Controllers;

use App\Mail\feedback;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contacts(Request $request){
Mail::to('admin@test.com')->send(new feedback($request->all()));
return redirect('/');
    }
}
