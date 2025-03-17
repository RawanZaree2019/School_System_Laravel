<?php

namespace App\Livewire;

use App\Models\Nationality;
use App\Models\Religion;
use App\Models\TypeBlood;
use Livewire\Component;

class AddParent extends Component
{
    public $currentStep = 1,

        $id,
        $email, $password,

        $father_name, $father_name_en,
        $father_national_id,
        $father_phone, $father_Job, $father_Job_en,
        $father_nationality, $father_type_blood,
        $father_address, $father_religion,

        $mother_name, $mother_name_en,
        $mother_national_id,
        $mother_phone, $mother_Job, $mother_Job_en,
        $mother_nationality, $mother_type_blood,
        $mother_address, $mother_religion;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email'=> 'required|email',
            'father_national_id'=> 'required|string|min:10|max:10',
            // 'father_phone'=> 'required|regex:/^0[0-9]{9}$/',
            'father_phone'=> 'required',

            'mother_national_id'=> 'required|string|min:10|max:10',
            'mother_phone'=> 'required|regex:/^0[0-9]{9}$/',
        ]);
    }


    public function render()
    {
        return view('livewire.add-parent', [
            'nationalities' => Nationality::all(),
            'type_bloods' => TypeBlood::all(),
            'religions' => Religion::all(),
        ]);

    }

    //father_info
    public function firstStepSubmit()
    {
        $this->validate([
            'email' => 'required|unique:my_parents,email,'.$this->id,
            'password' => 'required',
            'father_name' => 'required',
            'father_name_en' => 'required',
            'father_Job' => 'required',
            'father_Job_en' => 'required',
            'father_national_id' => 'required|unique:my_parents,father_national_id,'.$this->id,
            'father_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'father_nationality' => 'required',
            'father_type_blood' => 'required',
            'father_religion' => 'required',
            'father_address' => 'required',
        ]);

        $this->currentStep = 2;
    }

    //mother_info
    public function secondStepSubmit()
    {
        $this->validate([
            'email' => 'required|unique:my_parents,email,'.$this->id,
            'password' => 'required',
            'mother_name' => 'required',
            'mother_name_en' => 'required',
            'mother_Job' => 'required',
            'mother_Job_en' => 'required',
            'mother_national_id' => 'required|unique:my_parents,mother_national_id,'.$this->id,
            'mother_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mother_nationality' => 'required',
            'mother_type_blood' => 'required',
            'mother_religion' => 'required',
            'mother_address' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function changeStep($step)
    {
        $this->currentStep = $step;
    }

}
