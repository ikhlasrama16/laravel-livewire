<div>
    <x-flash-message />

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New POST</h5>
            <form wire:submit='save'>
                <div class="mb-4">
                    <label for="title" class="form-lael">Title</label>
                    <input type="text" wire:model='form.title' id="title" class="form-control" rows="3"></input>
                    @error('form.title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-lael">Body</label>
                    <textarea wire:model='form.body' id="body" class="form-control" rows="3"></textarea>
                    @error('form.body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">
                    save
                </button>
            </form>
        </div>
    </div>

</div>
