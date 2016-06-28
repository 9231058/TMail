@extends('layouts.app')
@section('title')
    Inbox
({{ Auth::user()->email }})
@endsection
@section('js')
    "{{asset('js/inbox.js')}}"
@endsection
@section('content')
    <div class="container">
    <div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h2>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="{{Auth::user()->avatar}}" alt="Profile Picture">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">None</a></li>
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">Starred</a></li>
                    <li><a href="#">Unstarred</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                <span class="glyphicon glyphicon-refresh"></span>
            </button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    More <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mark all as read</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
                </ul>
            </div>
            <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></span>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="glyphicon glyphicon-edit"></i> Compose</a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">32</span> Inbox </a>
                </li>
                <li><a href="#">Starred</a></li>
                <li><a href="#">Important</a></li>
                <li><a href="#">Sent Mail</a></li>
                <li><a href="#"><span class="badge pull-right">3</span>Drafts</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active">
                <a href="#home" data-toggle="tab">
                    <span class="glyphicon glyphicon-inbox"></span>
                    &nbspPrimary
                </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <!-- Inbox pane -->
                    <div class="list-group">
                        <a href="#" class="list-group-item" v-for="mail in mails">
                            <label>
                                <input type="checkbox">
                            </label>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="name" style="min-width: 120px;display: inline-block;">@{{mail.author}}</span>
                            <span class="">@{{mail.title}}</span>
                            <span class="text-muted" style="font-size: 11px;">- @{{mail.head}}</span>
                            <span class="badge">@{{mail.time}}</span>
                            <span class="pull-right"><span v-show="mail.hasAttachment" class="glyphicon glyphicon-paperclip"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
