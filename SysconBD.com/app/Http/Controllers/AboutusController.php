<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus=Aboutus::all();
        //   dd($aboutus);
        return view("pages.backend.aboutus.index_aboutus",["aboutus"=>$aboutus]);
    }


    public function store(Request $request){
        $aboutus=new Aboutus; 
        $aboutus->title=$request->txtTitle;
        $aboutus->heading=$request->txtHeading;
        $aboutus->details=$request->txtDetails;
       
        if(isset($request->filePhoto)){
            $aboutus->image=$request->filePhoto;
            }

        $aboutus->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
			$imageName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$aboutus->image=$imageName;
			$aboutus->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $aboutus->save();     
        return back()->with('success','Created Successfully.');
          
    }



    public function edit($id){
		$aboutus=Aboutus::find($id);
		return response()->json([
			'status'=>200,
			'aboutus'=>$aboutus
		]);
	}


    public function update(Request $request){
        //		$aboutus->update($request->all());
            $aboutusid=$request->input('cmbAboutusId');
            $aboutus = Aboutus::find($aboutusid);
            $aboutus->id=$request->cmbAboutusId;
            $aboutus->title=$request->txtTitle;
            $aboutus->heading=$request->txtHeading;
            $aboutus->details=$request->txtDetails;
          
            if(isset($request->filePhoto)){
                $aboutus->image=$request->filePhoto;
                }

            $aboutus->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = (rand(100,1000)).'.'.$request->filePhoto->extension();
                $aboutus->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
            $aboutus->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }
}
