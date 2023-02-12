<?php

namespace App\Http\Livewire\AboutsUs;

use App\Models\AboutUs;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AboutUsComponent extends Component
{
    use LivewireAlert;

    public $title, $first_name, $last_name, $email, $phone, $github, $linkedin, $twitter, $facebook, $adresse, $description, $cv;

    protected $rules = [

        'title' => 'required|string|max:55',

        'first_name' => 'required|string|max:55',
        'last_name' => 'required|string|max:55',

        'email' => 'required|email',
        'phone' => 'required|numeric',

        'github' => 'required|url|max:255',
        'linkedin' => 'required|url|max:255',

        'twitter' => 'required|url|max:255',
        'facebook' => 'required|url|max:255',

        'adresse' => 'required|string|max:255',
        'description' => 'required|string|max:255',

        'cv' => 'nullable',

    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function update()
    {

        $this->validate();

        $aboutUs = AboutUs::first();

        if ($aboutUs) {

            $aboutUs->title = $this->title;

            $aboutUs->first_name = $this->first_name;
            $aboutUs->last_name = $this->last_name;
            $aboutUs->email = $this->email;
            $aboutUs->phone = $this->phone;

            $aboutUs->github = $this->github;
            $aboutUs->linkedin = $this->linkedin;

            $aboutUs->twitter = $this->twitter;
            $aboutUs->facebook = $this->facebook;

            $aboutUs->adresse = $this->adresse;
            $aboutUs->description = $this->description;

            if ($aboutUs->update()) {

                $this->alert('success', 'Modification effectué avec success');

            } else {

                $this->alert('warning', 'Modification non effectué');

            }

        } else {

            $aboutUs = AboutUs::create([

                'title' => $this->title,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'github' => $this->github,
                'linkedin' => $this->linkedin,
                'twitter' => $this->twitter,
                'facebook' => $this->facebook,
                'adresse' => $this->adresse,
                'description' => $this->description,
            ]);

            if ($aboutUs) {

                $this->alert('success', 'Modification effectué avec success');

            } else {

                $this->alert('warning', 'Modification non effectué');

            }

        }

    }

    public function mount()
    {
        $aboutUs = AboutUs::first();

        if ($aboutUs) {

            $this->title = $aboutUs->title;
            $this->first_name = $aboutUs->first_name;
            $this->last_name = $aboutUs->last_name;
            $this->email = $aboutUs->email;
            $this->phone = $aboutUs->phone;

            $this->github = $aboutUs->github;
            $this->linkedin = $aboutUs->linkedin;

            $this->twitter = $aboutUs->twitter;
            $this->facebook = $aboutUs->facebook;

            $this->adresse = $aboutUs->adresse;
            $this->description = $aboutUs->description;

        }
    }

    public function render()
    {
        return view('livewire.abouts-us.about-us-component');
    }
}
