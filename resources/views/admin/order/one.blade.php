@extends('admin.layouts.master')

@section('content')

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-customView_index-list') }}</div>
        </div>
        <div class="portlet-body">
		
@php 
$arr = unserialize	($obj->body);
@endphp
@foreach ($arr as $key=>$value)
товар: {{$key}},
количество: {{$value}}
<hr/>
@endforeach
		
		
        </div>
	</div>

@endsection