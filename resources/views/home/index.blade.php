@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col starts-at-full box clr">
            <div class="heading-holding-banner">
                <h1><span><span>{{ trans('editorial.home.title') }}</span></span></h1>
            </div>
            <div class="breather">
                <p>{{ trans('editorial.home.first_paragraph') }}</p>
                <h2>{{ trans('editorial.home.sub_title') }}</h2>
                <p>{{ trans('editorial.home.sub_title_paragraph') }}</p>
                <p><a href="{{ route('departments.index') }}">{{ trans('editorial.home.link_text') }}</a></p>
            </div>
        </div>
    </div>

@endsection
