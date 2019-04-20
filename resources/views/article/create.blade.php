@extends('app')
@section('content')
    <div class="col-md-12">
        <h1 class="text-center mb-5">Thêm mới bài viết</h1>
    </div>
    <div class="col-md-8">
        <form method="post" action="{{ route('articles.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control {{ $errors->first('title')? 'is-invalid':'' }}"
                       placeholder="title"
                       value="{{ old('title') }}"
                       name="title">
                @if($errors->first('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10"
                          class="form-control  {{ $errors->first('content')? 'is-invalid':'' }}">{{old('content')
                              }}</textarea>
                @if($errors->first('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input"
                       name="status">
                <label class="form-check-label" for="exampleCheck1">Active</label>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection