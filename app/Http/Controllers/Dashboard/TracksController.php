<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Track\TrackRequest;
use App\Models\Course;
use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks = Track::get();
        // dd($tracks);
        return view('dashboard.tracks.index',['tracks'=>$tracks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackRequest $request)
    {
        // dd($request);
        $track = Track::create($request->validated());
        if($track){
            return redirect()->route('tracks.index');
        }
        return 'ياسطا في حاجه غلط وانا مش فاضي اهندلها بعد اذنك اكتب البيانات صح';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $track = Track::where('id',$id)->with('courses')->first();
        // dd($track->courses);
        return view('dashboard.tracks.show',['track'=>$track]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $track = Track::where('id',$id)->first();
        
        return view('dashboard.tracks.edit',['track'=>$track]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrackRequest $request, $id)
    {
        $updateTrack = Track::where('id',$id)->update($request->validated());
        
        return redirect()->route('tracks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTrack = Track::where('id',$id)->delete();
        if($deleteTrack){
            return redirect()->route('tracks.index');
        }
        
        return 'احذف الكورسات اللي موجوده في التراك الاول';
    }
}
