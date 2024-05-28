<div>
    <div class="card">
        <div class="card-header">Project Info</div>

        <div class="card-content">
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Shutter Info</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Name" wire:model="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_out">Name Out</label>
                                    <input type="text" id="name_out" class="form-control" placeholder="Name Out" wire:model="name_out">
                                    @error('name_out') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input type="text" id="tag" class="form-control" placeholder="Tag" wire:model="tag">
                                    @error('tag') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="desc">Description</label>
                            <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" wire:model.lazy="desc"></textarea>
                            @error('desc') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group"  wire:ignore>
                            <label for="desc_out">Outdoor Description</label>
                            <textarea id="desc_out" class="form-control @error('desc_out') is-invalid @enderror" wire:model.lazy="desc_out"></textarea>
                            @error('desc_out') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="features">Features</label>
                            <textarea id="features" class="form-control @error('features') is-invalid @enderror" wire:model.lazy="features"></textarea>
                            @error('features') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="form-group"wire:ignore>
                            <label for="key_features">Key Features</label>
                            <textarea id="key_features" class="form-control @error('key_features') is-invalid @enderror" wire:model.lazy="key_features"></textarea>
                            @error('key_features') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                            <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-check-square-o"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#desc').summernote({
                    height: 200,
                    codemirror: {
            theme: 'monokai'
        },
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('desc', contents);
                        }
                    }
                });
                $('#desc_out').summernote({
                    height: 200,
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('desc_out', contents);
                        }
                    }
                });
                $('#features').summernote({
                    height: 200,
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('features', contents);
                        }
                    }
                });
                $('#key_features').summernote({
                    height: 200,
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('key_features', contents);
                        }
                    }
                });
            });
        </script>
    @endpush

</div>
