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
        if ($request->searchCategory != "0" && $request->searched != null){
            
            $announcements = Announcement::search($request->searched)->where('is_accepted', true)->where('category_id', $request->searchCategory)->paginate(10);
        }
        else if ($request->searched === null){
            
            $announcements = Announcement::where('is_accepted', true)->where('category_id', $request->searchCategory)->paginate(10);
            
        }
        else {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        }
        
        // $request->session()->now(['searched', $request->searched]);
        return view('announcements.index', compact('announcements'));
    }
}
