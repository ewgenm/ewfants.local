<?php

namespace App\Http\Livewire;

use Livewire\Component;
//ewgen
use Livewire\WithPagination;
use App\Models\User;
use App\Models\UserProperty;
use App\Models\PreferenceUser;


class UsersTable extends Component
{
    use WithPagination;

    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';

    public function sortBy($field){
        if( $this->sortField === $field){
            $this->sortAsc = !$this->sortAsc;
        }
        else{
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }



    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::all()
        ]);
    }
}
