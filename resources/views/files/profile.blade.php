@extends('layouts.master')


@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Profile Page</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <!-- row -->
    <div class="row">
        @if( isset( Auth::user()->facility_type))

            <div class="col-md-4">
                @else
                    <div class="col-md-4 offset-4">
                        @endif
                        <div class="card">
                            <div class="card-img-overlap">
                                <a href="#modal-1"  data-toggle="modal" data-target="#modal-1" class="user-icon user-card-phone"><i class="fa fa-fw fa-pencil"></i></a>
                                <img class="card-img-top" src="{{ asset('assets/images/Users/avatar-1.jpg')}}" alt="Card image cap" />
                            </div>
                            <div class="card-block padd-0 translateY-50 text-center">
                                <div class="card-avatar style-2">
                                    <img src="{{ asset('assets/images/Users/avatar-1.jpg')}}" class="img-circle img-responsive" alt="" />

                                </div>
                                <i class="fa fa-fw fa-pencil" href="#modal-2"  data-toggle="modal" data-target="#modal-2"></i>
                                <h5 class="font-normal mrg-bot-0 font-18 card-title">{{Auth::user()->name }}</h5>
                                <p class="card-small-text">{{Auth::user()->email }}</p>
                            </div>
                            <div class="bottom">
                                <ul class="social-detail">
                                    <li>Smart farm management system <span>ADMIN</span></li>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="modal modal-box-1 fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="myModalLabel1">
                                <div class="modal-header theme-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>f
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form enctype="multipart/form-data" action="" method="post">
                                                <input type="file" name="cover">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="pull-right btn btn-info" value="update">
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal-box-1 fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="myModalLabel1">
                                <div class="modal-header theme-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form enctype="multipart/form-data" action="" method="post">
                                                <input type="file" name="avatar">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="pull-right btn btn-info" value="submit">

                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>

@endsection