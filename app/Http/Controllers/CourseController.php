<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with("user")
            ->select('courses.*', DB::raw(
                '(SELECT COUNT(DISTINCT(user_id))
            FROM completions
            INNER JOIN episodes ON completions.episode_id = episodes.id
            WHERE episodes.course_id = courses.id) AS participants'
            ))->withCount("episodes")->paginate(12);

        return response()->view("courses.index", compact("courses"));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where("id", $id)->with("episodes")->first();
        $watched = auth()->user()->episodes;


        return response()->view("courses.show", compact("course", "watched"));
    }

    public function toggle(Request $request)
    {
        $id = $request->episodeId;
        $user = auth()->user();

        $user->episodes()->toggle($id);

        return $user->episodes;
    }
}
