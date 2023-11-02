<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
    <!-- Background image -->
    <div class="card mx-1 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 mobile-padding">
                    <h2 class="fw-bold mb-5">FEMITECH | TMS</h2>

                    <div class="d-flex justify-content-center mb-3">
                        <div wire:loading class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading</span>
                        </div>
                    </div>
                    
                    <form wire:submit='login'>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control" wire:model='email' />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control" wire:model='password' />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->
