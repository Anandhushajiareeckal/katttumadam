@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Home</h6>
                    <div class="form-check form-switch table-toggle-one">
                        {{-- <a href="{{ route('service_add',['id' => 7])}}" class="btn btn-primary">Contents</a> --}}
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Heading</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < count($offering); $i++)
                                @php
                                    $item = $offering[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->heading}}</td>
                                    <td><a href="{{ route('offering_details',['id' => $item->id])}}" class="btn btn-info">Open</a></td>
                                    <td>
                                        <a href="{{ route('offering_edit',['id' => $item->id])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('offering_delete',['id' => $item->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                                @endfor
                                <tr>
                                    <form action="{{ route('offering_store') }}" method="POST">
                                        @csrf
                                        <td></td>
                                        <td><input type="text" name="offering" style="width:100%; height:30px; background:rgb(230, 228, 228);" required></td>
                                        <td><button class="btn btn-primary " type="submit" > Add</button></td>
                                        <td></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection