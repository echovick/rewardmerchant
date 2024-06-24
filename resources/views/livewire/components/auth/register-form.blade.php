<form wire:submit.prevent="register">
    @if (isset($errorMsg) && !empty($errorMsg))
        <div class="alert alert-danger">{{ $errorMsg }}</div>
    @endif
    <div class="form-group floating-label-form-group">
        <label>Name</label>
        <input type="email" wire:model.fill='name' class="form-control" value="{{ $user->name }}" readonly />
    </div>
    <div class="form-group floating-label-form-group">
        <label>Email</label>
        <input type="email" wire:model.fill="email" class="form-control" value="{{ $user->email }}" readonly />
    </div>
    <div class="form-group floating-label-form-group">
        <label>Username</label>
        <input type="username" wire:model='username' class="form-control" placeholder="Enter Username" />
        @error('username')
            <div class="invalid-feedback form-error pr-4 mr-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group floating-label-form-group">
        <label>Set Password</label>
        <input type="password" wire:model="password"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter Password" />
        @error('password')
            <div class="invalid-feedback form-error pr-4 mr-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group floating-label-form-group">
        <label>Confirm Password</label>
        <input type="password" wire:model="password_confirmation"
            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Confirm Password" />
        @error('password_confirmation')
            <div class="invalid-feedback form-error pr-4 mr-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mt-4">
        <div class="row mx-auto justif">
            <div class="col-6 pl-2">
                <button type="submit" class="btn btn-primary btn-block btn-lg mx-a">
                    Register
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading
                        wire:target="register"></span>
                </button>
            </div>
        </div>
    </div>
</form>
