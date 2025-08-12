<div>
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Login</h5>
            <form wire:submit='login'>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model='form.email' class="form-control">
                    @error('form.email')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" wire:model='form.password' class="form-control">
                    @error('form.password')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
