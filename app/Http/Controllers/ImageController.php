<?php

namespace App\Http\Controllers;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Models\Image;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function getUpload()
    {
        return view('pages.upload');
    }

    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if (!$filename) {
            return 0;
        }

        $response = $this->image->delete($filename);

        return $response;
    }


    public function getServerImagesPage()
    {
        $data['image'] = Image::all();

        return view('pages.upload-2');
    }

    public function getServerImages()
    {
        $images = Image::get(['original_name', 'filename']);

        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->original_name,
                'server' => $image->filename,
                'size' => File::size(public_path('images/full_size/' . $image->filename))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }


    public function viewServerImages()
    {
        $images = Image::get(['original_name', 'filename']);
        return view('view-serverimage',compact('images'));


    }

}