<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class JurisdictionController extends Controller
{
    /**
     * Displays the set of available countries in JSON
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(get_countries());
    }

    /**
     * Display the set of available subdivisions for the specified country in JSON
     *
     * @param  string  $country
     * @return JsonResponse
     */
    public function show(string $country): JsonResponse
    {
        return response()->json(get_subdivisions($country));
    }
}
