<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Visitor;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function getContent(Request $request){
        $ip = $request->ip();

        $visitor = Visitor::firstOrCreate(['ip' => $ip]);
        $count = $visitor->count + 1;
        $visitor->count = $count;
        $visitor->save();

        $fact = $this->getFact($count);

        $welcomeMsg = 'Welcome'.($count == 1 ? '!':' back!');
        $countMsg = sprintf('You have visited our website %u time', $count).($count == 1 ? '.':'s.');
        $factMsg = sprintf(' Did you know that %s', $fact);

        return view('welcome', compact('welcomeMsg', 'countMsg', 'factMsg'));
    }

    public function getFact($num){
        $client = new Client();
        $res = $client->request('GET', 'http://numbersapi.com/'.$num);
        return $res->getBody();
    }

}
