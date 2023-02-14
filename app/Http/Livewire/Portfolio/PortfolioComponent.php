<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class PortfolioComponent extends Component
{

    use LivewireAlert;

    public $portfolioID, $title, $client, $link, $period, $description;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:services,title,' . $this->portfolioID,
            'client' => 'required|string',
            'link' => 'required|url',
            'period' => 'required|integer',
            'description' => 'required|string',
        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->portfolioID = '';
        $this->title = '';
        $this->client = '';
        $this->link = '';
        $this->period = '';
        $this->description = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }


    public function store()
    {

        $this->validate();

        $portfolio = Portfolio::create([
            'title' => $this->title,
            'client' => $this->client,
            'link' => $this->link,
            'period' => $this->period,
            'description' => $this->description,
        ]);

        if ($portfolio) {

            $this->alert('success', Config::get('custom.AlertMessage.success-add'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

        }

    }

    public function update()
    {

        $this->validate();

        $portfolio = Portfolio::find($this->portfolioID);
        $portfolio->title = $this->title;
        $portfolio->client = $this->client;
        $portfolio->link = $this->link;
        $portfolio->period = $this->period;
        $portfolio->description = $this->description;

        if ($portfolio->update()) {

            $this->alert('success', Config::get('custom.AlertMessage.success-update'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

        }

    }




    public function destroy()
    {

        $this->validate();

        if (Portfolio::destroy($this->portfolioID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }



    public function getData($portfolioID)
    {

        $portfolio = Portfolio::find($portfolioID);

        $this->portfolioID = $portfolio->id;
        $this->title = $portfolio->title;
        $this->client = $portfolio->client;
        $this->link = $portfolio->link;
        $this->period = $portfolio->period;
        $this->description = $portfolio->description;

    }






    public function render()
    {

        return view('livewire.portfolio.portfolio-component', ['portfolios' => Portfolio::all()]);
    }
}
