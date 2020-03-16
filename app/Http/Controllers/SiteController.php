<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ContentInService;
use Mail;

class SiteController extends Controller
{
    //

    public function index()
    {
        $events = Event::all();
        $contents = ContentInService::all();
        return view('index', compact('contents', 'events'));
    }

    public function send(Request $request)
    {
        // var_dump($request->name);die;
        $data['content'] = "Имя: " . $request->name . "\n Телефон: " . $request->phone;
        $data['subject'] = 'Заявка от сайта';
        Mail::send([], $data, function ($message) use ($data) {
            $message->from('showcultura@mail.ru', 'Showcultura');
            $message->subject($data['subject']);
            $message->setBody($data['content']);
            $message->to('showcultura@mail.ru', 'Showcultura');
        });
        // $data['mail'] = 'showcultura@mail.ru';
        return redirect()->route('index');
    }
}
