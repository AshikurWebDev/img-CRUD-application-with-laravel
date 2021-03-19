<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;

class ZipController extends Controller
{
    public function ZipFile() 
    {
        $zip = new ZipArchive;

        $fileName = 'myZip.zip';
        if($zip->open(public_path($fileName), ZipArchive::CREATE) == TRUE)
        {
            $files = File::files(public_path('myFile'));
            foreach($files as $key => $value)
            {
                $relativeNameInZipFIle = basename($value);
                $zip->addFile($value, $relativeNameInZipFIle);

            }
            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}
