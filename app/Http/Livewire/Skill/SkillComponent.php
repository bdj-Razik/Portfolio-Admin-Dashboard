<?php

namespace App\Http\Livewire\Skill;

use App\Models\CategorySkill;
use App\Models\Skill;
use Illuminate\Support\Facades\Config;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class SkillComponent extends Component
{

    use LivewireAlert, WithPagination;

    public $skillID, $name, $category, $level = 50;
    protected $listeners = [ 'close'];

    protected function rules()
    {
        return [
            'name' => 'required|string|max:55|unique:skills,name,' . $this->skillID,
            'category' => 'required|integer|exists:category_skills,id',
            'level' => 'required|integer',
        ];
    }

    public function close()
    {
        $this->resetInputs();
        $this->resetValidation();

    }

    public function resetInputs()
    {
        $this->skillID = '';
        $this->name = '';
        $this->category = '';
        $this->level = 50;

    }

    public function updated($field)
    {
        $this->validateOnly($field);

    }

    public function store()
    {

        $this->validate();

        $skill = Skill::create([
            'name' => $this->name,
            'level' => $this->level,
            'skill_category_id' => $this->category,
        ]);

        if ($skill) {

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

        $skill = Skill::find($this->skillID);
        $skill->name = $this->name;
        $skill->level = $this->level;
        $skill->skill_category_id = $this->category;

        if ($skill->update()) {

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

        if (Skill::destroy($this->skillID)) {

            $this->alert('success', Config::get('custom.AlertMessage.success-destroy'));
            $this->dispatchBrowserEvent('closeModal');
            $this->resetInputs();

        } else {

            $this->alert('warning', Config::get('custom.AlertMessage.error-destroy'));
        }

    }

    public function getData($categoryID)
    {

        $skill = Skill::find($categoryID);

        $this->skillID = $skill->id;
        $this->name = $skill->name;
        $this->level = $skill->level;
        $this->category = $skill->skill_category_id;

    }

    public function render()
    {

        return view('livewire.skill.skill-component', ['skills' => Skill::simplePaginate(15), 'categories' => CategorySkill::select('id', 'name')->get()]);
    }
}
