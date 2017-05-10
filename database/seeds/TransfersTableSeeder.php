<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{
    use \App\DepartmentData;

    public function run()
    {
        foreach ($this->departments as $value) {

            $dept = App\Department::where('name', '=', $value['name'])->first();

            foreach ($value['transfers'] as $key => $value) {
                factory(App\Transfer::class)->create([
                    'type' => $key,
                    'department_id' => $dept->id,
                    'total_records_held' => $value['total_records_held'],
                    'records_selected_for_transfer' => $value['records_selected_for_transfer'],
                    'records_selected_for_transfer_as_percentage_of_total' => percent_of_total($value['records_selected_for_transfer'], $value['total_records_held']),
                    'records_selected_for_transfer_under_lci' => $value['records_selected_for_transfer_under_lci'],
                    'records_selected_for_transfer_under_lci_as_percentage_of_total' => percent_of_total($value['records_selected_for_transfer_under_lci'], $value['total_records_held']),
                    'records_still_to_be_reviewed' => $value['records_still_to_be_reviewed'],
                    'records_still_to_be_reviewed_as_percentage_of_total' => percent_of_total($value['records_still_to_be_reviewed'], $value['total_records_held']),
                    'records_still_to_be_reviewed_under_lci' => $value['records_still_to_be_reviewed_under_lci'],
                    'records_still_to_be_reviewed_under_lci_as_percentage_of_total' => percent_of_total($value['records_still_to_be_reviewed_under_lci'], $value['total_records_held']),
                    'planned_total_for_year_end_transfer' => $value['planned_total_for_year_end_transfer'],
                    'awaiting_disposal' => $value['awaiting_disposal'],
                    'awaiting_disposal_as_percentage_of_total' => percent_of_total($value['awaiting_disposal'], $value['total_records_held']),
                    'awaiting_disposal_under_lci' => $value['awaiting_disposal_under_lci'],
                    'awaiting_disposal_under_lci_as_percentage_of_total' => percent_of_total($value['awaiting_disposal_under_lci'], $value['total_records_held']),
                    'comments' => $value['comments']
                ]);
            }
        }
    }
}
