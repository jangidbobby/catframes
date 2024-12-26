@include('layouts.header2')

<section>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row mb-lg-5 mb-3">
            <div class="col-lg-12">
              
            </div>
        </div>
        <div class="row align-items-start g-lg-5 g-0 gy-lg-0 gy-4 position-relative contact-us">
         
            <div class="col-lg-6">
                <div class="row">
                     <div class="col-lg-12 text-start">
              <h2 class="title text-start pb-5"><span>contact</span> us</h2>
          </div>
                </div>
                <div class="contact-form">
                    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                       @csrf
                        <div class="row row-cols-lg-2 row-cols-md-1 row-cols-sm-1 row-cols-1">
                            <div class="col">

                                <div class="mb-3">
                                    <label class="form-label">First Name<span class="required">*</span></label>
                                    <input type="text" name="first_name" class="form-control">
                                    @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="col">

                                <div class="mb-3">
                                    <label class="form-label">Last Name<span class="required">*</span></label>
                                    <input type="text" name="last_name" class="form-control">
                                    @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Email<span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                            </div>

                            <div class="col-lg-12">

                                <div class="mb-5">
                                    <label class="form-label">Message <span class="required">*</span></label>
                                    <textarea class="form-control" name="message" rows="3"></textarea>
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                                </div>
                                @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                                <input class="text-uppercase btn btn-dark p-2" type="submit"  value="send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-image">
                    <img class="img-fluid" src="front/image/contact.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
