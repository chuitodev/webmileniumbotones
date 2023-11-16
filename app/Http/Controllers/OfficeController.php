<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $office)
    {
        $logs = $this->getLogsByOffice($office);

        return view('office.show', compact('logs', 'office'));
    }

    public function exportCSV(string $office) {
        $fileName = 'CSV - ' . $office . '.csv';
        $logs= $this->getLogsByOffice($office);

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Id', 'Created_At', 'Office', 'Answer');

        $callback = function() use($logs, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($logs as $log) {
                $row['Id'] = $log->id;
                $row['Created_At'] = $log->created_at;
                $row['Office'] = $log->office;
                $row['Answer'] = $log->answer;

                fputcsv($file, array($row['Id'], $row['Created_At'], $row['Office'], $row['Answer']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    private function getLogsByOffice(string $office) {
        return Log::where('office', $office)
            ->orderBy('created_at', 'desc')
            ->get();
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
