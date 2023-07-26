@extends("layouts.post.main")


@section('content')
    <div class="container">
        <div class="row">
            <form method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="Title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" id="Description" placeholder="Description">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

@endsection
