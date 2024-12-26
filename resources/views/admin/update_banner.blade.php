@include('admin.header')
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Banner</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{ url('update-banner/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">Update Banner</label>
                            <input class="form-control" type="file" name="video" id="formFile">
                            <input class="form-control" type="hidden" name="old_video" type="{{$data->banner}}" id="formFile">
                            <p>
                                @if($errors->has('video'))
                                  {{ $errors->first('video') }}
                                @endif
                               </p>
                          </div> --}}
                          <div class="basic-form">
                            <select name="status" class="default-select size-1 form-control wide mb-3">
                                <option value="1" class="text-center" @if ($data->status == '1') selected @endif>Active</option>
                                <option value="0" class="text-center" @if ($data->status == '0') selected @endif>Deactive</option>
                            </select>
                        </div>
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')