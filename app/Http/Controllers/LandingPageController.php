<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Portfolio;
use App\Models\Qualification;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $aboutsUs = AboutUs::first();
        $projects = Portfolio::get();
        $qualifications = Qualification::get();


        $companyCount = Qualification::companyCount();

        return view('landing-page.index', compact('aboutsUs', 'projects', 'qualifications'))->with('companyCount', $companyCount);
    }
}
