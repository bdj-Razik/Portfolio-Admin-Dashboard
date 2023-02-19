<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Livewire\Component;

class DashboardComponent extends Component
{

    public function render()
    {

        return view('livewire.dashboard.dashboard-component', ['skillsCount' => Skill::count() ,'clientsCount' => Client::count() , 'projectsCount' => Portfolio::count() , 'servicesCount' => Service::count() ]);
    }
}
