<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h2>Contact Us</h2>
                <form action="contact" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Enter message...">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
