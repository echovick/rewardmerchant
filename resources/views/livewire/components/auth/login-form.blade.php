<form wire:submit.prevent="login">
    @if (isset($errorMsg) && !empty($errorMsg))
        <div class="alert alert-danger">{{ $errorMsg }}</div>
    @endif
    <div class="form-group floating-label-form-group {{ $emailInputFocus == true ? 'enter-value' : '' }}">
        <label>Email</label>
        <input type="email" wire:model="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
            value="" placeholder="johndoe@gmail.com" wire:keydown="onEmailInputFocus" />
        @error('email')
            <div class="invalid-feedback form-error pr-4 mr-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group floating-label-form-group {{ $passwordInputFocus == true ? 'enter-value' : '' }}">
        <label>Password</label>
        <input type="password" wire:model="password" wire:keydown="onPasswordInputFocus"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" />
        @error('password')
            <div class="invalid-feedback form-error pr-4 mr-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col-6 pr-2">
                <a href="enter-otp.html" type="submit" class="btn btn-white btn-block btn-lg">OTP
                    Login</a>
            </div>
            <div class="col-6 pl-2">
                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    Sign In
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading
                        wire:target="login"></span>
                </button>
            </div>
        </div>
    </div>
</form>
