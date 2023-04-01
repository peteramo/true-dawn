@extends('admin.layouts.master')

@section('title','Pages Management')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">All Pages</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Pages</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Page URI</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($menuCounter = 0)
                        @foreach($pages as $page)
                            <tr>
                                <th scope="row">{{ ++$menuCounter }}</th>
                                <td>{{ $page->pag_uri }}</td>
                                <td>{{ $page->pag_name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.pages.edit',$page->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.pages.view',$page->id) }}" class="btn btn-warning">View</a>
                                        <form method="POST" action="{{ route('admin.pages.destroy',$page->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{ $pages->links() }}
                <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
@endsection
