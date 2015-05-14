<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SiteController extends Controller
{

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('about');
    }

    /**
     * @return Response
     */
    public function skills()
    {
        return view('skills');
    }


    /**
     * @return Response
     */
    public function portfolio()
    {
        return view('portfolio');
    }


    /**
     * @return Response
     */
    public function contact()
    {
        return view('contact');
    }

}
