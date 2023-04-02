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
        $announcement = Announcement::where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact('announcements'));
    }
}
