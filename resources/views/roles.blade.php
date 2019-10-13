@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <modalform-component class="m-2 float-right" title="Add Role">
            <permissions-component></permissions-component>
        </modalform-component>
    </div>
</div>

<div class="row">
    <div class="col">
        <table-component></table-component>
    </div>
</div>



@stop
