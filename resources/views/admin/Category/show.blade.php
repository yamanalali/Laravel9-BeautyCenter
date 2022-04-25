

@extends('layouts.adminbase')

@section('title', 'Edit Category:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Edit Category: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->
                        <form action="/admin/category/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-sm-12 col-md-2 col-form-label">Text</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="title" value="{{$data->title}}" placeholder="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-12 col-md-2 col-form-label">description</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="description" value="{{$data->description}}"description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keywords" class="col-sm-12 col-md-2 col-form-label">keywords</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}"keywords">
                                </div>
                            </div>

                            <div class="form-group">
                                <label> images file input</label>
                                <input type="file" class="form-control-file form-control height-auto">
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-12 col-md-2 col-form-label">status</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12">
                                        <option selected>{{$data->status}}</option>
                                        <option value="1">true</option>
                                        <option value="2">false</option>
                                    </select>
                                </div>
                            </div>
                            <div>

                                <button type="submit" class="btn btn-primary">Edit Data</button>

                            </div>
                        </form>

</form>

</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- horizontal Basic Forms End -->


