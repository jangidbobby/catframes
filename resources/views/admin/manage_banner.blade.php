@include('admin.header')
<div class="container-fluid">

    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Banner</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                @php
                                $i = 1;    
                                @endphp
                              
                                <tr class="text-center">
                                    <th>no</th>
                                    <th>banner</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                               
                            </thead>
                            <tbody>  @foreach($data as $item)
                                <tr class="text-center">
                                    <td>{{$i;}}</td>
                                    <td><video width="320" height="240" autoplay muted><source src="{{asset('public/backend')}}/{{$item['banner']}}" type="video/mp4"></video></td>
                                    <td>@if ($item->status =='1')
                                        <span class="btn btn-success">active</span>    
                                        @else
                                        <span class="btn btn-danger">deactive</span>
                                    @endif</td>
                                    <td><div class="d-flex justify-content-center">
                                        <div class="tools">
                                            <a href="{{'update_banner/'.$item->id}}" class="btn btn-sm btn-primary"><i class="ti-write"></i> Edit</a>
                                            <a href="{{'delete_banner/'.$item->id}}" class="btn btn-sm btn-success"><i class="ti-trash"></i> Delete</a>
                                        </div>
                                        </div></td>
                                </tr>
                                @php
                                $i++;
                            @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')