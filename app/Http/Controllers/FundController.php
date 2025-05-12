<?php

namespace App\Http\Controllers;

class FundController extends Controller
{
    public function about()
    {
        return view("fund.about");
    }

    public function charter()
    {
        return view("fund.charter");
    }

    public function executive()
    {
        return view("fund.executive");
    }

    public function objectives()
    {
        return view("fund.objectives");
    }

    public function business()
    {
        return view("fund.business");
    }
}
