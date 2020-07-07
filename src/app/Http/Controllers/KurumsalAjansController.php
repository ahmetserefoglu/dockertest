<?php

namespace App\Http\Controllers;

use App\KurumsalAjans;
use App\User;
use Illuminate\Http\Request;

class KurumsalAjansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kurumsalajanslar = KurumsalAjans::paginate(5);

        return view('kurumsalajans.index',['kurumsalajanslar'=>$kurumsalajanslar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();

        return view('kurumsalajans.create',['users'=>$users]);
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
        $this->validate($request, [
    		'subject' => 'required',
    		'createdBy' => 'required',
            'fileName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $file=$request->fileName;
        $filename=$file->getClientOriginalName();
        
        $filePath = 'gallery/images/';
        
        if (!file_exists('gallery/images')) {
            mkdir('gallery/images',0777,true);
        }

        $file->move(public_path($filePath), $filename);
        $input['subject'] = $request->subject;
        $input['createdBy'] = $request->createdBy;
        $input['fileName'] = $filename;
        $input['filePath'] = $filePath;

        KurumsalAjans::create($input);

        $kurumsalajanslar = KurumsalAjans::paginate(5);

        return redirect()->intended('kurumsalajans')->with('success','Success KurumsalAjans Create','kurumsalajanslar','$kurumsalajanslar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KurumsalAjans  $kurumsalAjans
     * @return \Illuminate\Http\Response
     */
    public function show(KurumsalAjans $kurumsalAjans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KurumsalAjans  $kurumsalAjansId
     * @return \Illuminate\Http\Response
     */
    public function edit($kurumsalAjansId)
    {
        //
        $kurumsalajans = KurumsalAjans::find($kurumsalAjansId);

        $users = User::all();

        return view('kurumsalajans.edit',['users'=>$users,'kurumsalajans'=>$kurumsalajans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KurumsalAjans  $kurumsalAjansId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kurumsalAjansId)
    {
        //
         //
         $file=$request->fileName;
         if($file != ''){

            $this->validate($request, [
                'subject' => 'required',
                'createdBy' => 'required',
                'fileName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
                      
            $filename=$file->getClientOriginalName();
            
            $filePath = 'gallery/images/';
            
            if (!file_exists('gallery/images')) {
                mkdir('gallery/images',0777,true);
            }
    
            $file->move(public_path($filePath), $filename);

            $input['fileName'] = $filename;
            $input['filePath'] = $filePath;

         }else{

            $this->validate($request, [
                'subject' => 'required',
                'createdBy' => 'required',
            ]);

            $kurumsalajans = KurumsalAjans::find($kurumsalAjansId);
            $input['fileName'] = $kurumsalajans[0]->fileName;
            $input['filePath'] = $kurumsalajans[0]->filePath;

        }
        
        
        
        $input['subject'] = $request->subject;
        $input['createdBy'] = $request->createdBy;
        

        KurumsalAjans::whereId($kurumsalAjansId)->update($input);

        $kurumsalajanslar = KurumsalAjans::paginate(5);

        return redirect()->intended('kurumsalajans')->with('success','Success KurumsalAjans Update','kurumsalajanslar','$kurumsalajanslar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KurumsalAjans  $kurumsalAjansId
     * @return \Illuminate\Http\Response
     */
    public function destroy($kurumsalAjansId)
    {
        //
        KurumsalAjans::whereId($kurumsalAjansId)->delete();

        $kurumsalajanslar = KurumsalAjans::paginate(5);

        return redirect()->intended('kurumsalajans')->with('success','Success KurumsalAjans Delete','kurumsalajanslar','$kurumsalajanslar');
    }
}
