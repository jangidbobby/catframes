@include('admin.header')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Image</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{'add-image'}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add image</label>
                                <input class="form-control" type="file" name="image" required>
                              </div>
                                 @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                              <div class="basic-form">
                                <select name="category_id" class="default-select size-1 form-control wide mb-3" required>
                                    <option class="text-center" value=""  selected >select</option>
                                    @foreach ($categories as $item )
                                    <option value="{{$item->id}}" >{{$item->category}}</option>
                                    @endforeach
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
</div>
@include('admin.footer')