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
        if ($file = $request->file('file')) {
            if ($file->move('pdf', $applicantDetails['email'] . 'pdf')) {
                $career = new Career();
                $career->name = $applicantDetails['name'];
                $career->education = $applicantDetails['education'];
                $career->email = $applicantDetails['email'];
                $career->mobile = $applicantDetails['mobile'];
                $career->description = $applicantDetails['description'];
                $career->resume_path = $applicantDetails['email'] . 'pdf';
                $career->save();

                $name = $applicantDetails['name'];
                $education = $applicantDetails['education'];
                $email = $applicantDetails['email'];
                $mobile = $applicantDetails['mobile'];
                $description = $applicantDetails['description'];
            
            
                    \Mail::send('partials.career.email', ['name' => $name, 'education' => $education, 'email' => $email, 'mobile' => $mobile, 'description' => $description], function ($message) {
            
                        $message->to('hkk710@gmail.com')->subject('Application');
                    });
                        
                return back()->with('success', 'Your application sent successfully!');
            };
        }
        return back();
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
