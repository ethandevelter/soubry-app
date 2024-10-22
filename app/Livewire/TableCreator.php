<?php

namespace App\Livewire;

use App\Models\Table;
use App\Models\Field;
use App\Models\Multi;
use App\Models\Record;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;

class TableCreator extends Component
{
    public $table_create = "";
    public $field_create = [];
    public $fieldtype_create = [];
    public $tables = [];
    public $fields = [];
    public $newfield = [];
    public $newmulti = [];
    public $records = [];

    public function mount()
    {
        $this->loadData();
    }

    public function createTable()
    {
        Table::create([
            'name' => $this->table_create,
            'slug' => Str::slug($this->table_create, "-"),
        ]);

        $this->loadData();
    }

    public function createRecord($tableId)
    {
        Record::create([
            'table_id' => $tableId,
        ]);

        $this->loadData();
    }

    public function createField($tableId)
    {
        // Create the new field for the table
        $newField = Field::create([
            'table_id' => $tableId,
            'name' => $this->field_create[$tableId],
            'type' => $this->fieldtype_create[$tableId],
        ]);

        // Associate the new field with all existing records of the table
        $records = Record::where('table_id', $tableId)->get();
        foreach ($records as $record) {
            // Initialize field value for each record
            $newField->update(['record_id' => $record->id]);
        }

        $this->loadData();
    }

    public function saveItems($tableId, $recordId)
    {
        foreach ($this->fields->where('table_id', $tableId) as $field) {
            if ($field->type != "multi") {
                if (isset($this->newfield[$field->id])) {
                    // Update the specific field value for this record
                    Field::where('id', $field->id)
                        ->where('record_id', $recordId)
                        ->update([
                            'value' => $this->newfield[$field->id],
                        ]);
                }
            } else {
                $imagePath = $this->newfield[$field->id];
                foreach ($imagePath as $image) {
                    $storedFilePath = $image->store('multi-images', 'public');
                    Multi::create([
                        'field_id' => $field->id,
                        'value' => $storedFilePath,
                    ]);
                }
            }
        }

        $this->loadData();
    }

    public function loadData()
    {
        $this->tables = Table::with('records')->get();
        $this->fields = Field::get();
        $this->records = Record::get();

        foreach ($this->fields as $field) {
            $this->newfield[$field->id] = $field->value;
        }
    }

    public function render()
    {
        return view('livewire.table-creator');
    }
}
