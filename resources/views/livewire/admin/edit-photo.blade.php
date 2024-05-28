<!-- resources/views/livewire/admin/photo-edit-component.blade.php -->

<div>
    <h2>Edit Shutter Photo</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="categoryId">Category</label>
            <select wire:model="categoryId" id="categoryId" class="form-control">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categoryId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="shutterId">Shutter ID</label>
            <input type="text" wire:model="shutterId" id="shutterId" class="form-control">
            @error('shutterId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="newPhoto">Photo</label>
            <input type="file" wire:model="newPhoto" id="newPhoto" class="form-control">
            @error('newPhoto') <span class="text-danger">{{ $message }}</span> @enderror

            <div wire:loading wire:target="newPhoto">Uploading...</div>
            @if($newPhoto)
                <div class="mt-2">
                    Preview:
                    <img src="{{ $newPhoto->temporaryUrl() }}" width="100" class="img-thumbnail">
                </div>
            @else
                <div class="mt-2">
                    Current Photo:
                    <img src="{{ Storage::url($image) }}" width="100" class="img-thumbnail">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
