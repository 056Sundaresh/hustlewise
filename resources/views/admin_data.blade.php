<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Records | HustleWise</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; background: #fdf9f5; color: #222; }
        .admin-nav { background: #fff; }
        .admin-brand { font-size: 1.4rem; font-weight: 800; text-decoration: none; color: #222; }
        .admin-brand span { color: #ff7e27; }
        .btn-orange { background: #ff7e27; border-color: #ff7e27; color: #fff; }
        .btn-orange:hover { background: #e86e1b; border-color: #e86e1b; color: #fff; }
        .card { border-radius: 16px; border: 1px solid #f0e3d7; }
        .table thead { background: #252c45; color: #fff; }
    </style>
</head>
<body>
    <nav class="navbar admin-nav shadow-sm sticky-top">
        <div class="container-fluid px-3 px-md-4 py-2 d-flex justify-content-between align-items-center">
            <a class="admin-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="HustleWise" height="42">
                <span>Hustle<span>Wise</span> <small class="text-secondary fw-normal fs-6">Admin Records</small></span>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3 px-sm-4">← Back to home</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4 px-3 px-md-4 px-lg-5">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
            <h2 class="h3 fw-bold mb-0"><i class="bi bi-calendar-check text-warning me-2"></i>Demo Bookings ({{ count($demo_bookings) }})</h2>
        </div>
        <div class="card shadow-sm mb-5">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="ps-3">Parent Name</th>
                                <th>Child Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Course</th>
                                <th>Class/Group</th>
                                <th>Pref</th>
                                <th>Date & Time</th>
                                <th>Feedback</th>
                                <th class="text-end pe-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($demo_bookings as $booking)
                            <tr>
                                <td class="ps-3 fw-semibold">{{ $booking->parent_name }}</td>
                                <td>{{ $booking->children_name }}</td>
                                <td><a href="mailto:{{ $booking->email }}" class="text-decoration-none">{{ $booking->email }}</a></td>
                                <td>{{ $booking->mobile ?? '-' }}</td>
                                <td><span class="badge bg-warning text-dark">{{ $booking->course }}</span></td>
                                <td>{{ $booking->class_age_group }}</td>
                                <td>{{ $booking->teacher_preference === '1to1' ? '1 on 1' : $booking->teacher_preference }}</td>
                                <td>{{ ucfirst($booking->date_preference) }} at {{ $booking->time_preference }}</td>
                                <td><small class="text-secondary">{{ $booking->feedback ?? '-' }}</small></td>
                                <td class="text-end pe-3">
                                    <form action="{{ route('demo-bookings.destroy', $booking) }}" method="POST"
                                        onsubmit="return confirm('Delete this demo booking permanently?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center py-4 text-secondary">No demo bookings yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
            <h2 class="h3 fw-bold mb-0"><i class="bi bi-person-workspace text-primary me-2"></i>Teacher Applications ({{ count($teacher_applications) }})</h2>
        </div>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="ps-3">Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender & Age</th>
                                <th>Qualification</th>
                                <th>Degree</th>
                                <th>Experience</th>
                                <th>Certifications</th>
                                <th>Resume</th>
                                <th class="text-end pe-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teacher_applications as $app)
                            <tr>
                                <td class="ps-3 fw-bold">{{ $app->full_name }}</td>
                                <td><a href="mailto:{{ $app->email }}" class="text-decoration-none">{{ $app->email }}</a></td>
                                <td><a href="tel:{{ $app->phone }}" class="text-decoration-none">{{ $app->phone }}</a></td>
                                <td>{{ ucfirst($app->gender) }}, {{ $app->age }}</td>
                                <td>{{ $app->qualification }}</td>
                                <td>{{ $app->degree }}</td>
                                <td><small class="text-secondary">{{ Str::limit($app->experience, 50) }}</small></td>
                                <td>
                                    @if($app->certifications)
                                        @foreach(json_decode($app->certifications, true) as $cert)
                                            <span class="badge bg-secondary">{{ $cert }}</span>
                                        @endforeach
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <a href="/view-resume/{{ $app->id }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill"><i class="bi bi-file-earmark-pdf me-1"></i>View PDF</a>
                                </td>
                                <td class="text-end pe-3">
                                    <form action="{{ route('teacher-applications.destroy', $app) }}" method="POST"
                                        onsubmit="return confirm('Delete this teacher application permanently?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center py-4 text-secondary">No teacher applications yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
