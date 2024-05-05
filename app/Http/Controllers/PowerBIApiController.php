<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PowerBIApiController extends Controller
{
    public function getQuarterlyData()
    {
        $data = [
            [
                "Quarter" => "Q1",
                "Month" => "Jan",
                "Net" => 15
            ],
            [
                "Quarter" => "Q1",
                "Month" => "Feb",
                "Net" => 10
            ],
            [
                "Quarter" => "Q1",
                "Month" => "Mar",
                "Net" => 14
            ],
            [
                "Quarter" => "Q2",
                "Month" => "Apr",
                "Net" => 12
            ],
            [
                "Quarter" => "Q2",
                "Month" => "May",
                "Net" => 11
            ],
            [
                "Quarter" => "Q2",
                "Month" => "Jun",
                "Net" => 13
            ],
            [
                "Quarter" => "Q3",
                "Month" => "Jul",
                "Net" => 17
            ],
            [
                "Quarter" => "Q3",
                "Month" => "Aug",
                "Net" => 20
            ],
            [
                "Quarter" => "Q3",
                "Month" => "Sep",
                "Net" => 15
            ],
            [
                "Quarter" => "Q4",
                "Month" => "Oct",
                "Net" => 20
            ],
            [
                "Quarter" => "Q4",
                "Month" => "Nov",
                "Net" => 15
            ],
            [
                "Quarter" => "Q4",
                "Month" => "Dec",
                "Net" => 25
            ]
        ];

        return response()->json($data);
    }
}
