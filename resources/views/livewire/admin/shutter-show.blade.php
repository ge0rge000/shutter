<div>
    <style>
        @media (min-width: 1200px) {
    .container {
        max-width: 100%;
    }
}
    </style>
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
                                    <th>Tag</th>
                                    <th>Description</th>
                                    <th>Outdoor Description</th>
                                    <th>Features</th>
                                    <th>Key Features</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Add Photos</th>
                                    <th>Show Photos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shutters as $shutter)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $shutter->name }}</td>
                                    <td>{{ $shutter->tag }}</td>
                                    <td>
                                        {{ $this->stripTagsAndTruncate($shutter->desc) }}
                                    </td>
                                    <td>{{ $this->stripTagsAndTruncate($shutter->desc_out) }}</td>
                                    <td>{{ $this->stripTagsAndTruncate($shutter->features) }}</td>
                                    <td>{{ $this->stripTagsAndTruncate($shutter->key_features) }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" wire:click="edit({{ $shutter->id }})" data-toggle="modal" data-target="#editModal">Edit</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" wire:click="deleteShutter({{ $shutter->id }})">Delete</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary" wire:click="addPhotos({{ $shutter->id }})" data-toggle="modal" data-target="#photosModal">Add Photos</button>

                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-success" wire:click="showPhotos({{ $shutter->id }})" >show Photos</button>
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

