<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{
    use \App\DepartmentData;

    public function run()
    {
        foreach ($this->departments as $value) {
            factory(App\Department::class)->create([
                'name' => $value['name'],
                'url' => $value['url']
            ]);
        }
    }
}
