@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Channels <a class="btn btn-secondary btn-sm float-right" href="{{ route('channels.create') }}">Create Channel</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @if (count($channels))
                                @foreach ($channels as $channel)
                                    <tr>
                                        <td>{{ $channel->title }}</td>
                                        <td><a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center"><h3>No channels created.</h3></td>
                                </tr>
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>
@endsection
