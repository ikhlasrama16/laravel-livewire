<div>
    <x-flash-message />

    <form wire:submit='save'>
        <div class="mb-2">
            <label for="body" class="form-lael">Body</label>
            <textarea wire:model='form.body' placeholder="Whats on your mind?" id="body" class="form-control"></textarea>
            @error('form.body')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex justify-content-end">
            <button class="btn btn-primary">
                save
            </button>
        </div>
    </form>

</div>
