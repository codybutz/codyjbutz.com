<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    //
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        \Mail::send('emails.contact',
            array(
                'name'         => $request->get('name'),
                'email'        => $request->get('email'),
                'user_message' => $request->get('message')
            ), function ($message) use ($request) {
                $message->from($request->get('email'));
                $message->to('codyjbutz@gmail.com', 'Cody Butz')->subject('CodyJButz.com Contact Form');
            });

        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting me! I typically check my email daily, I will get back to you as soon as possible.');
    }

}
