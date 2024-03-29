<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cvs;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cvs::all()->toArray();
        return response(view('index', compact('data')));
            }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response(view('template-edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'jobtitle' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'field' => 'required',
            'degree' => 'required',
            'school' => 'required',
            'edufrom' => 'required',
            'eduto' => 'required',
            'exptitle' => 'required',
            'company' => 'required',
            'expfrom' => 'required',
            'expto' => 'required',
            'expdes' => 'required',
            'skill' => 'required',
            'proficiency' => 'required'
        ]);
        $data = new cvs;
        $data->fullname = $request->fullname;
        $data->jobtitle = $request->jobtitle;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->description = $request->description;
        $data->fieldofstudy = $request->field;
        $data->degree = $request->degree;
        $data->school = $request->school;
        $data->edufromyear = $request->edufrom;
        $data->edutoyear = $request->eduto;


        $data->experiencetitle = $request->exptitle;
        $data->company = $request->company;
        $data->fromyear = $request->expfrom;
        $data->toyear = $request->expto;
        $data->experiencedescription = $request->expdes;
        $data->skill = $request->skill;
        $data->proficiency = $request->proficiency;


        $data->save();
        return response(view('welcome'));
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
