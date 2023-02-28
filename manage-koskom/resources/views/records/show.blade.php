@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Show Record</h2>
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $record->name }}
                </div>
                <div class="form-group">
                    <strong>Amount:</strong>
                    {{ $record->amount }}
                </div>
                <div class="form-group">
                    <strong>Image:</strong>
                    @if($record->image)
                        <img src="{{ asset('storage/images/'.$record->image) }}" width="100" />
                    @else
                        No Image
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
