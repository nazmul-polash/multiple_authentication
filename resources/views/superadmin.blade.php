@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Super Admin Dashboard') }}</div>

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif

                  <table class="table">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($users as $user)
                           <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                 @if ($user->is_approved == 0)
                                    <span class="text-success">Pending</span>
                                 @endif
                              </td>
                              <td>
                                 <a href="{{ route('user.approved', $user->id) }}"
                                    class="btn btn-primary btn-sm">Approved</a>
                                 <a href="{{ route('user.approved.reject', $user->id) }}"
                                    class="btn btn-danger btn-sm">Reject</a>
                              </td>
                           </tr>
                           @endforeach
                     </tbody>
                  </table>
                  @if ($users->count() == 0)
                     <div>
                        <h3 class="text-danger">No user pending</span>
                     </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
