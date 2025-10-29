<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            "/me/d44744d5-015a-46a7-9fb8-65a296b7667f.jfif",
            "/me/26eaf91f-3166-4fce-b6b9-d8b045080c3a.jfif",
            "/me/f517ea34-0a27-4c66-ab9d-32d085170d3e.jfif",
            "/me/8a5f054f-56b5-4ad2-a304-b0937d8f04fe.jfif",
            "/me/1f0ee459-e195-47d9-8da3-89f63589836e.jfif",
            "/me/4de697a0-3c40-4181-a6fe-1b9a77a8ae19.jfif",
            "/me/acc9f66d-c671-422f-9c80-52958745ba7b.jfif",
            "/me/48d149b1-8ae2-4b67-99fb-a1ff68342416.jfif",
            "/me/877391aa-022b-4207-b392-9b962e6f9e1b.jfif",
            "/me/a01136f2-6fdf-4f2f-98bd-af74eb50caaa.jfif",
            "/me/f6b823a0-bb5e-4e21-b383-8037179261c2.jfif",
            "/me/e890497f-bd89-427f-a675-39310eb59ea1.jfif",
            "/me/09979de7-acc1-4dff-bdc3-f7e30d81d6c3.jfif",
            "/me/5ba2d0d0-40eb-4e8f-b016-2c80370b0bbe.jfif",
            "/me/1570c840-9862-49d6-92bd-34416ef1db74.jfif"
        ];
        return view("gallery", ['images' => $images]);
    }
}