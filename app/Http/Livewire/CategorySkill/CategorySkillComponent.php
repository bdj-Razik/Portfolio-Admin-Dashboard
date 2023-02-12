<?php

namespace App\Http\Livewire\CategorySkill;

use App\Models\CategorySkill;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CategorySkillComponent extends Component
{
    use LivewireAlert;

    public $categoryID, $category, $experience;

    protected function rules()
    {
        return [
            'category' => 'required|string|max:55|unique:category_skills,category,' . $this->categoryID,
            'experience' => 'required|integer',
        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->categoryID = '';
        $this->category = '';
        $this->experience = '';

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        $categorySkill = CategorySkill::create([
            'category' => $this->category,
            'experience' => $this->experience,
        ]);

        if ($categorySkill) {

            $this->alert('success', 'Insertion effectué avec success');
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', 'Insertion non effectué');

        }

    }

    public function getData($departementID)
    {

        // $departement = Departement::find($departementID);

        // $this->departementID = $departement->id;
        // $this->code = $departement->code;
        // $this->name = $departement->name;

    }

    public function render()
    {
        $categories = CategorySkill::all();
        return view('livewire.category-skill.category-skill-component', ['categories' => $categories]);
    }
}
