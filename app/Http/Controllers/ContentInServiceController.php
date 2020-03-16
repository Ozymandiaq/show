<?php

namespace App\Http\Controllers;

use App\ContentInService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Storage;

class ContentInServiceController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentInServices = contentInService::all()->reverse();
        return view('content_for_services', compact('contentInServices'));
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

        if($request->file('video')){
            $imgInServicePath = $request->file('image')->store('uploads','public');
            $videoInServicePath = $request->file('video')->store('uploads','public');

            $contentInService = new contentInService;
            $contentInService->category_name=$request->category_name;
            $contentInService->img_url=$imgInServicePath;
            $contentInService->video_url=$videoInServicePath;
            //$contentInService->is_active=$request->is_active;

            $contentInService->save();
        } else {
            $imgInServicePath = $request->file('image')->store('uploads','public');

            $contentInService = new contentInService;
            $contentInService->category_name=$request->category_name;
            $contentInService->img_url=$imgInServicePath;
            //$contentInService->is_active=$request->is_active;

            $contentInService->save();

        }


        return redirect()->route('content_for_services.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContentInService  $contentInService
     * @return \Illuminate\Http\Response
     */
    public function show(ContentInService $contentInService)
    {
        //$contentInServices = contentInService::all()->reverse();
        return redirect()->route('content_for_services.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContentInService  $contentInService
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentInService $contentInService)
    {
        return view('admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentInService  $contentInService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentInService $contentInService)
    {
        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContentInService  $contentInService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //var_dump($id); die;

        // $id = $request->id;
        // $result = App\ContentInService::where('id', $id)->first();
        // $result->delete();
        //contentInService::where('id', true)->delete();
        // var_dump($contentInService); die;

        $contentInService = contentInService::find($id);
        // $img_url = $contentInService->img_url;
        // $video_url = $contentInService->video_url;

        // if ($img_url) {
        //     $img=str_replace('uploads/','',$contentInService->img_url);
        //     Storage::delete($img);

            // if ($video_url) {
            //     $video=str_replace('uploads/','',$contentInService->video_url);
            //     Storage::delete($video);

            // }
        //}
        // var_dump('asas');die;
        $contentInService->delete();

        //return new contentInService($contentInService);

        return redirect()->route('content_for_services.index');
    }
}
