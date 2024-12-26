@include('admin.header')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Our CLients</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                           <form action="{{ url('update-clinets/'.$add_client->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add image</label>
                                <input class="form-control" type="file" name="image" id="formFile">
                                <input class="form-control" type="hidden" name="old_image" value="{{$add_client->image}}" id="formFile">
                              </div>
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                              <div class="basic-form">
                                <select name="status" class="default-select size-1 form-control wide mb-3">
                                    <option value="1" class="text-center" @if ($add_client->status == '1') selected @endif>Active</option>
                                    <option value="0" class="text-center" @if ($add_client->status == '0') selected @endif>Deactive</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary" placeholder="input-rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
 

    </div>
</div
@include('admin.footer')