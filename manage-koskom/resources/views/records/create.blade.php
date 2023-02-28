@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create New Record</h2>
                <form action="{{ route('records.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <strong>Amount:</strong>
                        <input type="text" name="amount" class="form-control" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('records.index') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
