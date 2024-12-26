@include('admin.header')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update What We Are</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ url('update-what_we_are/'.$what_we_are->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                  <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="name" value="{{$what_we_are->name}}">
                                  </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default " name="title" value="{{$what_we_are->title}}">
                                    </div>
                                </div>
                                <div class="basic-form">
                         
                                        <div class="mb-3">
                                            <textarea class="form-control" name="descpriton" rows="7" id="comment">{{$what_we_are->descpriton}}</textarea>
                                        </div>
                          
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Add image</label>
                                    <input class="form-control" type="file" name="image" id="formFile">
                                    <input class="form-control" type="hidden" name="old_image" value="{{$what_we_are->image}}" id="formFile">
                                  </div>
                                    @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="link" value="{{$what_we_are->link}}">
                                </div>
                                <div class="basic-form">
                                    <select name="status" class="default-select size-1 form-control wide mb-3">
                                        <option value="1" class="text-center" @if ($what_we_are->status == '1') selected @endif>Active</option>
                                        <option value="0" class="text-center" @if ($what_we_are->status == '0') selected @endif>Deactive</option>
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