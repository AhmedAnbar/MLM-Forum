@extends('layouts.app')

@section('content')

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
                <span class="text-muted float-right">{{ $discussion->channel->title }} <i class="fa fa-tag"></i></span>
            </div>
        </div>    
    @endforeach
    <div class="text-center">
        {{ $discussions->links() }}
    </div>
@else
<div class="card" style="margin: 1rem auto;">
    <div class="card-body">
        <h4><strong>No discussion for this channel.</strong></h4>
    </div>
    
</div>  
    
@endif

    
    

    
                    


       
        
@endsection

