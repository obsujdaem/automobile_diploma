<?php

namespace App\Http\Controllers;

use App\Repositories\AutomobileRepository;

class AutomobileController extends Controller
{
    public function index($id, AutomobileRepository $automobileRepository)
    {
        $automobile = $automobileRepository->selectedAuto($id);

        return view('automobile', compact('automobile'));
    }
}
