<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Companies = Companies::latest()->paginate(10);

        return view('Admin', compact('Companies'));
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
        try {
            $request->validate([
                'name' => 'required',
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000' ,
                'website' => 'required|url'
            ]);
            $Companies = new Companies;
            $Companies->name = $request->input('name');
            $Companies->email = $request->input('email');

            $Companies->website = $request->input('website');

            if ($request->hasFile('logo')) {
                // Defining path for logo
                $des_path = 'public/images/logosCompany';
                // from the request store the logo imto variable image
                $image = $request->file('logo');
                // name the requested image with it's original name
                $image_name = $image->getClientOriginalName();
                // Store the logo into the public directory with the original name
                // $path=$request->file('logo')->storeAs($des_path,$image_name);
                // $Companies['logo']=$image_name;
                $Companies->img = $request->file('logo')->storeAs($des_path, $image_name);
            }
            $Companies->save();
            return redirect('admin')->with('message', 'Company Added Successfully');
        } catch (\Exception $e) {
            return redirect('admin')->with('message', 'Something goes wrong', $e);
        }
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
