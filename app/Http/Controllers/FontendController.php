<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cant_Miss_Event;
use App\Models\ContactUs;
use App\Models\Content;
use App\Models\Event;
use App\Models\Featured_content;
use App\Models\GlobalOperation;
use App\Models\OurServices;
use App\Models\SeconSectionCards;
use App\Models\SectionSubTitle;
use App\Models\SectionTitle;
use App\Models\TaskStory;
use App\Models\TeamMembers;
use App\Models\Top_Slider;
use App\Models\Video;
use App\Models\You_tube;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    //
    public function index()
    {
        $sectionSubTitle = SectionSubTitle::first();
        $sectionTitle = SectionTitle::first();
        $video = Video::first();
        $content = Content::first();
        $banner = Banner::first();
        $secondSection = SeconSectionCards::all();
        $ourServices = OurServices::all();
        $brands = Brand::all();
        $globalOperations = GlobalOperation::all();
        return
        view('homepage',compact('sectionSubTitle','sectionTitle','video','content','banner','secondSection','ourServices','brands','globalOperations'));
    }
    public function ourServiceDetails($name)
    {

       $ourService = OurServices::select('id', 'title', 'image')
       ->where('title', $name)
       ->with(['features:id,service_id,title,content'])
       ->firstOrFail();

        return view('OurServiceDetails',compact('ourService'));
    }
    public function Ta_ask_Story()
    {
         $taskStory = TaskStory::first();
         $teamMembers = TeamMembers::all();
        return view('TaskStory',compact('taskStory','teamMembers'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }
    public function blogDetails($slug)
    {
        // return $slug;
        $blogDetails =  Blog::where('slug',$slug)->firstOrFail();
        return view('blogDetails',compact('blogDetails'));
    }
    public function contactUs()
    {
        return view('contactUs');
    }
    public function contactUsPost(Request $request)
    {
         // 1. Validate form input
         $validated = $request->validate([
         'name' => 'required|string|max:100',
         'email' => 'required|email|max:255',
         'message' => 'required|string|max:5000',
         ]);

         // 2. Save to database
         ContactUs::create($validated);
        

         // 3. Redirect with success
         return redirect()->back()->with('success', 'Your message has been sent successfully! We will be contact Soon
         🤗🤗🤗!!');
    }
}
