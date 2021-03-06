<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $applicantDetails = $request->all();
        $name = $applicantDetails['name'];
        $education = $applicantDetails['education'];
        $email = $applicantDetails['email'];
        $mobile = $applicantDetails['mobile'];
        $description = $applicantDetails['description'];
        $file = $request->file('file');

        \Mail::send('partials.career.email', ['name' => $name, 'education' => $education, 'email' => $email, 'mobile' => $mobile, 'description' => $description], function ($message) use ($file) {

            $message->to('sreeraj.acs@gmail.com')->subject('Application')
                ->attach($file->getRealPath(), ['as' => $file->getClientOriginalName(), 'mime' => $file->getClientMimeType()]);
        });

        return back()->with('success', 'Your application sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
