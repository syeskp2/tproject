<!DOCTYPE html>
<html lang="en">

<head>
    <title>laravel CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">

                {{-- @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h2>Contact Us</h2> --}}
                
                  <form action="{{ isset($todo) ? route('update-todo', ['todo' => $todo->id]) : route('store-todo') }}" method="POST">

                    @csrf

                    @if (isset($todo))
                        @method('PUT')
                    @endif
                    <div class="mb-3 mt-3">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title"
                            name="title" value="{{ $todo->title ?? '' }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>

                <table class="table table-bordered mt-3">
                    <thead>
                        <th>Sno.</th>
                        <th>Title</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $todo->title }}</td>
                                <td>
                                  <a href="/edit/{{ $todo->id }}" class="btn btn-sm btn-dark">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
