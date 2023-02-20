<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardComponent extends Component
{

    public function render()
    {

        $priceMonthly = DB::table('portfolios')->selectRaw("MONTHNAME(created_at) as month , SUM(price) AS price")
            ->groupByRaw('MONTH(created_at)')
            ->whereBetween('created_at',
                [Carbon::now()->subMonth(6), Carbon::now()]
            )
            ->get();

        return view('livewire.dashboard.dashboard-component',
            [
                'priceMonthly' => $priceMonthly,
                'skillsCount' => Skill::count(),
                'clientsCount' => Client::count(),
                'projectsCount' => Portfolio::count(),
                'servicesCount' => Service::count(),
            ]);
    }
}
