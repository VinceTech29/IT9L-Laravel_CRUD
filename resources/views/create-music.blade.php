<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Music</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Header -->
    <div class="bg-secondary-subtle py-4 px-4">
        <h1 class="fw-bold">Music Gallery</h1>
    </div>

    <!-- Container -->
    <div class="container mt-5" style="max-width:900px;">

        <h2 class="fw-bold mb-4">Create music</h2>

        <form action="{{ route('music.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Song</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Song">
            </div>

            <!-- Author -->
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input
                    type="text"
                    name="author"
                    class="form-control"
                    placeholder="Author">
            </div>

            <!-- Genre -->
            <div class="mb-4">
                <label class="form-label">Genre</label>
                <input
                    type="text"
                    name="genre"
                    class="form-control"
                    placeholder="Genre">
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-outline-dark">
                Add Music
            </button>

            <a href="{{ route('music-gallery') }}" class="btn btn-outline-danger">
                Cancel
            </a>

        </form>

    </div>

</body>

</html>
```