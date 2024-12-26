@include('admin.header')
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Video</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{'add-video'}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                                <input type="text" class="form-control input-default " name="link" placeholder="link" required>
                            </div>
                          <div class="basic-form">
                                <select name="category" class="default-select size-1 form-control wide mb-3" required>
                                    <option class="text-center" value=""  selected >select</option>
                                    <option value="reels" class="text-center">Reels</option>
                                    <option value="youtube" class="text-center">Youtube</option>
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