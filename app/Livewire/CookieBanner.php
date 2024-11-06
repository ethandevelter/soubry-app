<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class CookieBanner extends Component
{
    public $functional = true;
    public $interests = false;
    public $statistics = false;
    public $socialMedia = false;
    public $marketing = false;
    public function mount()
    {
        // Initialize checkboxes based on session data if available
        if (Session::has('cookiesAccepted')) {
            $this->functional = true;
            $this->interests = true;
            $this->statistics = true;
            $this->socialMedia = true;
            $this->marketing = true;
        }
    }
    public function acceptAll()
    {
        // Set all checkboxes to true
        $this->interests = true;
        $this->statistics = true;
        $this->socialMedia = true;
        $this->marketing = true;
        $this->saveSession();
    }
    public function rejectAll()
    {
        // Set all checkboxes to false except functional and save session data
        $this->interests = false;
        $this->statistics = false;
        $this->socialMedia = false;
        $this->marketing = false;
        $this->saveSession();
    }
    public function saveSettings()
    {
        $this->saveSession();
        /*if ($this->interests && $this->statistics && $this->socialMedia && $this->marketing) {*/
        /*}*/
    }

    private function saveSession()
    {
        Session::put('cookiesAccepted', true); // Save session value
    }

    public function render()
    {
        return view('livewire.cookie-banner');
    }
}