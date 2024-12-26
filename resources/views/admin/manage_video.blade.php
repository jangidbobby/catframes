@include('admin.header')
<div class="container-fluid">

    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Video</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                              
                                <tr class="text-center">
                                    <th>no</th>
                                    <th>link</th>
                                    <th>category</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                               
                            </thead>
                            <tbody>  
                                @php 
                                $i = 1;
                                @endphp
                                @foreach($video as $item)
                                <tr class="text-center">
                                    <td>{{$i;}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{{$item->category}}</td>
                                        <td>@if ($item->status =='1')
                                            <span class="btn btn-success">active</span>    
                                            @else
                                            <span class="btn btn-danger">deactive</span>
                                        @endif</td>
                                        <td><div class="d-flex justify-content-center">
                                            <div class="tools">
                                            <a href="{{'update_video/'.$item->id}}" class="btn btn-sm btn-primary"><i class="ti-write"></i> edit</a>
                                                <a href="{{'delete_video/'.$item->id}}" class="btn btn-sm btn-success"><i class="ti-trash"></i> Delete</a>
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