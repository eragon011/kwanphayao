@extends('admins.layout')

@section('content')

    <div ng-app="CategoryApp">

        <div ng-controller="ListCtrl">

            <div class="row">
                <div class="pull-left">
                    <button type="button" class="btn btn-primary">Create New Category</button>
                </div>
                <div class="pull-right">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..."/>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Go!</button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </form>
                </div>
            </div>

            <div class="row">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>ประวัติศาสตร์</td>
                        <td>no-structure</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn">Edit</button>
                                <button type="button" class="btn">Delete</button>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="pull-left">
                    Showing 1 to 10 of 57 entries
                </div>
                <div class="pull-right">
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>


    </div>

@stop

@section('javascript')

    <script type="text/javascript">
        //app
        var app = angular.module('CategoryApp', []);
    </script>

    <script type="text/javascript">
        //services
    </script>

    <script type="text/javascript">
        //controllers

        app.controller('ListCtrl', function ($scope) {
            console.log("ListCtrl Start...");
        })

    </script>

@stop

