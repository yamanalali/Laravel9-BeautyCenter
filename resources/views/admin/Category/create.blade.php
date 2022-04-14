

@extends('layouts.adminbase')

@section('title', 'BeautyCenter - Add Category')


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add Category</h4>
                        </div>
                        <!--  Forms Start -->

                            <form role="form" action="/admin/category/store" method="post">
                            @csrf <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" placeholder="Body Cleaner">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" placeholder="How to use">
                                </div>
                                <div class="form-group">
                                    <label>KeyWords</label>
                                    <input class="form-control" type="text" placeholder="KeyWords">

                                        <div class="form-group">
                                            <label> Status </label>
                                            <select class="form-control" id="">
                                                <option>true</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                <div class="form-group">
                                    <label>Upload Images for the product</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                    <div class="pull-right">
                                        <button type="submit" value="Submit">Submit</button>
                                    </div>

                            </form>


</form>

</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- horizontal Basic Forms End -->


