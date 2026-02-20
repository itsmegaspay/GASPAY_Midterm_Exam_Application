<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title'    => 'Attack on Titan',
                'genre'    => 'Action / Dark Fantasy',
                'studio'   => 'MAPPA',
                'episodes' => 87,
                'rating'   => 9.1,
                'status'   => 'Completed',
            ],
            [
                'title'    => 'Fullmetal Alchemist: Brotherhood',
                'genre'    => 'Action / Adventure',
                'studio'   => 'Bones',
                'episodes' => 64,
                'rating'   => 9.1,
                'status'   => 'Completed',
            ],
            [
                'title'    => 'Demon Slayer',
                'genre'    => 'Action / Supernatural',
                'studio'   => 'ufotable',
                'episodes' => 55,
                'rating'   => 8.7,
                'status'   => 'Ongoing',
            ],
            [
                'title'    => 'Steins;Gate',
                'genre'    => 'Sci-Fi / Thriller',
                'studio'   => 'White Fox',
                'episodes' => 24,
                'rating'   => 9.1,
                'status'   => 'Completed',
            ],
            [
                'title'    => 'Hunter x Hunter (2011)',
                'genre'    => 'Action / Adventure',
                'studio'   => 'Madhouse',
                'episodes' => 148,
                'rating'   => 9.0,
                'status'   => 'On Hiatus',
            ],
            [
                'title'    => 'Spy x Family',
                'genre'    => 'Comedy / Action',
                'studio'   => 'Wit Studio',
                'episodes' => 37,
                'rating'   => 8.5,
                'status'   => 'Ongoing',
            ],
        ];

        return view('products.index', compact('products'));
    }
}