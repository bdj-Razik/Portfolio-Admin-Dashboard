<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioComponent extends Component
{

    use LivewireAlert, WithFileUploads;

    public $portfolioID, $title, $client, $link, $period, $description, $image;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:services,title,' . $this->portfolioID,
            'client' => 'required|integer|exists:clients,id',
            'link' => 'required|url',
            'period' => 'required|integer',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
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
        $this->image = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        DB::beginTransaction();

        try {

            $portfolio = new Portfolio();

            $portfolio->title = $this->title;
            $portfolio->client_id = $this->client;
            $portfolio->link = $this->link;
            $portfolio->period = $this->period;
            $portfolio->description = $this->description;

            if ($this->image) {

                if ($this->image->storeAs('img-portfolio/', $this->image->getClientOriginalName())) {

                    $portfolio->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

                    return;
                }

            }

            $portfolio->save();

            DB::commit();

            $this->alert('success', Config::get('custom.AlertMessage.success-add'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } catch (\Throwable$th) {

            DB::rollBack();

            $this->alert('warning', Config::get('custom.AlertMessage.error-add'));

        }

    }

    public function update()
    {

        $this->validate();

        DB::beginTransaction();

        try {

            $portfolio = Portfolio::find($this->portfolioID);
            $portfolio->title = $this->title;
            $portfolio->client_id = $this->client;
            $portfolio->link = $this->link;
            $portfolio->period = $this->period;
            $portfolio->description = $this->description;

            if ($this->image) {

                if ($this->image->storeAs('img-portfolio/', $this->image->getClientOriginalName())) {

                    $portfolio->image = $this->image->getClientOriginalName();

                } else {

                    DB::rollBack();

                    $this->alert('warning', Config::get('custom.AlertMessage.error-update'));

                    return;
                }

            }

            $portfolio->update();

            DB::commit();

            $this->alert('success', Config::get('custom.AlertMessage.success-update'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } catch (\Throwable$th) {

            DB::rollBack();

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
        $this->client = $portfolio->client_id;
        $this->link = $portfolio->link;
        $this->period = $portfolio->period;
        $this->description = $portfolio->description;

    }

    public function render()
    {

        return view('livewire.portfolio.portfolio-component', ['portfolios' => Portfolio::all(), 'clients' => Client::all()]);
    }
}
