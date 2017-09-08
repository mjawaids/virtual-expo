<?php

namespace App\Http\Controllers;

use App\Stand;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    public function __construct()
    {
        // user has to be logged in to reserve stand
        $this->middleware('auth');
    }

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
    public function create(Stand $stand)
    {
        return view('reservation', compact('stand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get stand id
        $stand = Stand::find( request('stand') );
        
        // check if stand is not already reserved
        if($stand->reserved)
        {
            session()->flash('error', 'This stand is already reserved.');
            return back();
        }

        // TODO: validation

        // get company data from request
        $company_data = $this->getCompanyData($request);
        
        // get already saved company if any 
        $company = Company::getCompanybyName( $company_data['name'] );

        // check if company exists
        if(!isset($company))
        {
            // save the company details
            $company = Company::create( $company_data );
        }
        
        // update stand reservation status
        $stand->reserve($company);

        session()->flash('success', 'Stand has been reserved.');

        return redirect("/event/{$stand->event_id}");
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

    /*
    *   Save the logo file on filesystem
    */
    private function saveLogo($logo)
    {
        $logoFileName = $logo->hashName();
        $logo->move(public_path() . '/storage/images/', $logoFileName);

        return $logoFileName;
    }

    /*
    *   Get the company data from submitted form request
    */
    private function getCompanyData(Request $request)
    {
        // save logo file
        $logo = $request->hasFile('logo') ? request('logo') : NULL;
        $logoFileName = $this->saveLogo($logo);
        
        // return company details
        return [
        'name'           => request('name'),
        'logo'           => $logoFileName,
        'admin'          => request('admin'),
        'email'          => request('email'),
        'phone'          => request('phone'),
        'website'        => request('website'),
        'facebook'       => request('facebook'),
        'twitter'        => request('twitter'),
        'marketing_doc'  => $request->hasFile('marketing_doc') ? 
                                $request->marketing_doc->store('docs') : NULL
        ];
    }
}
