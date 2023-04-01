<div class="card">
    <div class="card-body">
        <h5 class="card-title">All Menu Items</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @php($menuCounter = 0)
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{ ++$menuCounter }}</th>
                    <td><a href="{{ config('titles.siteUrl').$item->men_link }}" target="_blank">{{ $item->men_name }}</a></td>
                    <td>{!! $item->activeStatus() !!}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.menus.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('admin.menus.destroy',$item->id) }}">
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
    {{ $items->links() }}
    <!-- End Table with stripped rows -->
    </div>
</div>
