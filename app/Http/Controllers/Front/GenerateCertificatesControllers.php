<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Certificat\CertificatRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GenerateCertificatesControllers extends Controller
{
    // To Generate Certificates
    private function generateCertificat($name,$x,$y)
    {
        $imgFile = Image::make(asset('storage/img/empty.jpg'));
        $imgFile->text($name,$x,$y,function($font){
            $font->file('fonts/AbrilFatface.ttf');
            $font->size(30);
        });
        return $imgFile->response();
    }

    public function generate(CertificatRequest $request)
    {
        $student = Student::where(['email'=>$request->email,'course_id'=>$request->course_id])->with('course')->first();
        
        if(!$student){
          return back()->withErrors(['email' => 'ياسطا اتأكد ان ده ايميلك اللي مسجل بيه  في الكورس اللي اختارته ']);
        }
        //$trackName = $student->course()->first()->track()->first()->name;
        //$courseName = $student->course()->first()->name;
        //$studentName = $student->first()->name;
        //$today = date('Y-m-d');
         
        return $this->generateCertificat($student->first()->name,330,470);
    
        
    }
}
