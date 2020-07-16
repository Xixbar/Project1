@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New entry') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title" >{{ __('Title') }}</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                                name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
