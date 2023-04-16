@extends('admin.masterlayout')
@section('content')
    <div class="content-add-post">
        <form action="{{route('admin.post.add.posts')}}" method="post">
            @csrf
            <div class="content-form">
                <div class="row">
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="card card-rounded">
                            <div class="card-body">
                                <div class="item title">
                                    <label>Title</label>
                                    <input type="text" name="title">
                                </div>
                                <div class="item content-post">
                                    <label>Content Post</label>
                                    <textarea name="content" id="editor"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                        <div class="card card-rounded">
                            <div class="card-body">
                                <div class="item btn-save">
                                    <button type="submit">Save</button>
                                </div>
                                <div class="item category">

                                </div>
                                <div class="thumbnail item">
                                    <label>Thumbnail </label>
                                    <input id="thumbnail" class="form-control" type="text" name="thumbnail" value="{{ old('thumbnail') }}">
                                    <button type="button" class="btn btn-primary" onclick="openPopup()">Select Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
