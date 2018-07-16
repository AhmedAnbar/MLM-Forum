@extends('layouts.app')

@section('content')
    <div class="row" style="margin-bottom: 2rem;">
        <div class="col-md-4">
            <a href="{{ route('channels.index') }}" class="text-danger">
                <div class="card status">
                    <div class="card-heading bg-danger">
                        <h1 class="card-title text-center">{{ $channel_count }}</h1>
                    </div>
                    <div class="card-body text-center">                        
                        <strong>Channels</strong>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('discussion.index') }}" class="text-danger">
                <div class="card status">
                    <div class="card-heading bg-danger">
                        <h1 class="card-title text-center">{{ $discussion_count }}</h1>
                    </div>
                    <div class="card-body text-center">                        
                        <strong>Discussion</strong>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
                <div class="card status text-danger">
                    <div class="card-heading bg-danger">
                        <h1 class="card-title text-center">{{ $reply_count }}</h1>
                    </div>
                    <div class="card-body text-center">                        
                        <strong>Replies</strong>
                    </div>
                </div>
            </a>
        </div>
    </div>

    @if (count($discussions) > 0)
    @foreach ($discussions as $discussion)
    <div class="card" style="margin: 1rem auto;">
        <div class="card-header">
            <img src="{{ $discussion->user->avatar }}" alt="{{ $discussion->user->name }}" width="40" height="40" class="float-left">&nbsp;&nbsp;&nbsp;
            <span class="align-middle">{{ $discussion->user->name }}, <span class="text-muted">{{ $discussion->created_at->diffForHumans() }}</span></span>
            
            @if ($discussion->hasBestAnswer())
                <span class="btn btn-success btn-sm float-right">CLOSED</span>
            @else
                <span class="btn btn-danger btn-sm float-right">OPEN</span>
            @endif
            <a href="{{ route('discussion', ['slug' => $discussion->slug]) }}" class="btn btn-secondary btn-sm float-right">View</a>
        </div>
        <div class="card-body">
            <h4><strong>{{ $discussion->title }}</strong></h4>
            {{ str_limit($discussion->content, 100) }}
        </div>
        <div class="card-footer">
            <span class="text-muted float-left">{{ $discussion->replies()->count() }} <i class="fa fa-mail-reply"></i></span>
            <small class="float-right"><a href="{{ route('channel', ['slug' => $discussion->channel->slug ]) }}" style="text-decoration: none; color: #6C757D;">{{ $discussion->channel->title }}&nbsp;<i class="fa fa-tag"></i></a></small>
        </div>
    </div>    
    @endforeach
    @else
    <div class="card" style="margin: 1rem auto;">
        <div class="card-body">
            <h4><strong>No Discussion Founded.</strong></h4>
        </div>
    </div> 
    @endif
    <div class="text-center">
        {{ $discussions->links() }}
    </div>

    
                    


       
        
@endsection

