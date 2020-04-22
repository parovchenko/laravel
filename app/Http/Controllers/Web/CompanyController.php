<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function aboutUs()
    {
        return view('web.company.about-us');
    }

    public function contactUs()
    {
        return view('web.company.contact-us');
    }

    public function leadership()
    {
        return view('web.company.leadership');
    }

    public function whyChooseUs()
    {
        return view('web.company.why-choose-us');
    }

    public function ourHistory()
    {
        return view('web.company.our-history');
    }

    public function careers()
    {
        return view('web.company.careers');
    }
}
