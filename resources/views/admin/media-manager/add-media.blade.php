@extends('admin.layouts.master')

<?php
// $title_var = "title_" . @Helper::currentLanguage()->code;
// $title_var2 = "title_" . config('smartend.default_language');
// if ($WebmasterSection->$title_var != "") {
//     $WebmasterSectionTitle = $WebmasterSection->$title_var;
// } else {
//     $WebmasterSectionTitle = $WebmasterSection->$title_var2;
// }
$WebmasterSectionTitle = 'New Photo';
?>
@section('title', $WebmasterSectionTitle)
@push('after-styles')
@endpush
@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>{!! $WebmasterSectionTitle !!}</h3>
                <small>
                    <a href="">Home</a> /
                    <a>{!! $WebmasterSectionTitle !!}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body p-a-2">

                <div class="form-group row">
                    <label for="icon" class="col-sm-2 form-control-label">Photo</label>
                    {{-- <div class="col-sm-10">
                        {!! Form::file('customField', [
                            'class' => 'form-control',
                            'id' => 'customField',
                            'required' => '',
                            'accept' => 'image/*',
                        ]) !!}
                    </div> --}}
                    <div class="col-sm-10 uppy-drag-drop-area"></div>

                </div>
                <div class="form-group row">
                    <label for="icon" class="col-sm-2 form-control-label">Tags</label>
                    <div class="col-sm-10">
                        {!! Form::text('tags', '', ['autocomplete' => 'off', 'class' => 'form-control form-tags']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="link_status" class="col-sm-2 form-control-label">Status</label>
                    <div class="col-sm-10">
                        <select name="popup_id" class="form-control c-select">
                            <option value="">- - Select - -</option>
                            <option value="1">Active</option>
                            <option value="0">DeActive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row m-t-md">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-md btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> Save</button>
                        <a href="" class="btn btn-md btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i>Cancel</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $('.form-tags').tagsInput({
            placeholder: 'Type tag and click enter',

        });
    </script>
@endpush
