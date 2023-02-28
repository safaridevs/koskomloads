@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Record</h2>
                <form action="{{ route('records.update',$record->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $record->name }}" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Amount:</strong>
                        <input type="text" name="amount" value="{{ $record->amount }}" class="form-control" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <img src="{{ asset('storage/images/'.$record->image) }}" width="100" />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
