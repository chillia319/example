<?php

namespace App\Charts;

use App\Csvdata;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Charts;

class SampleChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function index()
    {
        $data = Csvdata::groupBy('time')
            ->get()
            ->map(function ($item) {
                // Return the number of persons with that age
                return count($item);
            });

        $chart = new Chart;
        $chart->labels($data->keys());
        $chart->dataset('My dataset', 'line', $data->values());
        //return view('welcome',compact('chart'));
        return view('welcome', compact('chart'));

    }

    public function __construct()
    {
        parent::__construct();
    }
}
