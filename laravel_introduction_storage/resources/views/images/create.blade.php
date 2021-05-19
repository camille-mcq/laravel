@section('content')
    <div class="container my-5">
        <h1 class="text-center">Create image</h1>
        <ul>
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>  
            @endforeach
        </ul>
        <form action="/image/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Path</label>
                <input type="text" class="form-control" name="path">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection