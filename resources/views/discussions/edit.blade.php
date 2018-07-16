@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header text-center">Edit: " {{ $discussion->title }} " Discussion</div>

                <div class="card-body">
                    <form action="{{ route('discussion.update', ['id' => $discussion->id]) }}" method="POST">
                        {{ csrf_field() }}                         
                        <div class="form-group">
                            <label for="content">Asq a question</label>
                            <textarea name="content" id="content" cols="6" rows="6" class="form-control">{{ $discussion->content }}</textarea>
                        </div>
                        <div class="form-group">
                             <button type="submit" class="btn btn-success float-right">Save discussion changes</button>
                        </div>
                    </form>
                </div>
            </div>
        
@endsection
