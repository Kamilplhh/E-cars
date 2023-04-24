<?php

namespace App\Interfaces;

interface CarRepositoryInterface 
{
    public function getNews();
    public function getOffersUnder2k();
    public function getOffersUnder10k();
    public function getOffersPlus10k();
}