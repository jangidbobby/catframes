@include('admin.header')
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Cgi</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{'add-banner'}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Add Video</label>
                            <input class="form-control" type="file" name="video" id="formFile">
                            <p>
                                @if($errors->has('video'))
                                  {{ $errors->first('video') }}
                                @endif
                               </p>
                          </div>
                          <div class="basic-form">

                            <select class="default-select size-1 form-control wide mb-3">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>

                        </div>
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')