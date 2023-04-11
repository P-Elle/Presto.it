<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement()
    {
        return view('announcements.create');
    }

    public function showAnnouncement($announcement)
    {   $announcement = Announcement::find($announcement);
        return view('announcements.show', compact('announcement'));
    }

    public function indexAnnouncement(){
        $announcements = Announcement::where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact('announcements'));
    }

    public function searchAnnouncements(Request $request)
    {  
        // if ($request->searchCategory){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->where('category_id', 3)->paginate(10);;
    
        // $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
    // }
        
        return view('announcements.index', compact('announcements'));
    }
}
