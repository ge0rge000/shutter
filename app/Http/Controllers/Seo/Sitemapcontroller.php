<?php

namespace App\Http\Controllers\Seo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Shutter;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $shutters = Shutter::all();

        return response()
            ->view('sitemap', ['shutters' => $shutters])
            ->header('Content-Type', 'text/xml');
    }
}
