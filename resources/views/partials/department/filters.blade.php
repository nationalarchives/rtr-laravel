<div class="clr">
    <div class="select-float filter-bg">
        <div class="breather pad-medium clr">
            <div class="float-left select-container">
                <label class="margin-top-small margin-bottom-small margin-right-large">Choose
                    department</label>
                <form method="post" id="department" action="{{ route('departments.select') }}">
                    {{ csrf_field() }}
                    <select name="department" class="pad-small">
                        {!! display_filters($department->id, App\Department::all()) !!}
                    </select>
                    <noscript>
                        <input type="submit" value="Submit" class="lighten">
                    </noscript>
                </form>
            </div>
            <div class="float-right select-container">
                <ul role="tablist" class="tabs clr">
                    <li id="panel-1" role="tab" class="selected">Legacy</li>
                    <li id="panel-2" role="tab">Current</li>
                    <li id="panel-3" role="tab">Forecast</li>
                </ul>
            </div>
        </div>
    </div>
</div>