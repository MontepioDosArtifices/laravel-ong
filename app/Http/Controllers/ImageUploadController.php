<?php

namespace App\Http\Controllers;



class ImageUploadController extends Controller
{
  public $acceptTypeFile = [
    'png',
    'jpeg',
    'jpg',
    'gif'
  ];

  public function store($file, $dir)
  {
    if(in_array($file->extension(), $this->acceptTypeFile)){

      $name = uniqid(date('dmYHis'));
      $extension = $file->extension();

      $fileName = "{$name}.{$extension}";

      $upload = $file->storeAs($dir, $fileName);

      if (!$upload) return false;

      return "$dir/$fileName";
    }
  }
}
