<div>

    <div class="bg-light p-4">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" wire:model="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="contact" wire:model="contact" placeholder="Your Email / Mobile Phone">
                        <label for="contact">Your Email / Mobile Phone</label>
                        @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="message" wire:model="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                </div>
            </div>
        </form>
    </div>

</div>
