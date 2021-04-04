<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use Illuminate\Http\Request;

use App\Models\Gender;
use App\Models\MaritalStatus;

use Illuminate\Support\Facades\Auth;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Personal Details";
        return view('pages.personal_details.index', compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create Personal Details";
        $genders = Gender::pluck('name', 'id');
        $marital_statuses = MaritalStatus::pluck('name', 'id');

        return view('pages.personal_details.create', compact('page_title', 'genders', 'marital_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffixname' => 'nullable',
            'middle_initial' => 'nullable',
            'birth_date' => 'required|date',
            'gender_id' => 'required|integer',
            'marital_status_id' => 'required|integer',
            'personal_email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required',
            'emerg_person' => 'nullable',
            'emerg_contact_no' => 'nullable',
            'sss_no' => 'required',
            'tin_no' => 'nullable',
            'philhealth_no' => 'nullable',
            'pagibig_no' => 'nullable',
        ],[
            'gender_id.required' => 'Please select gender',
            'marital_status_id.required' => 'Please select marital status',
        ]);

        $data['created_by'] = Auth::id();
        $p = PersonalDetail::create($data);

        return redirect()->route('personal_details.edit', $p->id)->with('success', 'Personal details created, please update the profile image and signature file.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalDetail $personalDetail)
    {
        $page_title = $personalDetail->firstname.' '.$personalDetail->middle_initial.'. '.$personalDetail->lastname.(is_null($personalDetail->suffixname) ? null : ', '.$personalDetail->suffixname);
        $genders = Gender::pluck('name', 'id');
        $marital_statuses = MaritalStatus::pluck('name', 'id');

        return view('pages.personal_details.edit', compact('page_title', 'genders', 'marital_statuses', 'personalDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetail $personalDetail)
    {
        //
    }

    public function profileImageUpload(Request $request) {
        
    }
}
