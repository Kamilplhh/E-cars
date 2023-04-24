<?php

namespace App\Repositories;

use App\Interfaces\CarRepositoryInterface;
use App\Models\Car;

class CarRepository implements CarRepositoryInterface
{
    public function getNews()
    {
        return Car::where('Type', 'news')
                            ->get();
    }

    public function getOffersUnder2k()
    {
        return Car::where('Type', 'offers')
                            ->where('Price' <= 2000)
                            ->get();
    }

    public function getOffersUnder10k()
    {
        return Car::where('Type', 'offers')
                            ->whereBetween('Price', [2000, 10000])
                            ->get();
    }

    public function getOffersPlus10k()
    {
        return Car::where('Type', 'offers')
                            ->where('Price' >= 10000)
                            ->get();
    }
}