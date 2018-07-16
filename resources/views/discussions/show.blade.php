@extends('layouts.app')

@section('content')
                <div class="card" style="margin-bottom: 2rem;">
                    <div class="card-header 
                    @if ($discussion->hasBestAnswer())
                        border-success
                    @else
                        border-warning
                    @endif
                    ">
                        <span><img src="{{ $discussion->user->avatar }}" alt="{{ $discussion->user->name }}" width="60" height="60"></span>
                        <strong>{{ $discussion->user->name }}&nbsp;&nbsp;&nbsp;</strong><span class="text-muted">( {{ $discussion->user->points }} )</span>
                        <span style="margin-top: 1rem;">
                        @if (Auth::id() == $discussion->user->id)
                            @if (!$discussion->hasBestAnswer())
                            <a href="{{ route('discussion.edit', ['slug' => $discussion->slug]) }}" class="btn btn-secondary btn-sm float-right">Edit</a>
                            @endif
                        @endif
                        @if (Auth::check())
                            @if ($discussion->is_watched_by_auth_user())
                                <a href="{{ route('discussion.unwatch', ['id' => $discussion->id]) }}" class="btn btn-danger btn-sm float-right">UnWatch</a>
                            @else
                                <a href="{{ route('discussion.watch', ['id' => $discussion->id]) }}" class="btn btn-warning btn-sm float-right" style="margin-left: 1rem;">Watch</a>
                            @endif
                        @else
                        
                        <div class="text-center float-right" style="margin-top: 1.2rem;"><strong><a href="/">Login</a></strong> to watch this discussion.</div>
                        @endif
                        @if ($discussion->hasBestAnswer())
                            <span class="btn btn-success btn-sm float-right">CLOSED</span>
                        @else
                            <span class="btn btn-info btn-sm float-right">OPEN</span>
                        @endif
                        </span>
                    </div>
                    <div class="card-body">         
                            <div class="text-center"><h3>{{ $discussion->title }}, </h3></div>
                            {!! Markdown::convertToHtml($discussion->content) !!}
                        @if ($best_answer)
                            <hr>
                            <div class="text-center" style="margin-bottom: .3rem;">
                                <img src="{{ asset('img/star.png') }}" alt="Best Answer" width="30" height="30">
                                <strong style="padding-top: 2rem;">Best Answer</strong>
                                <img src="{{ asset('img/star.png') }}" alt="Best Answer" width="30" height="30">
                            </div>
                            <div class="card">
                                <div class="card-header text-center bg-success">
                                    <img src="{{ $best_answer->user->avatar }}" alt="{{ $best_answer->user->name }}" width="30" height="30">&nbsp;
                                    <strong>{{ $best_answer->user->name }}&nbsp;&nbsp;&nbsp;</strong><span class="">( {{ $best_answer->user->points }} )</span>
                                </div>
                                <div class="card-body">
                                    {!! Markdown::convertToHtml($best_answer->content) !!}
                                </div>
                            </div>
                        @endif
                        
                    </div>
                    <div class="card-footer">
                        <span class="text-muted float-left">{{ $reply_count }} <i class="fa fa-mail-reply"></i></span>
                        <a class="text-muted float-right" href="{{ route('channel', ['slug' => $discussion->channel->slug]) }}">{{ $discussion->channel->title }} <i class="fa fa-tag"></i></a>
                    </div>
                </div>
                @foreach ($discussion->replies as $reply)
                <div class="card" style="margin: 5px auto;">
                    <div class="card-header">
                        <img src="{{ $reply->user->avatar }}" alt="{{ $reply->user->name }}" width="30" height="30">&nbsp;
                        <strong>{{ $reply->user->name }}&nbsp;&nbsp;&nbsp;</strong><span class="text-muted">( {{ $reply->user->points }} )</span>
                        <span class="text-muted">{{ $reply->created_at->diffForHumans() }}</span>
                        @if (Auth::id() == $discussion->user->id)
                            @if (!$best_answer)
                                <a href="{{ route('reply.best.answer', ['id' => $reply->id]) }}" class="btn btn-sm btn-info float-right">Mark as best answer</a>
                            @endif
                            
                        @endif
                        @if ($reply->best_answer == 1)
                            <img class="float-right" src="{{ asset('img/star.png') }}" alt="Best Answer" width="30" height="30">
                        @endif
                        
                    </div>
                    <div class="card-body">
                        {!! Markdown::convertToHtml( $reply->content) !!}
                    </div>
                    @if (Auth::check())
                        <div class="card-footer">
                            <span class="float-left">
                                @if ($reply->is_liked_by_auth_user() )
                                    <a href="{{ route('reply.unlike', ['id' => $reply->id]) }}">
                                        <button type="button" class="btn btn-danger btn-sm">
                                            UnLike <span class="badge badge-light">{{ $reply->likes->count() }}</span>
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('reply.like', ['id' => $reply->id]) }}">
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            Like <span class="badge badge-light">{{ $reply->likes->count() }}</span>
                                        </button>
                                    </a>
                                @endif
                            </span>
                            <span >
                                @if (Auth::id() == $reply->user->id)
                                    @if (!$reply->best_answer)
                                        @if (!$reply->discussion->hasBestAnswer())
                                            <a href="{{ route('reply.edit', ['id' => $reply->id]) }}" class="btn btn-sm btn-secondary float-right">Edit</a>    
                                        @endif
                                    @endif
                                @endif
                            </span>
                        </div>
                    @endif
                </div>
                @endforeach

                <div class="card" style="margin-top: 2rem;">
                    <div class="card-body">
                        @if (Auth::check())
                        <form action="{{ route('discussion.reply', ['id' => $discussion->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="content">Leave your reply ....</label>
                                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success float-right" type="submit">Reply</button>
                                </div>
                            </form>
                        @else
                            <div class="text-center"><strong><a href="/">Login</a></strong> to leave a reply.</div>
                        @endif
                    </div>
                </div>


                
@endsection

