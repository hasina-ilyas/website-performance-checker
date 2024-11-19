<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerformanceRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use function Laravel\Prompts\error;

class PerformanceController extends Controller
{

    public function __invoke(PerformanceRequest $request)
    {
        $validatedData = $request->validated();

        try {
            $apiUrl = env('GOOGLE_PERFORMANCE_API_URL');
            $response = Http::get($apiUrl, [
                'url' => $validatedData['url'],
                'strategy' => $validatedData['platform'],
                'key' => env('GOOGLE_PERFORMANCE_API_KEY'),
            ]);

            if ($response->ok()) {
                return response()->json([
                    'message' => 'Success fetching results',
                    'data' => $response,
                ], Response::HTTP_OK);
            }
        } catch (Exception $exception) {
            error($exception->getMessage());
            return response()->json([
                'message' => 'Failed to fetch performance data, please try again'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
