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
        $team_1 = Page::where([
            ['name', '=', 'TEAM'],
            ['slug', '=', 'team-1'],
        ])->get(['title', 'content']);

        $team_2 = Page::where([
            ['name', '=', 'TEAM'],
            ['slug', '=', 'team-2'],
        ])->get(['title', 'content']);

        $team_3 = Page::where([
            ['name', '=', 'TEAM'],
            ['slug', '=', 'team-3'],
        ])->get(['title', 'content']);

        $team_4 = Page::where([
            ['name', '=', 'TEAM'],
            ['slug', '=', 'team-4'],
        ])->get(['title', 'content']);
        $team = [
            'team_1' => $team_1,
            'team_2' => $team_2,
            'team_3' => $team_3,
            'team_4' => $team_4,
        ];
        $social = Page::where('name', 'SOCIAL')->get(['title', 'content']);
        return view('welcome')->with(compact('aboutus','services','social','team'));
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

    public function callback(Request $request) 
    { 
        $applicantDetails = $request->all();
        $name = $applicantDetails['name'];
        $email = $applicantDetails['email'];
        $mobile = $applicantDetails['mobile'];
        $service = $applicantDetails['service'];
        $city = $applicantDetails['city'];

        \Mail::send('partials.callback.email', ['name' => $name,  'email' => $email, 'mobile' => $mobile, 'service' => $service, 'city' => $city], function ($message) {

            $message->to('sreeraj.acs@gmail.com')->subject('Application');
        });

        return back()->with('success', 'Your application sent successfully!');
    }
}
