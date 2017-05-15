@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col starts-at-full box clr">
            <div class="heading-holding-banner">
                <h1><span><span>{{ trans('editorial.home.title') }}</span></span></h1>
            </div>
            <div class="breather">
                <p>Government departments that transfer records to The National Archives provide data on the volume and
                    transfer status of the records they hold. This data has been collected in Spring and Autumn each
                    year, beginning in Autumn 2012. From 2017, departments will provide data once a year (starting from
                    February 2017). The National Archives will use data collected from previous surveys to monitor
                    compliance and assist departments in managing the transfer process and identifying need for
                    additional resources.</p>
                <h2>Access the record transfer report</h2>
                <p>The file shows the data provided by Government departments that transfer records to The National
                    Archives. The 21 departments that transfer 90% of the records sent to The National Archives each
                    year are listed in A-Z order, with the data from the remaining departments included in the report
                    then also listed alphabetically.</p>
                <p><a href="{{ route('departments.index') }}">Visual display</a></p>
            </div>
        </div>
    </div>

@endsection
