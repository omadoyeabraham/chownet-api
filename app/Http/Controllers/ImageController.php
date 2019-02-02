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
        $tags = [];

        foreach($data['tags'] as $tag) {
            array_push($tags, $tag['name']);
        }

        return response()->json($this->imageRepository->upload($data['image'], $tags));
    }
}
