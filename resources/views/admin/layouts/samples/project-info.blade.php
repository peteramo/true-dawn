<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Projects</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php($menuCounter=0)
                        @foreach($page->project as $project)
                            <tr>
                                <th scope="row">{{ ++$menuCounter }}</th>
                                <td>{{ $project->pro_name }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.pages.projects.edit',$project->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('admin.pages.projects.destroy',$project->id) }}">
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

            <!-- End Table with stripped rows -->
            </div>
        </div>
    </div>
</div>
