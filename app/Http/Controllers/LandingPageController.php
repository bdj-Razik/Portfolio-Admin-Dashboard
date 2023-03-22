<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\CategorySkill;
use App\Models\Portfolio;
use App\Models\Qualification;
use App\Models\Service;
use App\Models\TypeQualification;
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

        $frontEnd = CategorySkill::where('name', 'FrontEnd Developer')->first();
        $backEnd = CategorySkill::where('name', 'BackEnd Developer')->first();
        $dataBase = CategorySkill::where('name', 'DataBase Developer')->first();
        $framework = CategorySkill::where('name', 'Framework Developer')->first();

        $works = TypeQualification::where('name', 'work')->first();
        $educations = TypeQualification::where('name', 'education')->first();

        $services = Service::all();
        $portfolios = Portfolio::all();
        $testimonials = Portfolio::select('client_id', 'feedback', 'rating')->get();



        $companyCount = Qualification::companyCount();

        return view('landing-page.index',
            compact(
                'aboutsUs',
                'projects',
                'qualifications',
                'frontEnd',
                'backEnd',
                'dataBase',
                'framework',

                'works',
                'educations',

                'services',
                'portfolios',
                'testimonials'
            )
        )->with('companyCount', $companyCount);
    }
}
