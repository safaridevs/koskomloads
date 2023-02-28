@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Records</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('records.create') }}"> Create New Record</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($records as $record)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->amount }}</td>
                <td>
                    @if($record->image)
                        <img src="{{ asset('storage/images/'.$record->image) }}" width="100" />
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <form action="{{ route('records.destroy',$record->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('records.show',$record->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('records.edit',$record->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $records->links() !!}
    </div>
@endsection
