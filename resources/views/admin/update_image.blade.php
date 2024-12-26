@include('admin.header')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Image</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ url('update-image/'.$add_image->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add image</label>
                                <input class="form-control" type="file" name="image" id="formFile">
                                <input class="form-control" type="hidden" name="old_image" value="{{$add_image->image}}" id="formFile">
                              </div>
                              <div class="basic-form">
                                <select  name="category_id" class="default-select size-1 form-control wide mb-3">
                                    <option class="text-center" value="0"  selected >select</option>
                                    @foreach ($category as $item )
                                    <option class="text-center" value="{{$item->id}}"{{$item->id==$add_image->category_id ? 'selected':''}}  >{{$item->category}}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="basic-form">
                                <select name="status" class="default-select size-1 form-control wide mb-3">
                                    <option value="1" class="text-center" @if ($add_image->status == '1') selected @endif>Active</option>
                                    <option value="0" class="text-center" @if ($add_image->status == '0') selected @endif>Deactive</option>
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