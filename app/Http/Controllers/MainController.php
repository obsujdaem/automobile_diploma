<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\AutomobileRepository;
use App\Repositories\BrandRepository;
use App\Repositories\HelperRepository;
use App\Repositories\ModelsRepository;
use App\Repositories\NewRepository;
use App\Repositories\ReviewRepository;

class mainController extends Controller
{
    public function index(
        BrandRepository $brandRepository,
        ModelsRepository $modelsRepository,
        ArticleRepository $articleRepository,
        NewRepository $newRepository,
        ReviewRepository $reviewRepository,
        HelperRepository $helperRepository,
        AutomobileRepository $automobileRepository
    )
    {
        $brands = $brandRepository->all();
        $models = $modelsRepository->all();
        $article = $articleRepository->lastArticle();
        $new = $newRepository->lastArticle();
        $review = $reviewRepository->lastArticle();
        $helper = $helperRepository->lastArticle();
        $newAutomobiles = $automobileRepository->newAutomobiles();

        return view('main',
            compact('brands', 'models', 'article', 'new', 'review', 'helper', 'newAutomobiles'));
    }
}
