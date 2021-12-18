<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class WelcomePublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = Page::where('name', 'Aboutus')->get(['title', 'content']);
        $corporate_governance = Page::where([
            ['name', 'SERVICES'],
            ['slug', 'corporate-governance'],
        ])->get(['title', 'content']);

        $business_contracts_and_agreements = Page::where([
            ['name', '=', 'SERVICES'],
            ['slug', '=', 'business-contracts-and-agreements'],
        ])->get(['title', 'content']);

        $transaction_advisory = Page::where([
            ['name', '=', 'SERVICES'],
            ['slug', '=', 'transaction-advisory'],
        ])->get(['title', 'content']);

        $advisory_on_fema_and_fdi = Page::where([
            ['name', '=', 'SERVICES'],
            ['slug', '=', 'advisory-on-fema-and-fdi'],
        ])->get(['title', 'content']);

        $audit_assurance_and_certification = Page::where([
            ['name', '=', 'SERVICES'],
            ['slug', '=', 'audit-assurance-and-certification'],
        ])->get(['title', 'content']);

        $appearance_and_representation = Page::where([
            ['name', '=', 'SERVICES'],
            ['slug', '=', 'appearance-and-representation'],
        ])->get(['title', 'content']);
        $services = [
            'corporate_governance' => $corporate_governance,
            'business_contracts_and_agreements' => $business_contracts_and_agreements,
            'transaction_advisory' => $transaction_advisory,
            'advisory_on_fema_and_fdi' => $advisory_on_fema_and_fdi,
            'audit_assurance_and_certification' => $audit_assurance_and_certification,
            'appearance_and_representation' => $appearance_and_representation
        ];
        $social = Page::where('name', 'SOCIAL')->get(['title', 'content']);
        return view('welcome')->with(compact('aboutus','services','social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $content = Page::where('slug', $slug)->get();
        $content = $content[0];
        return view('show')->with(compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
