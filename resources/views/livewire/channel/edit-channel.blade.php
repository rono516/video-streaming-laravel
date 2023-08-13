<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- <input type="text" wire:model="name"> --}}
    {{-- Channel name: {{ $channel->name }} --}}

    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="name">Name</label>
            <input wire:model="channel.name" type="text" class="form-control">

        </div>

        @error('channel.name')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <label for="Slug">Slug</label>
            <input type="text" wire:model="channel.slug" class="form-control">

        </div>
        @error('channel.slug')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="30" wire:model="channel.description" rows="4" class="form-control"></textarea>

        </div>
        @error('channel.description')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group mt-2 ">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>

    </form>
</div>
