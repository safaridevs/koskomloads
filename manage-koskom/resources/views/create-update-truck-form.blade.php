@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Update Truck') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{isset($Truck)?route('update.truck', ['truck'=>$Truck->id]):route('update.store')}}" method="POST">  
                        @include('includes/truck-form')
                        
                <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Add Truck</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
