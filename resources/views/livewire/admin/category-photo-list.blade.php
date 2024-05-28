<div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Shutters List</h5>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorsphotos as $categorsphoto)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $categorsphoto->name }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" wire:click="delete_category({{ $categorsphoto->id }})">Delete</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary" wire:click="edit_category({{ $categorsphoto->id }})" data-toggle="modal" data-target="#photosModal">edit category </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->




</div>

