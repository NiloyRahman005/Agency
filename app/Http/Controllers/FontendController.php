<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cant_Miss_Event;
use App\Models\Content;
use App\Models\Event;
use App\Models\Featured_content;
use App\Models\OurServices;
use App\Models\SeconSectionCards;
use App\Models\SectionSubTitle;
use App\Models\SectionTitle;
use App\Models\TaskStory;
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
        return view('homepage',compact('sectionSubTitle','sectionTitle','video','content','banner','secondSection','ourServices','brands'));
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
        return view('TaskStory',compact('taskStory'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }
    public function blogDetails($slug)
    {
        // return $slug;
        return Blog::where('slug',$slug)->get();
    }
}
