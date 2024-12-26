@include('admin.header')
<div class="container-fluid">

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Our CLients</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form  action="{{'add-clinets'}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add image</label>
                                <input class="form-control" type="file" name="image" required >
                              </div>
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
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