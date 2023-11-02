<?php

namespace App\Livewire\Pages\Settings;

use App\Models\Department;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ManageDepartment extends Component
{
    public $departments;

    #[Rule('required|unique:departments,department')]
    public $department_name;

    public $selectedDepartment;

    public function save()
    {
        $this->validate();

        $create_department = Department::create([
            'department' => $this->department_name
        ]);

        if (!$create_department) {
            session()->flash('danger', 'Check your input and try again');
            return $this->redirect('/admin/manage_department');
        }

        session()->flash('success', 'Department created successfully');
        return $this->redirect('/admin/manage_department');
    }

    public function deleteDepartment($departmentId)
    {
        $department = Department::find($departmentId);

        if ($department) {
            $department->delete();
            session()->flash('danger', 'Department deleted successfully');
        } else {
            session()->flash('danger', 'Department not found');
        }

        $this->departments = Department::all();
    }

    public function editDepartment($departmentId)
    {
        $this->selectedDepartment = $departmentId;
        $department = Department::find($departmentId);

        if ($department) {
            $this->department_name = $department->department;
        }
    }

    public function updateDepartment()
    {
        $this->validate();

        $department = Department::find($this->selectedDepartment);

        if ($department) {
            $department->update([
                'department' => $this->department_name,
            ]);

            session()->flash('success', 'Department updated successfully');
            $this->reset(['selectedDepartment', 'department_name']);
        }
    }

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function render()
    {
        return view('livewire.pages.settings.manage-department');
    }
}
