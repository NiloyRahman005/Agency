<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Content;
use App\Models\FeaturesOfServices;
use App\Models\Logo;
use App\Models\OurServices;
use App\Models\SeconSectionCards;
use App\Models\SectionSubTitle;
use App\Models\SectionTitle;
use App\Models\TaskStory;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    //
    public function logo()
    {
        $Logo = Logo::first();
        return view('admin.layouts.dashboard.homepage.logo', compact('Logo'));
    }
    public function logoStore(Request $request)
    {

        // Validate the form
        $request->validate([
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Define the folder path
        $folderPath = public_path('logo');

        // Create folder if not exists
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Handle the uploaded image
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'logo/' . $imageName;

            // Check if a logo already exists (assuming only one row in Logo table)
            $existingLogo = Logo::first();

            if ($existingLogo) {
                // Delete old logo file if exists
                $oldImagePath = public_path($existingLogo->logo);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }

                // Update existing logo record
                $existingLogo->update([
                    'logo' => $imagePath,
                ]);
            } else {
                // Create new logo record
                Logo::create([
                    'logo' => $imagePath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Logo saved successfully!');
    }
    public function sectionTitle()
    {
        $sectionSubTitle = SectionSubTitle::first();
        $SectionTitle = SectionTitle::first();

        return view('admin.layouts.dashboard.homepage.topSectionTitle', compact('sectionSubTitle', 'SectionTitle'));
    }
    public function secSubTitlePost(Request $request)
    {
        $request->validate([
            'section_sub_title' => 'required'
        ]);
        $sectionSubTitle = SectionSubTitle::first();

        if (!empty($sectionSubTitle->sec_sub_title)) {
            $sectionSubTitle->update([
                'sec_sub_title' => $request->section_sub_title
            ]);
        } else {
            SectionSubTitle::create([
                'sec_sub_title' => $request->section_sub_title
            ]);
        }
        return back()->with('success', "Successfully Created");
    }
    public function secTitlePost(Request $request)
    {
        $request->validate([
            'section_title' => 'required'
        ]);
        $SectionTitle = SectionTitle::first();

        if (!empty($SectionTitle->sec_title)) {
            $SectionTitle->update([
                'sec_title' => $request->section_title
            ]);
        } else {
            SectionTitle::create([
                'sec_title' => $request->section_title
            ]);
        }
        return back()->with('success', "Successfully Created");
    }
    public function Video()
    {
        $video = Video::first(); // assuming only one video record
        return view('admin.layouts.dashboard.homepage.video', compact('video'));
    }
    public function videoStore(Request $request)
    {
        // 1. Validation
        $request->validate([
            'video' => 'required|mimes:mp4|max:51200', // 50MB max size (optional limit)
        ]);

        // 2. Create / check 'public/video' folder
        $destinationPath = public_path('video');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        // 3. Handle file upload
        $file = $request->file('video');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);
        $videoPath = 'video/' . $fileName;

        // 4. Store in DB using Video model
        // Assuming you have only one video record (like a singleton)
        $video = Video::first();

        if ($video) {
            // Delete old video file if exists
            if (File::exists(public_path($video->video_path))) {
                File::delete(public_path($video->video_path));
            }

            // Update existing record
            $video->update([
                'video' => $videoPath,
            ]);
        } else {
            // Create new record
            Video::create([
                'video' => $videoPath,
            ]);
        }

        return back()->with('success', 'Video uploaded successfully!');
    }
    public function content()
    {
        $content = Content::first(); // assuming only one content row
        return view('admin.layouts.dashboard.homepage.content', compact('content'));
    }
    public function contentPost(Request $request)
    {
        // 1. Validate request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // 2. Check if content already exists (assuming single record)
        $content = Content::first();

        if ($content) {
            // Update existing record
            $content->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);
        } else {
            // Create new record
            Content::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);
        }

        // 3. Return response
        return back()->with('success', 'Content saved successfully.');
    }
    public function banner()
    {
        $banner = Banner::first();
        return view('admin.layouts.dashboard.homepage.banner', compact('banner'));
    }
    public function bannerPost(Request $request)
    {
        // Validate the form
        $request->validate([
            'banner' => 'required|image|mimes:jpg,jpeg,png,webp|',
        ]);

        // Define the folder path
        $folderPath = public_path('banner');

        // Create folder if not exists
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Handle the uploaded image
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'banner/' . $imageName;

            // Check if a logo already exists (assuming only one row in Logo table)
            $existingBanner = Banner::first();

            if ($existingBanner) {
                // Delete old logo file if exists
                $oldImagePath = public_path($existingBanner->banner);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }

                // Update existing logo record
                $existingBanner->update([
                    'banner' => $imagePath,
                ]);
            } else {
                // Create new logo record
                Banner::create([
                    'banner' => $imagePath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Banner saved successfully!');
    }
    public function secondSectionCards()
    {
        $secondSection =  SeconSectionCards::all();
        return view('admin.layouts.dashboard.SecondSection.index', compact('secondSection'));
    }
    public function secondSectionCardsInsert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        SeconSectionCards::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return back()->with('success', "Successfully Created");
    }
    public function sectondSecUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        SeconSectionCards::find($request->id)->update($request->all());
        return back()->with('success', "Successfully Updated");
    }
    public function sectondSecdelete($id)
    {
        SeconSectionCards::findOrFail($id)->delete();
        return back()->with('success', "Successfully Deleted");
    }
    public function ourServices()
    {
        $ourServices = OurServices::all();
        return view('admin.layouts.dashboard.forthSection.index', compact('ourServices'));
    }
    public function postContent(Request $request)
    {
        // Validate the form
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|',
        ]);

        // Define the folder path
        $folderPath = public_path('service');

        // Create folder if not exists
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }
        // Handle the uploaded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'image/' . $imageName;
            OurServices::create([
                'title' => $request->title,
                'image' => $imagePath,
            ]);
        }

        return redirect()->back()->with('success', 'Successfully created service !');
    }
    public function postContentUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $ourServices = OurServices::findOrFail($request->id);
        $ourServices->title = $request->title;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($ourServices->image && file_exists(public_path('service/' . $ourServices->image))) {
                unlink(public_path('service/' . $ourServices->image));
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('service/'), $imageName);

            $ourServices->image = $imageName;
        }

        $ourServices->save();

        return redirect()->back()->with('success', 'Services updated successfully!');
    }
    public function postContentdelete($id)
    {
        OurServices::find($id)->delete();
        return back()->with('success', "Successfully Deleted");
    }
     public function serviceContentAdd($id)
     {
        $ourServices = OurServices::findOrFail($id);
        $FeaturesOfServices = FeaturesOfServices::where('service_id',$id)->get();
        return view('admin.layouts.dashboard.forthSection.content_add_page',
        compact('ourServices','FeaturesOfServices'));

     }
    public function serviceBasedFeaturePost(Request $request)
    {
    // Validate request (optional but recommended)
    $request->validate([
    'service_id' => 'required|integer|exists:our_services,id',
    'sections' => 'required|array',
    'sections.*.title' => 'required|string|max:255',
    'sections.*.content' => 'required|string',
    ]);

    $serviceId = $request->service_id;

    foreach ($request->sections as $section) {
    FeaturesOfServices::create([
    'service_id' => $serviceId,
    'title' => $section['title'],
    'content' => $section['content'],
    ]);
    }

    return back()->with('success',"Successfully Created");
    }
   public function featuresEdit(Request $request)
   {
   $id = $request->id;
   $bagName = "feature_$id";

   // Create a new Validator instance
   $validator = Validator::make($request->all(), [
   'title' => 'required',
   'content' => 'required',
   ]);

   // Check if validation fails
   if ($validator->fails()) {
   // Redirect back with errors and the input, using a named error bag
   return back()->withErrors($validator, $bagName)->withInput();
   }

   // If validation passes, update the record
   FeaturesOfServices::find($id)->update($request->only('title', 'content'));

   return back()->with('success', "Successfully Updated");
   }
   public function featuresDelete($id)
   {
    FeaturesOfServices::findOrFail($id)->delete();
    return back()->with('success', "Successfully Deleted");
   }
    public function brands()
    {
        $brands = Brand::all();
        return view('admin.layouts.dashboard.forthSection.brand', compact('brands'));
    }
    public function brandPost(Request $request)
    {
        $request->validate([
            'brand_name' => 'required'
        ]);
        Brand::create($request->all());
        return back()->with('success', "Successfully Created");
    }
    public function brandEdit(Request $request)
    {
        $request->validate([
            'brand_name' => 'required'
        ]);
        Brand::find($request->id)->update($request->all());
        return back()->with('success', "Successfully Created");
    }
    public function brandDelete($id)
    {
        Brand::findOrFail($id)->delete();
        return back()->with('success', "Successfully Deleted");
    }
    public function ourService()
    {
        return view('admin.layouts.dashboard.Service.index');
    }
   public function taskStory()
   {
   $taskStory = TaskStory::first(); // only one row
   return view('admin.layouts.dashboard.task-story.index', compact('taskStory'));
   }
    public function taskStoryPost(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Find first record, or create a new instance
        $taskStory = TaskStory::first() ?? new TaskStory();

        $taskStory->designation = $request->designation;
        $taskStory->content = $request->content;


        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($taskStory->image && file_exists(public_path($taskStory->image))) {
                unlink(public_path($taskStory->image));
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'taskStory/' . $imageName; // relative path
            $image->move(public_path('taskStory/'), $imageName);

            // Save full path (relative to public/)
            $taskStory->image = $imagePath;
        }

        $taskStory->save();

        return redirect()->back()->with('success', 'Task story saved successfully!');
    }
    public function blog()
    {
       
        return view('admin.layouts.dashboard.Blog.index');

    }
