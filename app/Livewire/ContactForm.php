<?php

namespace App\Livewire;
use App\Models\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactFormSubmitted;

class ContactForm extends Component
{
    public $submitted = false;
    public $name = "";
    public $email = "";
    public $phone = "";
    public $type = "Opruiming";
    public $message = "";
    public $privacyp = false;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|max:255',
        'phone' => 'required|string',
        'type' => 'required|string',
        'message' => 'string',
        'privacyp' => 'accepted',
    ];
    public function submit()
    {
        $data = $this->validate();
        Request::create($data);
        Mail::to('ethan.develter@gmail.com')->send(new ContactFormSubmitted($data));
        $this->reset();
        $this->submitted = true;
        return redirect()->to('/bedankt');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
