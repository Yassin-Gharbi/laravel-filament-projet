<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $property_id;
    public $start_date;
    public $end_date;

    protected $rules = [
        'property_id' => 'required|exists:properties,id',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date',
    ];

    public function submitBooking()
    {
        $this->validate();

        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $this->property_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->reset(['property_id', 'start_date', 'end_date']);

        // Optionnel : dispatch un événement ou envoie un message flash
        session()->flash('message', 'Réservation enregistrée avec succès !');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
