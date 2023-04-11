<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function welcome ()
    {
        $announcements = Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('welcome' , compact('announcements'));
    }

    public function categoryshow(Category $category)
    {
        $announcements = Announcement::where('is_accepted', true)->where('category_id', $category->id)->get();
        return view('categoryShow', compact('category', 'announcements'));
    }

    public function searchAnnouncements(Request $request)
    {  
        // if ($request->searchCategory){
            
        $announcements = Announcement::search($request->searched)->paginate(10);
    // }
        
        return view('welcome', compact('announcements'));
    }

}
