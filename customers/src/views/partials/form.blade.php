@extends('templates::layouts.default')

@section('content')
@include('customers::partials.mainmenu')
<section class="panel panel-default">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Horizontal Form</strong></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <form class="form-horizontal ng-pristine ng-valid" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success btn-w-md">Sign in</button>
                            </div>
                        </div>
                    </form>  

                </div>
            </div>
        </div>
    </section>
    @stop