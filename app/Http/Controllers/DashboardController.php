<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countTodayYesGuadalupe = $this->countTodayAnswers('Guadalupe', 'si');
        $countTodayNoGuadalupe = $this->countTodayAnswers('Guadalupe', 'no');
        $countTodayYesReynosa = $this->countTodayAnswers('Reynosa', 'si');
        $countTodayNoReynosa = $this->countTodayAnswers('Reynosa', 'no');

        $logsGuadalupe = DB::table('logs')
            ->select(DB::raw('SUM(CASE WHEN answer = "si" THEN 1 ELSE 0 END) as countYes'),
                DB::raw('SUM(CASE WHEN answer = "no" THEN 1 ELSE 0 END) as countNo'),
                DB::raw('DATE(created_at) as date'))
            ->where('office', 'Guadalupe')
            ->groupBy('date')
            ->get()
            ->toJson();

        $logsReynosa = DB::table('logs')
            ->select(DB::raw('SUM(CASE WHEN answer = "si" THEN 1 ELSE 0 END) as countYes'),
                DB::raw('SUM(CASE WHEN answer = "no" THEN 1 ELSE 0 END) as countNo'),
                DB::raw('DATE(created_at) as date'))
            ->where('office', 'Reynosa')
            ->groupBy('date')
            ->get()
            ->toJson();

        return view('dashboard', compact(
            'countTodayYesGuadalupe',
            'countTodayNoGuadalupe',
            'countTodayYesReynosa',
            'countTodayNoReynosa',
            'logsGuadalupe',
            'logsReynosa'
        ));
    }

    private function countTodayAnswers(string $office, string $answer) {
        return Log::where('office', $office)
            ->where('answer', $answer)
            ->whereDate('created_at', Carbon::today())
            ->count();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