public function postBlog(Request $request)
{
// 1. Validate the request
$request->validate([
'title' => 'required|string|max:255',
'content' => 'required|string',
'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
'meta_title' => 'nullable|string|max:255',
'meta_description' => 'nullable|string|max:500',
'meta_keywords' => 'nullable|string',
]);

// 2. Handle image upload
$imagePath = null;
if ($request->hasFile('image')) {
$image = $request->file('image');
$imageName = time() . '_' . \Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
$image->move(public_path('blogs'), $imageName);
$imagePath = 'blogs/' . $imageName;
}

// 3. Generate a unique slug
$slug = \Str::slug($request->title);
$count = Blog::where('slug', 'LIKE', "$slug%")->count();
if ($count > 0) {
$slug = $slug . '-' . ($count + 1);
}

// 4. Save blog post to database
$blog = new Blog();
$blog->title = $request->title;
$blog->slug = $slug; // Insert slug here
$blog->content = $request->content;
$blog->image = $imagePath;
$blog->meta_title = $request->meta_title;
$blog->meta_description = $request->meta_description;
$blog->meta_keywords = $request->meta_keywords;
$blog->save();

// 5. Redirect back with success message
return redirect()->back()->with('success', 'Blog post created successfully!');
}
public function blogList()
{   
    $blog = Blog::all();
    return view('admin.layouts.dashboard.Blog.list',compact('blog'));

}
public function blogsEdit($id)
{
    $blog = Blog::findOrFail($id);
    
    return view('admin.layouts.dashboard.Blog.edit',compact('blog'));
    // return $id;
}
public function blogEditPost(Request $request)
{
    return $request->all();
    //  // 1. Validate the request
     $request->validate([
     'title' => 'required|string|max:255',
     'content' => 'required|string',
     'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
     'meta_title' => 'nullable|string|max:255',
     'meta_description' => 'nullable|string|max:500',
     'meta_keywords' => 'nullable|string',
     ]);

     // 2. Find blog
     $blog = Blog::findOrFail($request->id);

     // 3. Handle image update
     if ($request->hasFile('image')) {
     // Delete old image if exists
     if ($blog->image && File::exists(public_path($blog->image))) {
     File::delete(public_path($blog->image));
     }

     $image = $request->file('image');
     $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('blogs'), $imageName);
     $blog->image = 'blogs/' . $imageName;
     }

     // 4. Update slug if title changed
     if ($blog->title !== $request->title) {
     $slug = Str::slug($request->title);
     $count = Blog::where('slug', 'LIKE', "$slug%")->where('id', '!=', $blog->id)->count();
     if ($count > 0) {
     $slug = $slug . '-' . ($count + 1);
     }
     $blog->slug = $slug;
     }

     // 5. Update other fields
     $blog->title = $request->title;
     $blog->content = $request->content;
     $blog->meta_title = $request->meta_title;
     $blog->meta_description = $request->meta_description;
     $blog->meta_keywords = $request->meta_keywords;

     $blog->save();

     // 6. Redirect with success
     return redirect()->back()->with('success', 'Blog post updated successfully!');
}
   
}
