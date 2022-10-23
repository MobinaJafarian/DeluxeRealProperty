<?php
namespace App\Http\Services;

use Intervention\Image\ImageManager;

class ImageUpload
{
    public static function UploadAndFitImage($file, $path, $name, $width, $height)
    {
        $path = trim($path, '\/') . "/"; 
        $name = trim($name, '\/') . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
        if(!is_dir($path))
        {
            if(!mkdir($path, 0777, true))
            {
                die("image resize : failed to create directory");
            }
        }
        is_writable($path);
        $manager = new ImageManager(array('driver' => 'GD'));
        $image = $manager->make($file['tmp_name'])->fit($width, $height);
        $image->save($path.$name);
        return '/'.$path.$name;
    }
}