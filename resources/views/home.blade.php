@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Dashboard') }}</div>

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif


                  @if (Auth::user()->role == 'user' && Auth::user()->is_approved == 1)
                     {{ __('This is user dashboard') }}
                  @else
                     {{ __('Your registration is pending approval from an Admin') }}
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
