<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MediaManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.media-manager.media');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media-manager.add-media');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('media_file')) {
            $mediaFile = new MediaManager;
            $mediaFile->user_id = Auth::user()->id;

            $mediaFile->media_file = $request->file('media_file')->store('uploads/media');
            $mediaFile->media_size = $request->file('media_file')->getSize();
            $mediaFile->media_name = $request->file('media_file')->getClientOriginalName();
            $mediaFile->media_extension = $request->file('media_file')->getClientOriginalExtension();

            if (getFileType(Str::lower($mediaFile->media_extension)) != null) {
                $mediaFile->media_type = getFileType(Str::lower($mediaFile->media_extension));
            } else {
                $mediaFile->media_type = "unknown";
            }

            $mediaFile->save();
            return true;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function files(){
        $searchKey  = null;
        $type       = null;

        $mediaFiles = MediaManager::query()->get();

        return [
            'status' => true,
            // 'recentFiles' => view('backend.inc.media-manager.recent', compact('recentFiles'))->render(),
            // 'mediaFiles' => view('backend.inc.media-manager.previous', compact('mediaFiles'))->render(),
            'mediaQuery' => $mediaFiles
        ];
    }
}
