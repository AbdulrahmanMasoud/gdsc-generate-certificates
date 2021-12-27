<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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

    public function generate()
    {
        return $this->generateCertificat('Abdulrahman Salah Masoud',330,470);
    }
}
