@extends('admin.layouts.master')

@section('content')
    @include('admin.media-manager.main-content-media')
    @include('admin.media-manager.add-media')
    @include('admin.media-manager.edit-media')
@endsection


@section('scripts')
    <script>
        "use strict";

        // runs when the document is ready --> for media files
        $(document).ready(function() {
            getMediaFiles();
        });
    </script>
@endsection
