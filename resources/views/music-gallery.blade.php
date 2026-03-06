<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-light">

    <!-- Header -->
    <div class="bg-secondary-subtle py-4 px-4">
        <h1 class="fw-bold">Music Gallery</h1>
    </div>

    <!-- Container -->
    <div class="container mt-5">

        <!-- Flash Message -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Section Title -->
        <h2 class="fw-bold mb-3">Music</h2>

        <!-- Create Button -->
        <a href="{{ route('create-music') }}" class="btn btn-outline-secondary mb-4">
            Create Music
        </a>

        <!-- Music List -->
        @foreach($musics as $music)

        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">

                <!-- Music Info -->
                <div>
                    <h4 class="fw-bold">{{ $music->name }}</h4>
                    <div class="text-muted">{{ $music->author }}</div>
                    <div class="text-muted">{{ $music->genre }}</div>
                </div>

                <!-- Actions -->
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        Actions
                    </button>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('edit-music', $music->id) }}">
                                Edit
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('delete-music', $music->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        @endforeach

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>