<?php

namespace App\Livewire;
use App\Models\Table;
use App\Models\Record;
use App\Models\Field;
use Illuminate\Support\Str;

use Livewire\Component;

class NewTableCreator extends Component
{
    public $tables = [];
    public $records = [];
    public $fields = [];
    public $field = [];
    public $newField = "";
    public $tableName = "";

    public function mount()
    {
        $this->tables = Table::all();
        $this->records = Record::all();
        $this->fields = Field::all();
        foreach($this->fields as $f) {
            if($f->field_value != "default_value") {
                $this->field[$f->id] = $f->field_value;
            }else {
                $this->field[$f->id] = "";
            }
        }
    }
    public function createTable()
    {
        Table::create([
            'name' => $this->tableName,
            'slug' => Str::slug($this->tableName , '-'),
        ]);
        $this->tableName = '';
        $this->showItems();
    }
    public function newEntry($tableId)
    {
        // Create a new record for the specified table
        $newRecord = Record::create([
            'table_id' => $tableId,
        ]);

        // Get the fields from the first record of the same table
        $firstRecord = Record::where('table_id', $tableId)->first();

        // Check if the first record exists and copy fields from it
        if ($firstRecord) {
            $existingFields = Field::where('record_id', $firstRecord->id)->get();
            
            // Now copy the existing fields to the newly created record
            foreach ($existingFields as $field) {
                Field::create([
                    'record_id' => $newRecord->id,
                    'field_name' => $field->field_name,
                    'field_value' => $field->field_value, // You can assign default values if needed
                ]);
            }
        }

        // Refresh the data for display
        $this->showItems();
    }
    public function createField($tableId) {
        $c_records = Record::where('table_id', $tableId)->get();
        foreach($c_records as $record) {
            Field::create([
                'record_id' => $record->id,
                'field_name' => $this->newField,
                'field_value' => 'default_value',
            ]);
        }
        $this->showItems();
    }
    public function saveEntry($recordId) 
    {
        foreach($this->fields->where('record_id', $recordId) as $field) {
            if (isset($this->field[$field->id])) {
                $field->update([
                    'field_value' => $this->field[$field->id],
                ]);
            }
        }
        $this->showItems();
    }
    public function showItems()
    {
        $this->tables = Table::all();
        $this->records = Record::all();
        $this->fields = Field::all();
    }
    public function render()
    {
        return view('livewire.new-table-creator');
    }
}
