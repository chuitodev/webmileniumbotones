<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $authorization = $request->header('Authorization');
        $apiKey = base64_encode(env('API_USER') . ':' . env('API_PASSWORD'));

        try {
            if ($authorization == $apiKey) {
                Log::create([
                    'office' => $request->office,
                    'answer' => $request->answer
                ]);
            } else {
                return response()->json([
                    'error' => 'Invalid authorization'
                ], 401);
            }
        } catch (\Exception $e) {
            return json_encode([
                'exception' => $e->getMessage()
            ]);
        }

        return json_encode([
            'response' => 'ok'
        ]);
    }
}
