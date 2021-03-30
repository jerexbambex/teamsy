<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;

class DepartmentForm extends Component
{
    public $name;
    public $success = false;

    public function mount($departmentId = null)
    {
        if($departmentId) {
            $this->name = Department::findOrFail($departmentId)->name;
        }
    }

    public function submit()
    {
        Department::create([
            'name' => $this->name,
        ]);
        $this->success = true;
        $this->name = "";
    }

    public function alertDismiss()
    {
        $this->success = false;
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
