@extends('admin.layouts.master')

@section('title','All Admins')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">All Admins</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Admins</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($menuCounter = 0)
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ ++$menuCounter }}</th>
                            <td>{{ $user->usr_user_name }}</td>
                            <td>{{ $user->usr_email_address }}</td>
                            <td>{{ $user->usr_mobile_phone }}</td>
                            <td>
                                @if((auth()->user()->id != $user->id) AND (auth()->user()->usr_is_main_admin == 1))
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('admin.users.destroy',$user->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
@endsection
