<!-- resources/views/livewire/admin/photo-upload-component.blade.php -->

<div>
    <h2>Upload Shutter Photos - {{$shutter->name}}</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="categoryId"></label>
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
            <label for="photos">Photos</label>
            <input type="file" wire:model="photos" id="photos" class="form-control" multiple>
            @error('photos.*') <span class="text-danger">{{ $message }}</span> @enderror

            <div wire:loading wire:target="photos">Uploading...</div>
            @if($photos)
                <div class="mt-2">
                    Preview:
                    @foreach($photos as $photo)
                        <img src="{{ $photo->temporaryUrl() }}" width="100" class="img-thumbnail">
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
