<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Table;
use App\Models\Record;
use App\Models\Field;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TextEditor extends Component
{
    public $item;
    public $fields;
    public $realvalue = [];
    public $htmlContent = [];  // New property to hold the HTML content
    public $inputData = '';
    public $editingHtmlId = null;

    public function mount()
    {
        $this->fields = Field::get();
        foreach($this->fields as $field)
        {
            $this->realvalue[$field->id] = $field->field_value;
        }
    }
    public function show($fieldId)
    {
        $field = Field::findOrFail($fieldId);
        $newText = $this->realvalue[$fieldId];
        $field->field_value = $newText;
        $field->update();
        $this->item->field_value = $field->field_value;
        $this->realvalue[$fieldId] = "";
        $this->showItems();
    }
    public function showHtml($id)
    {
        // Load the block content for HTML editing
        $field = Field::findOrFail($id);
        $this->htmlContent[$id] = $field->field_value;
        $this->editingHtmlId = $id; // Track which block is being edited
        $this->showItems();
    }
    public function updateHtmlContent()
    {
        // Update the HTML content for the selected block
        if ($this->editingHtmlId) {
            $field = Field::findOrFail($this->editingHtmlId);
            $field->field_value = $this->htmlContent[$field->id];
            $field->save();

            // Clear editing properties after saving
            $this->editingHtmlId = null;
            $this->htmlContent[$field->id] = '';
        }
        $this->showItems();
    }
    public function showItems()
    {
        $this->mount();
        $this->fields = Field::get();
    }
    public function render()
    {
        return view('livewire.text-editor');
    }
}
