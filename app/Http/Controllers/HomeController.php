<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Facility;
use App\Models\News;
use App\Models\Project;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::where('position', 'home')->orderBy('order', 'desc')->get();
        $projects = Project::get();
        $services = Service::get();
        $news = News::get();

        return view('front.home', compact('slider', 'projects', 'services', 'news'));
    }
    public function aboutUs()
    {
        $testimonial = Testimonial::limit(2)->get();
        return view('front.aboutUs', compact('testimonial'));
    }
    public function partners()
    {
        $projects = Project::get();
        return view('front.partners', compact('projects'));
    }
    public function project($id)
    {
        $project = Project::find($id);
        $projects = Project::get();
        $lastProp = Project::latest()->get();
        return view('front.single_project', compact('project', 'projects', 'lastProp'));
    }
    public function agent($id)
    {
        $agent = Agent::find($id);

        $lastProp = Project::where('agent_id', $id)->take(3)->get();
        return view('front.single_agent', compact('agent', 'lastProp'));
    }
    public function news(Request $request)
    {

        if ($request->has('name'))
            $news = News::where('title_en', 'like', '%' . $request->name . '%')->orWhere('title_ar', 'like', '%' . $request->name . '%')->get();
        elseif ($request->has('cat_id'))
            $news = News::where('category_id', $request->cat_id)->get();
        elseif ($request->has('search_month') && $request->has('search_year'))
            $news = News::whereYear('created_at', '=', $request->search_year)
                ->whereMonth('created_at', '=',  $request->search_month)
                ->get();
        else
            $news = News::latest()->get();
        $last_news = News::latest()->take(3)->get();
        $comments = Comment::latest()->take(5)->get();
        return view('front.news', compact('news', 'last_news', 'comments'));
    }
    public function news_details($id)
    {
        $news = News::find($id);
        $all_news = News::latest()->take(3)->get();
        $testimonial = Testimonial::latest()->take(1)->get();

        return view('front.news_details', compact('news', 'all_news','testimonial'));
    }
    public function saveComment(Request $request)
    {
        $input = $request->all();

        $saved = Comment::create($input);
        return redirect()->back();
        // if ($saved) {

        //     return response()->json(['message' => 'Success!']);

        // }else
        // {
        //     return response()->json(['message' => 'Error!']);
        // }
    }
    public function reserveProject(Request $request)
    {
        $input = $request->all();

        $saved = Reservation::create($input);
        
        if ($saved) {

            return response()->json(['message' => 'Success!']);

        }else
        {
            return response()->json(['message' => 'Error!']);
        }
    }
    public function facility()
    {
        $facilities = Facility::get();
        return view('front.facility', compact('facilities'));
    }
    public function courses()
    {

        return view('front.course');
    }
    public function registerCourse(Request $request)
    {

        $input = $request->all();
        $saved = Course::create($input);
        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
    public function contactUs()
    {

        return view('front.contactUs');
    }
    public function contact_Us(Request $request)
    {

        $input = $request->all();

        $saved = Contact::create($input);

        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
}
