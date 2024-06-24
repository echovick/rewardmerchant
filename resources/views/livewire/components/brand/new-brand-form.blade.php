<section class="section-padding">
    <div class="container">
        <div class="row py-lg-4">
            <div class="col-md-10 mx-auto text-center">
                <div class="text-left rating-review-select-page">
                    @if (isset($successMsg))
                        <div class="alert alert-success">{{ $successMsg }}</div>
                    @endif
                    <h4 class="mb-4 text-gray-900">Setup A New brand</h4>
                    <h6 class="mb-3 text-gray-800 font-weight-normal">Please make sure to fill in all required
                        information</h6>
                    <form wire:submit.prevent="submit">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" wire:model="name"
                                            placeholder="Enter your name" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Upload Brand Logo
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" wire:model="logo" required>
                                        <label class="custom-file-label">Choose file...</label>
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Upload Brand Cover
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" wire:model="cover" required>
                                        <label class="custom-file-label">Choose file...</label>
                                        @error('cover')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label>Describe the brand <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="5" wire:model="description" required></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Brand Manager Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" wire:model="manager_name"
                                            placeholder="Enter manager's name" required>
                                        @error('manager_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="js-form-message">
                                    <label class="form-label">
                                        Brand Manager Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" wire:model="manager_email"
                                            placeholder="Enter manager's email" required>
                                        @error('manager_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary"> Submit
                                <div class="spinner-border" role="status" wire:loading wire:target="submit"
                                    style="width: 20px; height:20px;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
