@include('admin.header')
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Video</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{ url('update-video/'.$video->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                                <input type="text" class="form-control input-default " name="link" value="{{$video->link}}" required>
                            </div>
                          <div class="basic-form">
                          <select name="category" class="default-select size-1 form-control wide mb-3">
                                        <option value="reels" class="text-center" @if ($video->category == 'reels') selected @endif>Reels</option>
                                        <option value="youtube" class="text-center" @if ($video->category == 'youtube') selected @endif>Youtube</option>
                                    </select>
                            </div>
                            <select name="status" class="default-select size-1 form-control wide mb-3">
                                        <option value="1" class="text-center" @if ($video->status == '1') selected @endif>Active</option>
                                        <option value="0" class="text-center" @if ($video->status == '0') selected @endif>Deactive</option>
                                    </select>
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