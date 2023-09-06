<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\TyperTitle;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $service = Service::all();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategory = Category::all();
        $portfolioItems = PortfolioItem::all();
        return view(
            'frontend.home',
            compact(
                'hero',
                'typerTitles',
                'service',
                'about',
                'portfolioTitle',
                'portfolioCategory',
                'portfolioItems',
            )
        );
    }
}