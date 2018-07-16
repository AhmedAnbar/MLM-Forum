<div class="col-md-4">




        <div class="card" style="margin-bottom: 2rem;">
                
                <div class="card-body">
                    <ul class="list-group">
                        @if (Auth::check())
                        <li class="list-group-item">
                            <img src="{{ Auth::user()->avatar }}" alt="" width="70" height="70" style="border-radius: 50%;">
                            <span class="float-right" style="margin-top: 1.4rem;"><span class="btn btn-primary"><strong>Points&nbsp;&nbsp;&nbsp;</strong> <span class="badge badge-light">{{ Auth::user()->points }}</span></span></span>
                        </li>
                        @else
                        <li class="list-group-item text-center"><img src="{{ asset('uploads/avatars/gust.png') }}" alt="Gust" width="70" height="70" style="border-radius: 50%;"></li>
                        @endif
                        <li class="list-group-item"><a href="/forum" style="text-decoration: none;">Home</a></li> 
                        @if (Auth::check())
                        <li class="list-group-item"><a href="/forum?filter=me" style="text-decoration: none;">My discussions</a></li>    
                        <li class="list-group-item"><a href="/forum?filter=solved" style="text-decoration: none;">Answered Discussions</a></li>    
                        <li class="list-group-item"><a href="/forum?filter=unsolved" style="text-decoration: none;">Unanswered Discussions</a></li>    
                        @endif
                    </ul>
                </div>
                @if (Auth::check())
                    @if (Auth::user()->admin)
                        <div class="card-header">
                            <strong>Adminstration</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="/channels" style="text-decoration: none;">All Channels</a>
                                </li>
                            </ul>
                        </div>
                    @endif    
                @endif
                

            </div>







                        <div class="card" >
                            <div class="card-header">
                               Latest Channels <a class="btn btn-primary btn-sm float-right" href="{{ route('discussion.create') }}">Create new discussion</a>
                            </div>
                            <div class="card-body">
                                @if(count($channels_side) > 0)
                                    <ul class="list-group">
                                        @foreach($channels_side as $channel)
                                            <li class="list-group-item"><a style="text-decoration: none;" href="{{ route('channel', ['slug' => $channel->slug]) }}">{{ $channel->title }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <h3>No Channel</h3>
                                @endif
                            </div>

                        </div>
                    </div>