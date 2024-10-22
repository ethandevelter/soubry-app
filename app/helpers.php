<?php

use App\Models\Table;
use Illuminate\Support\Collection;

if (!function_exists('table')) {
    function table($tableName)
    {
        // Find the table by name and eager load records and their fields
        $table = Table::with('records.fields')->where('name', $tableName)->first();

        if ($table) {
            $records = collect(); // Collection to store records (rows)

            // Loop through each record in the table
            foreach ($table->records as $record) {
                $recordObject = new \stdClass(); // Create a new stdClass object for each record
                
                // Add the record ID
                $recordObject->id = $record->id;

                // Loop through each field in the record and dynamically attach field values
                foreach ($record->fields as $field) {
                    $recordObject->{$field->field_name} = $field->field_value; // Attach field name and value dynamically
                }

                // Add the record object to the records collection
                $records->push($recordObject);
            }

            return $records; // Return the collection of records
        }

        return collect(); // Return an empty collection if the table is not found
    }
}