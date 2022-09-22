<?php



namespace App\Http\Livewire;

use App\Models\Wilayah as ModelsWilayah;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Wilayah extends Component
{
    public function render()
    {
        return view('livewire.wilayah', [
            'wilayah' => ModelsWilayah::latest()->paginate(3)

        ]);
    }
}
