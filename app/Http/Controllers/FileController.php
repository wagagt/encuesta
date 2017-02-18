<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests;

class FileController extends Controller
{
    public function store(Request $request)
    {

        $this->path = 'uploads/images/';
        $files = $request->file;
        $fecha = date('Y-m-d-H-i-s');
        //dd($fecha);
        foreach($files as $file)
        {
            $this->fileName = $request->uploaduser_id.'_'.$request->ticket_id.'_'.$fecha.'_'.$file->getClientOriginalName();
            $file->move($this->path,$this->fileName);


            switch($file->getClientOriginalExtension()){

                case 'jpg';
                case 'jpeg';
                case 'png';
                case 'bmp';
                case 'gif';

                    $archivo    = Image::make($this->path.$this->fileName);
                    $archivo->resize(800, null, function($constraint) {
                        $constraint->aspectRatio();
                        \File::delete($this->path.$this->fileName);
                    });
                    $archivo->save($this->path.$this->fileName);

                break;


            }


            $upLoadTicketFile = new TicketFiles($request->all());
            $upLoadTicketFile->name = $this->fileName;
            $upLoadTicketFile->ticket_id = $request->ticket_id;
            $upLoadTicketFile->userupload_id = $request->uploaduser_id;
            $upLoadTicketFile->ruta = $this->path;
            $upLoadTicketFile->archivo = $this->fileName;
            $upLoadTicketFile->save();
        }
    }
}
