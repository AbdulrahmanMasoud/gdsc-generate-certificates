<?php

namespace App\Imports;

use App\Models\Student;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToCollection,WithHeadingRow
{
    public $courseId;
    public function __construct($courseId)
    {
        $this->courseId = $courseId;
    }
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            // dd($row['name'],$row['email']);

            Student::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'course_id' => $this->courseId
            ]);
        }
        return true;
    }
}
