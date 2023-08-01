<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ApiConroller extends Controller
{

    public function show(Request $request): View
    {
        $message = [];

        if ($request->id) {

            $requestBody = Http::get('https://api.adviceslip.com/advice/' . $request->id);
            $advice = $requestBody->json();
            $adviceLength = Str::length($advice['slip']['advice']);

            if ($adviceLength <= 30) {

                $message['message'] = $advice['slip']['advice'];
            } else {

                $message['message'] = "Your advice is too long to display here!";
            }
        } else {

            $message['message'] = "Please enter a valid number";
        }


        return view('api-request', [
            "message" => $message, "number" => $request->id
        ]);
    }

    public function showHundredAdvicesWithoutC()
    {

        $advicesList = [];

        for ($i = 1; count($advicesList) <= 5; $i++) {

            $requestBody = Http::get('https://api.adviceslip.com/advice/' . $i);
            $advice = $requestBody->json();
            if (array_key_exists("slip", $advice)) {

                $adviceMessage = $advice['slip']['advice'];

                $wordsArray = explode(' ', $adviceMessage);

                $firstWord = $wordsArray[0];
                $secondWord = $wordsArray[1];

                $combine = $firstWord . $secondWord;

                $finalArray = str_split($combine, 1);

                foreach ($finalArray as $value) {

                    if ($value == "C" || $value == "c") {
                        array_push($advicesList, $adviceMessage);
                        break;
                    }
                }
            }
        }



        return view('advice-list', [
            "adviceList" => $advicesList
        ]);
    }
}
