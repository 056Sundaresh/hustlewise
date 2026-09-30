<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Book a free HustleWise demo class and discover a fun way for your child to learn.">
    <title>Book a Free Demo | HustleWise</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css?v=demo-booking-page') }}">
    <style>
        :root { --demo-orange:#ff7a00; --demo-ink:#242424; }
        body { background:#fffaf5; color:var(--demo-ink); }
        .demo-nav { background:#fff; }
        .demo-page-brand { color:#242424; font-size:1.5rem; font-weight:800; text-decoration:none; }
        .demo-page-brand span { color:var(--demo-orange); }
        .demo-page-brand > span { color:#242424; }
        .demo-hero { position:relative; overflow:hidden; padding:clamp(3rem,7vw,5rem) 0 2.5rem; background:linear-gradient(135deg,#fff7ee,#fff 65%); }
        .demo-hero h1 { max-width:800px; font-size:clamp(2.4rem,5vw,4rem); line-height:1.08; letter-spacing:-.04em; font-weight:800; }
        .demo-hero h1 span { color:var(--demo-orange); }
        .demo-lead { max-width:640px; color:#6c757d; font-size:1.12rem; }
        .demo-art { position:absolute; right:9%; top:22%; width:180px; height:180px; border-radius:50%; background:#ffedd9; display:grid; place-items:center; font-size:5rem; animation:demoFloat 4s ease-in-out infinite; box-shadow:0 18px 45px #ff7a0020; }
        .demo-spark { position:absolute; color:#ff9d42; font-size:1.7rem; animation:demoTwinkle 2.4s ease-in-out infinite; }
        .demo-spark.one { top:24%; right:7%; }.demo-spark.two { top:68%; right:21%; animation-delay:.8s; }
        @keyframes demoFloat { 0%,100% { transform:translateY(0) rotate(-4deg); } 50% { transform:translateY(-13px) rotate(4deg); } }
        @keyframes demoTwinkle { 0%,100% { opacity:.45; transform:scale(.8); } 50% { opacity:1; transform:scale(1.18); } }
        .demo-booking-section { padding:1.5rem 0 4rem; }
        .demo-form-card { background:#fff; border:1px solid #f0e3d7; border-radius:24px; box-shadow:0 18px 48px #3c28120c; padding:clamp(1.25rem,4vw,2.5rem); }
        .demo-form-card .form-control,.demo-form-card .form-select { min-height:48px; border-radius:12px; }
        .demo-form-card textarea.form-control { min-height:100px; }
        .demo-step { display:none; animation:demoEnter .35s ease both; }.demo-step.active { display:block; }
        @keyframes demoEnter { from { opacity:0; transform:translateY(8px); } to { opacity:1; transform:translateY(0); } }
        .demo-aside-card { border-radius:22px; background:#fff1e3; padding:1.5rem; height:100%; }
        .demo-aside-icon { width:46px;height:46px;display:grid;place-items:center;background:#fff;color:var(--demo-orange);border-radius:15px;font-size:1.35rem; }
        .demo-class-select { display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:.55rem; }
        .demo-class-button { border:1px solid #e7e1dc;background:#fff;border-radius:10px;padding:.7rem .3rem;color:#454545; }
        .demo-class-button:hover,.demo-class-button.selected { border-color:var(--demo-orange);background:#fff1e3;color:#d65f00; }
        .demo-mode-options { display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:.9rem;margin-bottom:1.2rem; }
        .demo-mode-card { display:flex;align-items:center;gap:.85rem;min-height:145px;padding:.8rem 1rem;border:1px solid #e7e1dc;border-radius:16px;background:#fff;cursor:pointer;transition:border-color .2s,background .2s,transform .2s; }
        .demo-mode-card:hover { transform:translateY(-2px); }
        .demo-mode-card:has(input:checked) { border-color:var(--demo-orange);background:#fff8f1;box-shadow:0 6px 18px #ff7a0015; }
        .demo-mode-card input { accent-color:var(--demo-orange);flex:0 0 auto; }
        .demo-mode-card img { width:125px;height:122px;flex:0 0 125px;object-fit:contain;border-radius:12px;background:#fff; }
        .demo-mode-copy strong { display:block;font-size:1rem; }.demo-mode-copy small { display:block;color:#6c757d;margin-top:.2rem; }
        .demo-success-panel { background:#fff;border:1px solid #f0e3d7;border-radius:24px;padding:clamp(1.25rem,4vw,2.5rem);box-shadow:0 18px 48px #3c28120c; }
        .demo-success-top { display:flex;justify-content:space-between;gap:1rem;align-items:center;flex-wrap:wrap; }
        .demo-confirmed,.demo-trial { border-radius:999px;padding:.55rem .9rem;font-weight:700; }
        .demo-confirmed { background:#fff1e3;color:#c95a00; }.demo-trial { background:#fff2c7;color:#705300; }
        .demo-schedule { display:grid;grid-template-columns:1fr 1.3fr;align-items:center;gap:1rem;background:#252547;color:white;border:2px solid #ffb53f;border-radius:18px;padding:1.4rem 1.6rem;margin:1.2rem 0; }
        .demo-schedule-time { text-align:center;font-size:clamp(2rem,5vw,3.4rem);font-weight:800;line-height:1.1; }.demo-schedule-time small { display:block;font-size:.9rem;font-weight:500;margin-top:.5rem; }
        .demo-info-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:.85rem;margin:1.2rem 0; }
        .demo-info-card { display:flex;gap:.8rem;align-items:center;border:1px solid #e9e1da;border-radius:16px;padding:1rem; }.demo-info-card i { font-size:1.5rem;color:var(--demo-orange); }
        .demo-info-card p { color:#6c757d;font-size:.9rem;margin:0; }.demo-info-card strong { display:block;margin-bottom:.25rem; }
        .demo-countdown { background:#fff1e3;border-radius:16px;padding:1.1rem;text-align:center; }
        @media(max-width:991.98px) { .demo-art { width:125px;height:125px;font-size:3.5rem;right:5%;top:35%; } }
        @media(max-width:767.98px) { .demo-art,.demo-spark { display:none; }.demo-info-grid { grid-template-columns:1fr; }.demo-class-select { grid-template-columns:repeat(3,minmax(0,1fr)); }.demo-schedule { grid-template-columns:1fr;text-align:center; } }
        @media(max-width:520px) { .demo-mode-options { grid-template-columns:1fr; }.demo-mode-card { min-height:120px; }.demo-mode-card img { width:104px;height:100px;flex-basis:104px; } }
        @media(prefers-reduced-motion:reduce) { *,*::before,*::after { animation-duration:.01ms !important; animation-iteration-count:1 !important; scroll-behavior:auto !important; } }
    </style>
</head>
<body class="with-demo-bottom-bar">
    <nav class="navbar demo-nav shadow-sm sticky-top">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <a class="demo-page-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="HustleWise" height="44">
                <span class="text-dark">Hustle<span>Wise</span></span>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3 px-sm-4">← Back to home</a>
            </div>
        </div>
    </nav>

    <header class="demo-hero">
        <div class="container position-relative">
            <span class="badge rounded-pill px-3 py-2 mb-3" style="background:#fff0df;color:#dc6800">A LITTLE TASTE OF BIG IDEAS</span>
            <h1>Learning can feel like <span>an adventure.</span></h1>
            <p class="demo-lead mt-3 mb-0">Choose a course and a convenient time. We’ll help your child explore a live class with a friendly HustleWise teacher.</p>
            <div class="demo-art" aria-hidden="true">📚</div><span class="demo-spark one" aria-hidden="true">✦</span><span class="demo-spark two" aria-hidden="true">✧</span>
        </div>
    </header>

    <main class="demo-booking-section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4">
                    <aside class="demo-aside-card">
                        <div class="demo-aside-icon mb-3"><i class="bi bi-stars"></i></div>
                        <h2 class="h4 fw-bold">A free class, made for your child</h2>
                        <p class="text-secondary">Meet a teacher, try a real lesson and discover a subject your child will love.</p>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-3"><i class="bi bi-check-circle-fill me-2" style="color:#ff7a00"></i>Personal attention from a teacher</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill me-2" style="color:#ff7a00"></i>Friendly, interactive learning</li>
                            <li><i class="bi bi-check-circle-fill me-2" style="color:#ff7a00"></i>Helpful feedback after class</li>
                        </ul>
                        <div class="mt-4 p-3 bg-white rounded-4"><span class="fs-4 me-2">💡</span><strong>It only takes a minute</strong><p class="text-secondary small mb-0 mt-1">Tell us what your child would like to learn.</p></div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="demo-form-card">
                        <div class="mb-4">
                            <h2 class="h3 fw-bold mb-1" id="demoModalLabel">Book your free demo</h2>
                            <p class="text-secondary mb-3" id="demoModalSubtitle">Share a few details so we can plan the right class.</p>
                            <div class="progress" id="demoProgress" style="height:7px"><div class="progress-bar" id="progressBar" role="progressbar" style="width:20%" aria-valuemin="0" aria-valuemax="100"></div></div>
                        </div>
                        <div id="successMessage" class="demo-success-panel d-none" role="status" aria-live="polite">
                            <div class="demo-success-top"><span class="demo-confirmed"><i class="bi bi-check-circle me-1"></i> Booking confirmed</span><span class="demo-trial">Free trial class</span></div>
                            <h3 id="demoSuccessTitle" class="h3 fw-bold mt-3">Your demo is booked!</h3>
                            <div class="demo-schedule"><div><strong id="demoSuccessWeekday">Demo day</strong><br><span id="demoSuccessDate">Date confirmed</span></div><div class="demo-schedule-time"><span id="demoSuccessTime">—</span><small>IST</small></div></div>
                            <p class="text-secondary">Your demo link will be shared shortly.</p>
                            <hr>
                            <h4 class="h5 fw-bold">What to expect in your demo</h4>
                            <p class="text-secondary"><i class="bi bi-mic-fill me-2" style="color:#ff7a00"></i><strong>Course:</strong> <span id="demoSuccessCourse">Your selected course</span></p>
                            <div class="demo-info-grid">
                                <article class="demo-info-card"><i class="bi bi-mortarboard"></i><div><strong id="demoSuccessClassType">Live class with an expert teacher</strong><p>Personal attention in a fun, supportive space.</p></div></article>
                                <article class="demo-info-card"><i class="bi bi-file-earmark-text"></i><div><strong>Helpful feedback</strong><p>Insights about your child’s strengths and next steps.</p></div></article>
                                <article class="demo-info-card"><i class="bi bi-patch-check"></i><div><strong>Celebrate progress</strong><p>A participation certificate for their effort.</p></div></article>
                            </div>
                            <div class="demo-countdown mb-4">Your demo is getting closer!<br><span class="text-secondary">Starts in </span><strong id="demoCountdown">We’ll see you soon!</strong></div>
                            <a href="{{ url('/') }}" class="btn btn-orange rounded-pill px-4">Return to HustleWise</a>
                        </div>
                        <form id="demoForm" onsubmit="event.preventDefault(); submitDemoForm();">
                            <div class="demo-step active" id="demoStep1">
                                <h3 class="h5 fw-bold mb-3">1. Choose a course</h3>
                                <label for="courseSelect" class="form-label">What would your child like to learn?</label>
                                <select class="form-select mb-4" id="courseSelect" required><option value="">Choose a course...</option><option value="public-speaking" {{ request('course') === 'public-speaking' ? 'selected' : '' }}>Public Speaking</option><option value="creative-writing" {{ request('course') === 'creative-writing' ? 'selected' : '' }}>Creative Writing</option><option value="coding" {{ request('course') === 'coding' ? 'selected' : '' }}>Coding</option><option value="hustlewise-english" {{ request('course') === 'hustlewise-english' ? 'selected' : '' }}>HustleWise English</option><option value="mathematics" {{ request('course') === 'maths' ? 'selected' : '' }}>Mathematics</option><option value="business-english" {{ request('course') === 'business-english' ? 'selected' : '' }}>Business English</option><option value="music" {{ request('course') === 'music' ? 'selected' : '' }}>Music</option><option value="spoken-english" {{ request('course') === 'spoken-english' ? 'selected' : '' }}>Spoken English</option></select>
                                <div class="d-flex justify-content-end"><button type="button" class="btn btn-orange btn-lg rounded-pill px-4" onclick="demoNextStep(1,2)">Next <i class="bi bi-arrow-right"></i></button></div>
                            </div>
                            <div class="demo-step" id="demoStep2">
                                <h3 class="h5 fw-bold mb-3">2. Choose a class style</h3>
                                <fieldset class="mb-3"><legend class="form-label fs-6">Choose how your child would like to learn</legend><div class="demo-mode-options"><label class="demo-mode-card"><input type="radio" name="teacherPref" value="1 on 1" checked><img src="{{ asset('demo-one-to-one.png') }}" alt=""><span class="demo-mode-copy"><strong>One-on-one</strong><small>Personal attention in a focused lesson.</small></span></label><label class="demo-mode-card"><input type="radio" name="teacherPref" value="group"><img src="{{ asset('demo-group-class.png') }}" alt=""><span class="demo-mode-copy"><strong>Group class</strong><small>Learn and share ideas with other students.</small></span></label></div></fieldset>
                                <label for="demoFeedback" class="form-label">Anything you’d like us to know? <span class="text-secondary">(optional)</span></label><textarea class="form-control mb-4" id="demoFeedback" rows="3" placeholder="Share a goal or learning preference"></textarea>
                                <div class="d-flex justify-content-between"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="demoPrevStep(2,1)">← Back</button><button type="button" class="btn btn-orange btn-lg rounded-pill px-4" onclick="demoNextStep(2,3)">Next <i class="bi bi-arrow-right"></i></button></div>
                            </div>
                            <div class="demo-step" id="demoStep3">
                                <h3 class="h5 fw-bold mb-3">3. Pick a level and time</h3>
                                <label for="classSelect" class="form-label">Current class or category</label><select class="form-select mb-3" id="classSelect" required><option value="">Choose a class...</option>@for ($class = 1; $class <= 12; $class++)<option value="Class {{ $class }}">Class {{ $class }}</option>@endfor<option value="Studying">Studying</option><option value="Working">Working</option></select>
                                <div class="row g-3 mb-4"><div class="col-md-6"><label for="dateSelect" class="form-label">Preferred day</label><select class="form-select" id="dateSelect" required><option value="">Choose a day...</option><option value="today">Today</option><option value="tomorrow">Tomorrow</option><option value="day_after">Day after tomorrow</option></select></div><div class="col-md-6"><label for="timeSelect" class="form-label">Preferred time</label><input class="form-control" type="time" id="timeSelect" required></div></div>
                                <div class="d-flex justify-content-between"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="demoPrevStep(3,2)">← Back</button><button type="button" class="btn btn-orange btn-lg rounded-pill px-4" onclick="demoNextStep(3,4)">Next <i class="bi bi-arrow-right"></i></button></div>
                            </div>
                            <div class="demo-step" id="demoStep4">
                                <h3 class="h5 fw-bold mb-3">4. Contact details</h3>
                                <label for="demoEmailInput" class="form-label">Email address</label><input class="form-control mb-4" type="email" id="demoEmailInput" placeholder="name@example.com" required>
                                <div class="d-flex justify-content-between"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="demoPrevStep(4,3)">← Back</button><button type="button" class="btn btn-orange btn-lg rounded-pill px-4" onclick="demoNextStep(4,5)">Next <i class="bi bi-arrow-right"></i></button></div>
                            </div>
                            <div class="demo-step" id="demoStep5">
                                <h3 class="h5 fw-bold mb-3">5. Parent and learner details</h3>
                                <label for="parentName" class="form-label">Parent name</label><input class="form-control mb-3" id="parentName" type="text" placeholder="Your name" required>
                                <label for="MobileNumber" class="form-label">Mobile number</label><input class="form-control mb-3" id="MobileNumber" type="tel" inputmode="numeric" pattern="[0-9]{10}" minlength="10" maxlength="10" placeholder="10-digit mobile number" required>
                                <label for="childName" class="form-label">Child’s name</label><input class="form-control mb-4" id="childName" type="text" placeholder="Learner’s name" required>
                                <div class="d-flex justify-content-between"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="demoPrevStep(5,4)">← Back</button><button type="submit" class="btn btn-orange btn-lg rounded-pill px-4">Book my free demo <i class="bi bi-arrow-right"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="alertModal" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content border-0 rounded-4 shadow"><div class="modal-body text-center p-5"><h4 class="fw-bold mb-3" id="modalTitle">Alert</h4><p class="text-secondary mb-4 fs-5" id="modalMessage">Please check your details and try again.</p><button type="button" class="btn btn-orange rounded-pill px-5" data-bs-dismiss="modal">Continue</button></div></div></div></div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
    <script>
        let currentDemoStep = 1;
        function showAlert(title, message) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalMessage').textContent = message;
            bootstrap.Modal.getOrCreateInstance(document.getElementById('alertModal')).show();
        }
        function demoNextStep(current, next) {
            const step = document.getElementById(`demoStep${current}`);
            const required = step.querySelectorAll('input[required], select[required], textarea[required]');
            for (const field of required) { if (!field.checkValidity()) { field.reportValidity(); return; } }
            step.classList.remove('active');
            document.getElementById(`demoStep${next}`).classList.add('active');
            currentDemoStep = next;
            document.getElementById('progressBar').style.width = `${(next / 5) * 100}%`;
            document.getElementById(`demoStep${next}`).scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        function demoPrevStep(current, previous) {
            document.getElementById(`demoStep${current}`).classList.remove('active');
            document.getElementById(`demoStep${previous}`).classList.add('active');
            currentDemoStep = previous;
            document.getElementById('progressBar').style.width = `${(previous / 5) * 100}%`;
        }
    </script>
    @include('partials.demo_sticky_cta')
</body>
</html>
