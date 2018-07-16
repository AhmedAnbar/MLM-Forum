@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Edit: {{ $channel->title }} Channel <a class="btn btn-secondary btn-sm float-right" href="{{ route('channels.index') }}">Back to Channels</a></div>

                <div class="card-body">
                    <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="title">Channel Title</label>
                            <input type="text" name="title" value="{{ $channel->title }}" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Channel</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
