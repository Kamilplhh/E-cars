<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CarRepositoryInterface;

class CarController extends Controller
{
    private CarRepositoryInterface $carRepository;

    public function __construct(CarRepositoryInterface $carRepository) 
    {
        $this->carRepository = $carRepository;
    }
    
    public function getOffers(){

        $twoKoffers = $this->carRepository->getOffersUnder2k();
        $tenKoffers = $this->carRepository->getOffersUnder10k();
        $plusOffers = $this->carRepository->getOffersPlus10k();

        return view('offers', compact('twoKoffers', 'tenKoffers', 'plusOffers'));

    }

    public function getNews(){

        $news = $this->carRepository->getNews();

        return view('news', compact('news'));

    }
}
