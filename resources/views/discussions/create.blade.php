@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header text-center">Create new deiscussion</div>

                <div class="card-body">
                    <form action="{{ route('discussion.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="channel">Pick a channel</label>
                            <select name="channel_id" id="channel_id" class="form-control">
                                @foreach($channels as $channel)
                                    <option value="{{ $channel->id }}">{{ $channel->title }}</option> 
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>              
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title">
                        </div> 
                        <div class="form-group">
                            <label for="content">Ask a question</label>
                            <textarea name="content" id="content" cols="6" rows="6" class="form-control">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                             <button type="submit" class="btn btn-success float-right">Create discussion</button>
                        </div>
                    </form>
                </div>
            </div>
        
@endsection
