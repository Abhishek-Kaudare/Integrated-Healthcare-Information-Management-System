{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if(session()->has('access'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        You are logged in!
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
