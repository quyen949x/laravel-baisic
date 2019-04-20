@extends('app')
@section('content')
    <div class="col-md-12">
        <h1 class="text-center mb-5">Chỉnh sửa bài viết</h1>
    </div>
    @if(session('success'))
        <div class="col-md-8 alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->all())
       @foreach($errors->all() as $a)
           {{ $a }}
           @endforeach
        @endif
    <div class="col-md-8">
        <form method="post" action="{{ route('articles.update',$article->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control {{ $errors->first('title')? 'is-invalid':'' }}"
                       placeholder="title"
                       value="{{ old('title',$article->title) }}"
                       name="title">
                @if($errors->first('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="contents" id="" cols="30" rows="10"
                          class="form-control  {{ $errors->first('contents')? 'is-invalid':'' }}">{{old('contents',
                          $article->content)
                              }}</textarea>
                @if($errors->first('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contents') }}
                    </div>
                @endif
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input"
                       {{ $article->status ==1?'checked':'' }}
                       name="status">
                <label class="form-check-label" for="exampleCheck1">Active</label>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection