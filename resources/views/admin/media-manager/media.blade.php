@extends('admin.layouts.master')

@section('content')
<h1>Media Manager</h1>
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
