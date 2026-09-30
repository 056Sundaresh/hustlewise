<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore the {{ $course['title'] }} learning roadmap at HustleWise.">
    <title>{{ $course['title'] }} Roadmap | HustleWise</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css?v=course-roadmap') }}">
    <style>
        :root { --roadmap-accent:{{ $course['color'] }}; }
        body { background:#fffaf5; }
        .roadmap-nav { background:#fff; }
        .roadmap-brand { color:#242424;font-size:1.5rem;font-weight:800;text-decoration:none; }
        .roadmap-brand > span { color:#242424; }.roadmap-brand span span { color:#ff7a00; }
        .roadmap-hero { position:relative;overflow:hidden;padding:clamp(3rem,7vw,5.5rem) 0;background:linear-gradient(125deg,#fff2e4,#fff 70%); }
        .roadmap-hero::after { content:"";position:absolute;width:320px;height:320px;border-radius:50%;background:var(--roadmap-accent);opacity:.07;right:5%;top:-110px;animation:roadmapFloat 6s ease-in-out infinite; }
        @keyframes roadmapFloat { 50% { transform:translateY(18px) scale(1.05); } }
        .roadmap-icon { width:78px;height:78px;display:grid;place-items:center;border-radius:24px;background:#fff;color:var(--roadmap-accent);font-size:2.25rem;box-shadow:0 14px 30px #33200b12; }
        .roadmap-hero h1 { font-size:clamp(2.4rem,5vw,4.1rem);font-weight:800;letter-spacing:-.04em; }
        .roadmap-lead { color:#6c757d;font-size:1.15rem;max-width:700px; }
        .roadmap-hero-image { width:100%;height:clamp(230px,30vw,340px);object-fit:cover;border-radius:24px;box-shadow:0 20px 48px #3c28121a; }
        .roadmap-summary { margin-top:-1.4rem;position:relative;z-index:1; }
        .roadmap-summary-card { height:100%;background:#fff;border:1px solid #f0e3d7;border-radius:18px;padding:1.2rem;box-shadow:0 12px 30px #3c28120b; }
        .roadmap-summary-card i { color:var(--roadmap-accent);font-size:1.35rem; }
        .roadmap-section { padding:4rem 0 5rem; }
        .grade-tabs { display:flex;gap:.65rem;overflow-x:auto;padding:.35rem .1rem 1rem; }
        .grade-tab { flex:0 0 auto;border:1px solid #e6e2de;border-radius:12px;background:#fff;padding:.72rem 1rem;color:#737373;text-decoration:none;font-weight:700;transition:all .2s; }
        .grade-tab:hover,.grade-tab.active { background:var(--roadmap-accent);border-color:var(--roadmap-accent);color:#fff;transform:translateY(-2px); }
        .roadmap-track { position:relative;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));grid-auto-rows:230px;column-gap:1rem;row-gap:26px;margin-top:2.5rem; }
        .roadmap-track::before { content:"";position:absolute;top:30px;left:8%;right:8%;border-top:3px dotted color-mix(in srgb,var(--roadmap-accent) 62%,white); }
        .roadmap-track::after { content:"";position:absolute;top:286px;left:8%;right:8%;border-top:3px dotted color-mix(in srgb,var(--roadmap-accent) 62%,white); }
        .roadmap-node { position:relative;z-index:1;display:flex;flex-direction:column;align-items:center;text-align:center;animation:milestonePop .55s cubic-bezier(.2,.75,.25,1.2) both; }
        .roadmap-node:nth-child(2) { animation-delay:.05s; }.roadmap-node:nth-child(3) { animation-delay:.1s; }.roadmap-node:nth-child(4) { animation-delay:.15s; }.roadmap-node:nth-child(5) { animation-delay:.2s; }.roadmap-node:nth-child(6) { animation-delay:.25s; }.roadmap-node:nth-child(7) { animation-delay:.3s; }.roadmap-node:nth-child(8) { animation-delay:.35s; }
        @keyframes milestonePop { from { opacity:0;transform:translateY(14px) scale(.96); } to { opacity:1;transform:translateY(0) scale(1); } }
        .roadmap-node-icon { width:62px;height:62px;border:5px solid #fff;background:var(--roadmap-accent);color:#fff;border-radius:50%;display:grid;place-items:center;font-size:1.35rem;margin:0 auto 1rem;box-shadow:0 0 0 1px #eee; }
        .roadmap-node-number { position:absolute;top:-9px;right:calc(50% - 35px);width:23px;height:23px;border-radius:50%;background:#fff;color:var(--roadmap-accent);border:2px solid var(--roadmap-accent);font-size:.75rem;font-weight:800;display:grid;place-items:center; }
        .roadmap-node-card { width:100%;height:auto;min-height:120px;flex:1;padding:1rem .85rem;background:#fff;border:1px solid #f0e3d7;border-radius:16px;box-shadow:0 10px 25px #3c28120a; }
        .roadmap-node-card small { color:var(--roadmap-accent);font-weight:700;letter-spacing:.05em;text-transform:uppercase; }
        .roadmap-node-card h3 { font-size:1.02rem;font-weight:700;margin:.45rem 0 0; }
        .roadmap-node.is-milestone .roadmap-node-icon { color:var(--roadmap-accent);background:#fff;border:2px solid var(--roadmap-accent);font-size:1.05rem; }
        .roadmap-node.is-milestone .roadmap-node-card { background:#fffaf5;border-style:dashed; }
        .roadmap-finish { margin:2.2rem auto 0;max-width:660px;border-radius:18px;background:#fff1e3;padding:1.1rem 1.3rem;text-align:center;color:#7b490f; }
        @media(max-width:767.98px) { .roadmap-track { grid-template-columns:repeat(2,minmax(0,1fr));row-gap:1.25rem;grid-auto-rows:220px; }.roadmap-track::before,.roadmap-track::after { display:none; }.roadmap-node-card { min-height:110px; } }
        @media(max-width:420px) { .roadmap-track { grid-template-columns:1fr; }.roadmap-node-card { min-height:0; } }
        @media(prefers-reduced-motion:reduce) { *,*::before,*::after { animation-duration:.01ms !important;animation-iteration-count:1 !important;scroll-behavior:auto !important; } }
    </style>
</head>
<body class="with-demo-bottom-bar">
    <nav class="navbar roadmap-nav shadow-sm sticky-top">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <a class="roadmap-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="HustleWise" height="44">
                <span>Hustle<span>Wise</span></span>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3 d-none d-sm-inline-block">Home</a>
                <a href="{{ url('/') }}#courses" class="btn btn-sm btn-outline-secondary rounded-pill px-3 px-sm-4">← All courses</a>
            </div>
        </div>
    </nav>

    <header class="roadmap-hero">
        <div class="container position-relative" style="z-index:1">
            <a href="{{ url('/') }}#courses" class="text-secondary text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Courses</a>
            <div class="row align-items-center g-4 mt-2">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center gap-3 mb-3"><div class="roadmap-icon"><i class="bi {{ $course['icon'] }}"></i></div><span class="badge rounded-pill px-3 py-2" style="background:#fff;color:var(--roadmap-accent)">HUSTLEWISE LEARNING PATH</span></div>
                    <h1>{{ $course['title'] }}</h1>
                    <p class="roadmap-lead mt-3">{{ $course['subtitle'] }} {{ $course['description'] }}</p>
                    <a href="{{ route('demo.book', ['course' => $slug]) }}" class="btn btn-orange btn-lg rounded-pill px-4 mt-2">Book a free demo <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
                <div class="col-lg-5"><img class="roadmap-hero-image" src="{{ $course['image'] }}" alt="{{ $course['title'] }} learning course"></div>
            </div>
        </div>
    </header>

    <section class="roadmap-summary">
        <div class="container"><div class="row g-3">
            <div class="col-md-4"><article class="roadmap-summary-card"><i class="bi bi-person-video3"></i><h2 class="h6 fw-bold mt-2 mb-1">Live teacher guidance</h2><p class="small text-secondary mb-0">Learn with friendly, personalised support.</p></article></div>
            <div class="col-md-4"><article class="roadmap-summary-card"><i class="bi bi-signpost-split"></i><h2 class="h6 fw-bold mt-2 mb-1">Step-by-step progress</h2><p class="small text-secondary mb-0">Build skills in a clear learning sequence.</p></article></div>
            <div class="col-md-4"><article class="roadmap-summary-card"><i class="bi bi-stars"></i><h2 class="h6 fw-bold mt-2 mb-1">Practice that feels rewarding</h2><p class="small text-secondary mb-0">Use each new skill in fun activities and projects.</p></article></div>
        </div></div>
    </section>

    <main class="roadmap-section">
        <div class="container">
            <div class="text-center mb-4"><span class="section-label">YOUR LEARNING JOURNEY</span><h2 class="display-6 fw-bold mt-2">Explore the roadmap</h2><p class="text-secondary">Choose a grade group to see the skills learners build along the way.</p></div>
            <div class="grade-tabs" aria-label="Choose grade group">
                @foreach ($course['grades'] as $grade)
                    <a class="grade-tab {{ $selectedGrade === $grade ? 'active' : '' }}" href="{{ route('courses.show', ['slug' => $slug, 'grade' => $grade]) }}" {{ $selectedGrade === $grade ? 'aria-current=page' : '' }}>{{ $grade }}</a>
                @endforeach
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3"><h3 class="h4 fw-bold mb-0">{{ $selectedGrade }} learning path</h3><span class="text-secondary small"><i class="bi bi-clock me-1" style="color:var(--roadmap-accent)"></i>Progress at your own pace</span></div>
            <div class="roadmap-track">
                @foreach ($course['roadmap'][$selectedGrade] as $index => $milestone)
                    <article class="roadmap-node {{ $milestone['kind'] === 'Milestone' ? 'is-milestone' : '' }}">
                        <div class="roadmap-node-icon"><i class="bi {{ $milestone['kind'] === 'Milestone' ? 'bi-check2' : $course['icon'] }}"></i></div><span class="roadmap-node-number">{{ $index + 1 }}</span>
                        <div class="roadmap-node-card"><small>{{ $milestone['kind'] }} {{ $index + 1 }}</small><h3>{{ $milestone['title'] }}</h3></div>
                    </article>
                @endforeach
            </div>
            <div class="roadmap-finish"><i class="bi bi-flag-fill me-2" style="color:var(--roadmap-accent)"></i>Every milestone gives learners a chance to practise, share and celebrate what they can do.</div>
        </div>
    </main>

    <section class="pb-5"><div class="container"><div class="p-4 p-md-5 rounded-4 text-center" style="background:linear-gradient(120deg,#fff0df,#fff8f0)"><span class="fs-2" aria-hidden="true">✨</span><h2 class="h3 fw-bold mt-2">Ready to see {{ $course['title'] }} in action?</h2><p class="text-secondary">Book a free demo and explore this learning path with a teacher.</p><a href="{{ route('demo.book', ['course' => $slug]) }}" class="btn btn-orange rounded-pill px-4">Book your free demo →</a></div></div></section>
    @include('partials.footer')
    @include('partials.demo_sticky_cta')
</body>
</html>
