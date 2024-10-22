<?php

use App\Models\Table;
use Illuminate\Support\Collection;

if (!function_exists('table')) {
    function table($tableName)
    {
        // Find the table by name and load fields with their values
        $table = Table::with('fields.fieldValues')->where('name', $tableName)->first();

        if ($table) {
            $records = collect(); // Collection to store records (rows)

            // Get all fields grouped by their `record_id`
            $groupedFields = $table->fields->flatMap(function($field) {
                return $field->fieldValues->map(function($value) use ($field) {
                    return [
                        'record_id' => $value->record_id,
                        'field_name' => $field->name,
                        'value' => $value->value
                    ];
                });
            })->groupBy('record_id');

            // Build the collection of records with dynamic field values
            foreach ($groupedFields as $recordId => $fields) {
                $record = new \stdClass(); // Create a new stdClass object for each record

                foreach ($fields as $field) {
                    $record->{$field['field_name']} = $field['value']; // Dynamically attach field value
                }

                $records->push($record); // Add the record to the collection
            }

            return $records; // Return the collection of records
        }

        return collect(); // Return an empty collection if the table is not found
    }
}
