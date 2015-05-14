<?php namespace App\Http\Composers;

use App\Models\Testimonial;
use Illuminate\Contracts\View\View;

class TestimonialComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('testimonials', Testimonial::limit(3)->orderByRaw("RAND()")->get());
    }

}