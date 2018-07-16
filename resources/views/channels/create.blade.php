@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Create new channel <a class="btn btn-secondary btn-sm float-right" href="{{ route('channels.index') }}">Channels</a></div>

                <div class="card-body">
                    <form action="{{ route('channels.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Channel Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Store Channel</button>
                        </div>
                    </form>
                </div>
            </div>
       
@endsection
