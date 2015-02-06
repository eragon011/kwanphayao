@extends('admins.layout')

@section('content')

    <div ng-app="CategoryTypeApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript" src="/app/admin/category_type/app.js"></script>
    <script type="text/javascript" src="/app/admin/category_type/services.js"></script>
    <script type="text/javascript" src="/app/admin/category_type/controllers.js"></script>

@stop

