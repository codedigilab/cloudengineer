<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaptopDetails extends Controller
{
    private $apiUrl = 'https://script.google.com/macros/s/AKfycby1o3KyWQeWTd06QIN6IM9uFuyGpkCEkvtDdeKsa2kxmPiwvxbe4zua3I3Ft90GDWBj/exec';

    public function index()
    {
        $response = Http::post($this->apiUrl, ['action' => 'read']);
        $data = json_decode($response->body(), true);
        return view('admin.laptopdetails', compact('data'));
    }

    public function store(Request $request)
    {
        Http::post($this->apiUrl, [
            'action' => 'create',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('success', 'Record Added');
    }

    public function edit($row)
    {
        $response = Http::post($this->apiUrl, ['action' => 'read']);
        $data = json_decode($response->body(), true);

        if (!isset($data[$row - 1])) {
            return redirect()->route('admin.editlaptopdetails')->with('error', 'Record not found.');
        }

        $record = $data[$row - 1]; // Get specific row
        return view('admin.editlaptopdetails', compact('record', 'row'));
    }

    public function update(Request $request, $row)
    {
        Http::post($this->apiUrl, [
            'action' => 'update',
            'row' => $row,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.laptopdetails')->with('success', 'Record Updated');
    }

    public function toggleStatus($row)
    {
        $response = Http::post($this->apiUrl, [
            'action' => 'toggle_status',
            'row' => $row,
        ]);
        return redirect()->route('laptopdetails.index')->with('success', 'Status Updated');
    }
}