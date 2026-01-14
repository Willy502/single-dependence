<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Notifications\MailController;

class ContactController extends Controller
{
    public function contact(Request $request) {
        $data = $request->all();
        //dd($data);

        $client = new Client();
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->message = $data['message'];
        $us = new Client();
        $us->name = 'Single Dependence';
        $us->email = 'info@singledependence.com';
        $us->message = 'Message';
        $us->notify(new MailController($client));

        return "success";
    }
}
