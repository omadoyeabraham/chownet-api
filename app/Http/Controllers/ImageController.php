<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ImageRepositoryInterface;

class ImageController extends Controller
{

    private $imageRepository;

    /**
     * Create a new controller instance.
     *
     * @param ImageRepositoryInterface $imageRepository
     */
    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function upload(Request $request)
    {
        $data = $request->all();
        $tags = collect($data['tags'])->pluck('name')->toArray();

        try{
            $this->imageRepository->upload($data['image'], $tags);

            return response()->json([
                "message" => "Image has been uploaded succesfully"
            ], 200);
        }catch (\Exception $e) {
            return response()->json([
                "message" => "An error occured while uploading the image",
            ], 500);
        }
    }
}
