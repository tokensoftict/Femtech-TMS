@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.auth.css') }}">
@endsection

<div>
    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="media-body align-items-center d-none d-lg-flex">
                    <div class="mx-wd-600">
                        <img src="{{ asset('assets/img/img15.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="pos-absolute b-0 l-0 tx-12 tx-center">
                    </div>
                </div><!-- media-body -->
                <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                    <div class="wd-100p">
                        <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                        <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please sign in to continue.</p>
                        @if(session()->has('message'))
                            <div class="alert alert-danger" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" wire:model.defer="email" class="form-control" placeholder="Enter Your Email Address">
                            @error('email') <span class="d-block text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">Password</label>
                                <a href="#" class="tx-13">Forgot password?</a>
                            </div>

                            <input type="password" wire:model.defer="password" class="form-control" placeholder="Enter Your Password">
                            @error('password') <span class="d-block text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button wire:click="performLogin" wire:target="performLogin" wire:loading.attr="disabled" class="btn btn-brand-02 w-100">
                            Sign In
                            <i wire:target="performLogin" wire:loading class="fa fa-spinner  fa-spin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

