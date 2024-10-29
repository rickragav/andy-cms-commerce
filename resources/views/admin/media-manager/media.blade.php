@extends('admin.layouts.master')

<?php
// $title_var = "title_" . @Helper::currentLanguage()->code;
// $title_var2 = "title_" . config('smartend.default_language');
// if ($WebmasterSection->$title_var != "") {
//     $WebmasterSectionTitle = $WebmasterSection->$title_var;
// } else {
//     $WebmasterSectionTitle = $WebmasterSection->$title_var2;
// }
$WebmasterSectionTitle = 'Media Manager';
?>
@section('title', $WebmasterSectionTitle)
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/dashboard/js/datatables/datatables.min.css') }}">
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
            <div class="box-tool box-tool-lg">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="btn primary" href="">
                            <i class="material-icons">&#xe02e;</i>
                            <span class="phone-hide">Add {!! $WebmasterSectionTitle !!}</span>
                        </a>
                    </li>
                    <li class="nav-item inline">
                        <button type="button" class="btn info" id="filter_btn" title="Search" data-toggle="tooltip">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="nav-item inline">
                        <button type="button" class="btn accent" id="import_btn" title="import" data-toggle="tooltip">
                            <i class="fa fa-upload"></i>
                        </button>
                    </li>
                    <li class="nav-item inline dropdown" title="tableColumns" data-toggle="tooltip">
                        <button type="button" class="btn p-x-sm white" data-toggle="dropdown">
                            <i class="material-icons md-24 opacity-8">&#xe3ec;</i>
                        </button>
                        {{-- @include("dashboard.topics.list-columns") --}}
                    </li>
                </ul>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100%" id="media_manager">
                        <thead class="dker">
                            <th style="width:20px;">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th class="text-center" style="width:60px;">Id</th>
                            <th class="text-center" style="width:60px;">Title</th>
                            <th class="text-center" style="width:60px;">Options</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-scripts')
    <script src="{{ asset('assets/dashboard/js/datatables/datatables.min.js') }}"></script>

    <script type="text/javascript">
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function() {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });
        $(document).ready(function() {
            var table_name = "#media_manager";

            console.log('table' + table_name)


            var dataTable = $(table_name).DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "pageLength": 10,
                "lengthMenu": [
                    [10, 20, 30, 50, 75, 100, 200, -1],
                    [10, 20, 30, 50, 75, 100, 200, "All"]
                ],

            })
        })
    </script>
@endpush
