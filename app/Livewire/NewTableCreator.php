<?php

namespace App\Livewire;
use App\Models\Table;
use App\Models\Record;
use App\Models\Field;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class NewTableCreator extends Component
{
    use WithFileUploads;
    public $tables = [];
    public $records = [];
    public $fields = [];
    public $field = [];
    public $newField = "";
    public $typeField = "";
    public $tableName = "";
    public $fileUploads = []; // Array to hold file uploads

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
            'slug' => Str::slug($this->tableName , '_'),
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
                    'field_name' => Str::slug($field->field_name, '_'),
                    'field_type' => $field->field_type,
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
                'field_name' => Str::slug($this->newField, '_'),
                'field_type' => $this->typeField,
                'field_value' => '',
            ]);
        }
        $this->showItems();
    }
    public function saveEntry($recordId)
    {
        foreach ($this->fields->where('record_id', $recordId) as $field) {
            if ($field->field_type === 'image' && isset($this->fileUploads[$field->id])) {
                
                // Check if multiple images are uploaded
                if (is_array($this->fileUploads[$field->id])) {
                    $imagePaths = [];

                    foreach ($this->fileUploads[$field->id] as $file) {
                        $this->validate([
                            'fileUploads.' . $field->id . '.*' => 'image|max:1024', // 1MB Max per image
                        ]);

                        // Store each uploaded file
                        $storedFileName = $file->storeAs(
                            'photos',
                            $file->getClientOriginalName(),
                            'public'
                        );

                        // Collect relative path for each image
                        $imagePaths[] = 'storage/photos/' . $file->getClientOriginalName();
                    }

                    // Check if there's only one image, save as a string instead of JSON array
                    if (count($imagePaths) === 1) {
                        $field->update([
                            'field_value' => $imagePaths[0],
                        ]);
                    } else {
                        // Update field_value as an array of image paths in JSON format for multiple images
                        $field->update([
                            'field_value' => json_encode($imagePaths),
                        ]);
                    }

                } else {
                    // Handle single file upload directly (not in an array)
                    $this->validate([
                        'fileUploads.' . $field->id => 'image|max:1024', // 1MB Max
                    ]);

                    // Store the uploaded file
                    $storedFileName = $this->fileUploads[$field->id]->storeAs(
                        'photos',
                        $this->fileUploads[$field->id]->getClientOriginalName(),
                        'public'
                    );

                    $relativeFilePath = 'storage/photos/' . $this->fileUploads[$field->id]->getClientOriginalName();

                    // Update field_value with the single image path
                    $field->update([
                        'field_value' => $relativeFilePath,
                    ]);
                }

            } elseif (isset($this->field[$field->id])) {
                // Handle regular text input fields
                $field->update([
                    'field_value' => $this->field[$field->id],
                ]);
            }
        }

        // Refresh data for display
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
