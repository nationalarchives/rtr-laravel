@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col starts-at-full box clr">
            <div class="heading-holding-banner">
                <h1><span><span>{{ trans('editorial.departments.title') }}</span></span></h1>
            </div>
            <div class="breather">
                @include('partials.department.introduction')
            </div>
            @include('partials.department.filters')
            <div class="breather">

                @foreach($department->transfers as $transfer)

                    @include('partials.department.static_visualisation', [
                    'department' => $department,
                    'transfer' => $transfer,
                    'title' => trans('editorial.departments.visualisation.titles.legacy')])

                @endforeach

            </div>
            <!-- end breather -->
        </div>
    </div>

@endsection



