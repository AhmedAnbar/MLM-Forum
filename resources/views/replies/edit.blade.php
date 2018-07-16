@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header text-center">Update a reply</div>

                <div class="card-body">
                    <form action="{{ route('reply.update', ['id' => $reply->id]) }}" method="POST">
                        {{ csrf_field() }}                         
                        <div class="form-group">
                            <label for="content">Answer a question</label>
                            <textarea name="content" id="content" cols="6" rows="6" class="form-control">{{ $reply->content }}</textarea>
                        </div>
                        <div class="form-group">
                             <button type="submit" class="btn btn-success float-right">Save reply changes</button>
                        </div>
                    </form>
                </div>
            </div>
        
@endsection
