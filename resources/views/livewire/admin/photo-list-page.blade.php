<!-- resources/views/livewire/admin/photo-list-component.blade.php -->

<div>
    <h2>Photos for Shutter ID: {{ $shutter->name }}</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Shutter ID</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>{{ $photo->category->name }}</td>
                    <td>{{ $photo->shutter_id }}</td>
                    <td><img src="{{ Storage::url(basename($photo->image_url)) }}" width="100" class="img-thumbnail"></td>
                    <td>
                        <a href="{{ route('edit-photo', $photo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button wire:click="deletePhoto({{ $photo->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
