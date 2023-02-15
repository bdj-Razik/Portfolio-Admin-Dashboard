<?php

namespace App\Http\Livewire\CategorySkill;

use App\Models\CategorySkill;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CategorySkillComponent extends Component
{
    use LivewireAlert;

    public $categoryID, $category, $experience;

    protected function rules()
    {
        return [
            'category' => 'required|string|max:55|unique:category_skills,name,' . $this->categoryID,
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
            'name' => $this->category,
            'experience' => $this->experience,
        ]);

        if ($categorySkill) {

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

        $category = CategorySkill::find($this->categoryID);
        $category->name = $this->category;
        $category->experience = $this->experience;

        if ($category->update()) {

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

        if (CategorySkill::destroy($this->categoryID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($categoryID)
    {

        $category = CategorySkill::find($categoryID);

        $this->categoryID = $category->id;
        $this->category = $category->name;
        $this->experience = $category->experience;

    }

    public function render()
    {
        $categories = CategorySkill::all();
        return view('livewire.category-skill.category-skill-component', ['categories' => $categories]);
    }
}
