<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Teach with HustleWise. Share your skills and help children learn with confidence.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Teach with HustleWise</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css?v=all-sections-responsive-spacing') }}">
    <style>
        :root { --teacher-orange: #ff7a00; --teacher-ink: #222; --teacher-muted: #6c757d; }
        body { background: #fffaf5; color: var(--teacher-ink); }
        .teacher-nav { background: #fff; }
        .teacher-brand { color: var(--teacher-ink); font-size: 1.55rem; font-weight: 800; text-decoration: none; }
        .teacher-brand span { color: var(--teacher-orange); }
        .teacher-brand > span { color: var(--teacher-ink); }
        .teacher-hero { padding: clamp(3rem, 6vw, 5.5rem) 0; background: radial-gradient(circle at 85% 20%, #ffe6cb 0, transparent 30%), linear-gradient(135deg, #fffaf5, #fff 70%); }
        .teacher-hero h1 { max-width: 760px; font-size: clamp(2.5rem, 6vw, 4.6rem); line-height: 1.05; font-weight: 800; letter-spacing: -.04em; }
        .teacher-hero h1 span { color: var(--teacher-orange); }
        .teacher-lead { max-width: 650px; color: var(--teacher-muted); font-size: 1.15rem; }
        .teacher-section { padding: clamp(2rem, 4vw, 3.5rem) 0; }
        .teacher-section-title { font-weight: 800; letter-spacing: -.025em; }
        .teacher-card { height: 100%; background: #fff; border: 1px solid #f2e5d9; border-radius: 20px; padding: 1.5rem; box-shadow: 0 10px 28px rgba(62, 40, 20, .05); }
        .teacher-icon { width: 48px; height: 48px; display: grid; place-items: center; background: #fff1e3; color: var(--teacher-orange); border-radius: 15px; font-size: 1.35rem; }
        .teacher-role { border: 1px solid #f0e1d4; background: #fff; border-radius: 22px; padding: 2rem; height: 100%; }
        .teacher-role.active { border-color: #ffc58e; background: linear-gradient(145deg, #fff, #fff7ed); }
        .teacher-hero-photo { position:relative; }
        .teacher-hero-photo img { width:100%;height:clamp(280px,38vw,440px);object-fit:contain;border-radius:28px;box-shadow:0 22px 55px rgba(62,40,20,.10);animation:teacherFloat 5s ease-in-out infinite; }
        .teacher-photo-note { position:absolute;left:-18px;bottom:24px;background:#fff;border:1px solid #f0e1d4;border-radius:16px;padding:.8rem 1rem;box-shadow:0 10px 24px #3e28121a;font-weight:600;animation:teacherFloat 5s ease-in-out infinite reverse; }
        .teacher-role-tabs { display:flex;background:#f4f5f7;padding:6px;border-radius:16px;gap:6px;max-width:520px;margin:0 auto 1.25rem; }
        .teacher-role-tab { flex:1;border:0;background:transparent;border-radius:12px;padding:.8rem 1rem;font-weight:700;color:#6c757d;transition:background .2s,color .2s,box-shadow .2s; }
        .teacher-role-tab.active { background:#fff;color:#242424;box-shadow:0 2px 10px #24242414; }
        .teacher-role-panel { display:none;max-width:960px;margin:auto;background:#fff;border:1px solid #f0e1d4;border-radius:22px;overflow:hidden;box-shadow:0 14px 36px rgba(62,40,20,.06); }
        .teacher-role-panel.active { display:grid;grid-template-columns:minmax(220px,.8fr) 1.2fr;animation:teacherStepIn .3s ease both; }
        .teacher-role-image { display:block;min-height:0;height:330px;width:100%;object-fit:contain;padding:1rem;background:#fff9f2; }
        .teacher-role-copy { padding:clamp(1.5rem,4vw,3rem);align-self:center; }
        .teacher-role-copy ul { padding-left:1.2rem; }
        .teacher-form-wrap { background: #fff; border: 1px solid #f0e1d4; border-radius: 24px; padding: clamp(1.25rem, 4vw, 3rem); box-shadow: 0 14px 38px rgba(62, 40, 20, .07); }
        .teacher-form-wrap .form-control, .teacher-form-wrap .form-select { min-height: 48px; border-radius: 12px; }
        .teacher-form-wrap textarea.form-control { min-height: 130px; }
        .teacher-check { border: 1px solid #f0e1d4; border-radius: 12px; padding: .8rem 1rem; height: 100%; }
        .teacher-requirements { background: #fff3e6; }
        .teacher-orange-btn { background: var(--teacher-orange); border-color: var(--teacher-orange); color: white; }
        .teacher-orange-btn:hover { color: white; background: #e96e00; border-color: #e96e00; }
        .teacher-application-step { display:none; animation: teacherStepIn .25s ease both; }
        .teacher-application-step.active { display:block; }
        #hiringForm { min-height:260px; }
        #teacher-application { padding-block: clamp(1.5rem, 3vw, 2.5rem); }
        #teacher-application { scroll-margin-top: 90px; }
        @keyframes teacherStepIn { from { opacity:0; transform:translateY(8px); } to { opacity:1; transform:translateY(0); } }
        @keyframes teacherFloat { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-7px); } }
        @media (prefers-reduced-motion: reduce) { .teacher-hero-photo img,.teacher-photo-note { animation:none; } }
        @media (max-width: 767.98px) { .teacher-role-panel.active { grid-template-columns:1fr; }.teacher-role-image { height:250px; }.teacher-photo-note { left:10px; } }
        @media (max-width: 575.98px) { .teacher-hero { text-align: center; } .teacher-hero .teacher-lead { margin-inline: auto; } }
    </style>
</head>
<body class="with-demo-bottom-bar">
    <nav class="navbar teacher-nav shadow-sm sticky-top">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <a class="teacher-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="HustleWise" height="44">
                <span>Hustle<span>Wise</span></span>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3 px-sm-4">← Back to home</a>
            </div>
        </div>
    </nav>

    <header class="teacher-hero">
        <div class="container"><div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge rounded-pill px-3 py-2 mb-4" style="background:#fff0df;color:#e96e00">TEACH WITH HUSTLEWISE</span>
                <h1>Help children find their <span>voice and confidence.</span></h1>
                <p class="teacher-lead mt-4">Bring your knowledge, warmth and creativity to online classes that make learning meaningful. Get to know the role and apply to join our teaching community.</p>
                <a class="btn btn-orange btn-lg rounded-pill px-4 mt-2" href="#teacher-application">Start your application <span aria-hidden="true">→</span></a>
            </div>
            <div class="col-lg-6"><div class="teacher-hero-photo"><img src="{{ asset('teacher-high-five.png') }}" alt="Teacher celebrating a student's answer with a high five"><span class="teacher-photo-note"><i class="bi bi-heart-fill me-2" style="color:#ff7a00"></i>Make learning meaningful</span></div></div>
        </div>
        </div>
    </header>

    <main>
        <section class="teacher-section" id="teacher-application">
            <div class="container" style="max-width:1000px">
                <div class="text-center mb-4">
                    <span class="section-label">TAKE THE NEXT STEP</span>
                    <h2 class="teacher-section-title mt-2">Apply to teach with us</h2>
                    <p class="text-secondary">Share your details and resume. Our team will review your application and contact you.</p>
                </div>
                <div class="progress mb-3" style="height:8px"><div class="progress-bar" id="teacherProgressBar" role="progressbar" style="width:14.3%" aria-valuenow="14.3" aria-valuemin="0" aria-valuemax="100"></div></div>
                <div id="teacherSuccessMessage" class="alert alert-success text-center d-none rounded-4 p-5" role="status">
                    <div class="display-1 mb-3">🎉</div>
                    <h3 class="fw-bold mb-3">Application submitted!</h3>
                    <p class="text-secondary fs-5">Thank you for applying to teach with HustleWise. Your details and resume have been received. Our team will review them and contact you soon.</p>
                    <a href="{{ url('/') }}" class="btn teacher-orange-btn rounded-pill px-4">Return to home</a>
                </div>
                <div id="teacherFormCard" class="teacher-form-wrap">
                    <form id="hiringForm" onsubmit="event.preventDefault(); submitApplication();">
                        <input id="firstNameInput" type="hidden">
                        <div class="teacher-application-step active" data-teacher-step="1">
                            <h3 class="h4 fw-bold mb-4">Let’s get to know you</h3>
                            <div class="row g-3"><div class="col-md-6"><label class="form-label fw-semibold" for="fullNameInput">Full name</label><input class="form-control" id="fullNameInput" type="text" placeholder="Your full name" autocomplete="name" required></div><div class="col-md-6"><label class="form-label fw-semibold" for="phoneInput">Phone number</label><input class="form-control" id="phoneInput" type="tel" inputmode="numeric" pattern="[0-9]{10}" minlength="10" maxlength="10" placeholder="10-digit phone number" oninput="this.value=this.value.replace(/[^0-9]/g,'')" autocomplete="tel" required></div></div>
                            <div class="d-flex justify-content-end mt-4"><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(1)">Next <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="2">
                            <div class="text-center py-2"><div class="teacher-icon mx-auto mb-3" style="width:64px;height:64px;font-size:1.7rem"><i class="bi bi-stars"></i></div><span class="section-label">YOUR TEACHING JOURNEY STARTS HERE</span><h3 class="h2 fw-bold mt-3">Welcome to the hiring process<span id="welcomeName"></span>!</h3><p class="text-secondary fs-5 mx-auto" style="max-width:600px">We’ll guide you through a few short steps to learn about your background and teaching experience.</p><div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(2)">← Back</button><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(2)">Continue <i class="bi bi-arrow-right"></i></button></div></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="3">
                            <h3 class="h4 fw-bold mb-4">Email verification</h3>
                            <div class="row g-3 align-items-end"><div class="col-md-8"><label class="form-label fw-semibold" for="emailInput">Email address</label><input class="form-control" id="emailInput" type="email" placeholder="name@example.com" autocomplete="email" required></div><div class="col-md-4"><button type="button" class="btn btn-outline-warning rounded-pill w-100 py-2" id="sendTeacherOtp" onclick="sendTeacherOtp()">Send verification code</button></div><div class="col-md-6"><label class="form-label fw-semibold" for="teacherOtp">4-digit verification code</label><input class="form-control" id="teacherOtp" type="text" inputmode="numeric" pattern="[0-9]{4}" maxlength="4" placeholder="Enter 4-digit code" oninput="this.value=this.value.replace(/[^0-9]/g,'')"></div><div class="col-12"><span id="teacherOtpStatus" class="small text-secondary" aria-live="polite"></span></div></div>
                            <div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(3)">← Back</button><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(3)">Next <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="4">
                            <h3 class="h4 fw-bold mb-4">Your personal and education details</h3>
                            <div class="row g-3 mb-4"><div class="col-md-4"><div class="teacher-check"><small class="text-secondary d-block">Full name</small><strong id="reviewFullName"></strong></div></div><div class="col-md-4"><div class="teacher-check"><small class="text-secondary d-block">Phone number</small><strong id="reviewPhone"></strong></div></div><div class="col-md-4"><div class="teacher-check"><small class="text-secondary d-block">Email</small><strong id="reviewEmail"></strong></div></div></div>
                            <div class="row g-3"><div class="col-md-6"><label class="form-label fw-semibold" for="genderSelect">Gender</label><select class="form-select" id="genderSelect" required><option value="">Select gender</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></div><div class="col-md-6"><label class="form-label fw-semibold" for="ageInput">Age</label><input class="form-control" id="ageInput" type="number" min="18" max="100" placeholder="18 or older" required></div><div class="col-md-6"><label class="form-label fw-semibold" for="qualificationInput">Qualification</label><input class="form-control" id="qualificationInput" type="text" placeholder="e.g. B.Ed, teacher training" required></div><div class="col-md-6"><label class="form-label fw-semibold" for="degreeInput">Highest degree</label><input class="form-control" id="degreeInput" type="text" placeholder="e.g. BA in English" required></div></div>
                            <div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(4)">← Back</button><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(4)">Next <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="5">
                            <h3 class="h4 fw-bold mb-4">Tell us about your work experience</h3><label class="form-label fw-semibold" for="experienceInput">Teaching and work experience</label><textarea class="form-control" id="experienceInput" placeholder="Tell us about your teaching roles, experience and subjects" required></textarea><div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(5)">← Back</button><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(5)">Next <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="6">
                            <h3 class="h4 fw-bold mt-2 mb-4">Teaching certifications</h3><fieldset><legend class="form-label fw-semibold fs-6">Select any you have <span class="text-secondary fw-normal">(optional)</span></legend><div class="row g-2"><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certTESOL"> TESOL</label></div><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certTOFFL"> TOEFL</label></div><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certCET"> CET</label></div><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certCLT"> CLT</label></div><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certCECT"> CECT</label></div><div class="col-6 col-md-4"><label class="teacher-check d-flex gap-2 align-items-center"><input type="checkbox" id="certCELTA"> CELTA</label></div></div><div id="teacherStep5" class="mt-3"><label class="form-label fw-semibold" for="otherCertifications">Other certifications</label><input class="form-control" id="otherCertifications" type="text" placeholder="Any other relevant certifications"></div></fieldset><div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(6)">← Back</button><button type="button" class="btn teacher-orange-btn btn-lg rounded-pill px-4" onclick="nextTeacherApplicationStep(6)">Next <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                        <div class="teacher-application-step" data-teacher-step="7">
                            <h3 class="h4 fw-bold mt-2 mb-4">Add your resume</h3><label class="form-label fw-semibold" for="resumeFile">Resume (PDF, 1 KB–20 MB)</label><input class="form-control" type="file" id="resumeFile" accept="application/pdf,.pdf" required><div class="form-text">Please upload your latest resume as a PDF.</div><div class="d-flex justify-content-between mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="previousTeacherApplicationStep(7)">← Back</button><button class="btn teacher-orange-btn btn-lg rounded-pill px-5" type="submit">Submit application <i class="bi bi-arrow-right"></i></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="teacher-section pt-5">
            <div class="container">
                <div class="text-center mb-4">
                    <span class="section-label">THE HUSTLEWISE TEACHER</span>
                    <h2 class="teacher-section-title mt-2">A teacher, mentor and lifelong learner</h2>
                    <p class="text-secondary mx-auto" style="max-width:700px">Choose a role to see how teachers guide children and keep growing with HustleWise.</p>
                </div>
                <div class="teacher-role-tabs" role="tablist" aria-label="Teacher roles">
                    <button class="teacher-role-tab active" type="button" id="mentorTab" role="tab" aria-selected="true" aria-controls="mentorPanel" onclick="showTeacherRole('mentor')">Mentor</button>
                    <button class="teacher-role-tab" type="button" id="learnerTab" role="tab" aria-selected="false" aria-controls="learnerPanel" onclick="showTeacherRole('learner')">Learner</button>
                </div>
                <div class="teacher-role-panel active" id="mentorPanel" role="tabpanel" aria-labelledby="mentorTab">
                    <img class="teacher-role-image" src="{{ asset('mentor-teacher-student.png') }}" alt="Teacher mentoring a student">
                    <div class="teacher-role-copy"><span class="section-label">YOUR IMPACT</span><h3 class="h3 fw-bold mt-2">As a mentor</h3><p class="text-secondary">Be the encouraging guide who helps each child feel ready to try.</p><ul class="text-secondary mb-0"><li class="mb-2">Lead friendly online lessons from home.</li><li class="mb-2">Coach children through practice and helpful feedback.</li><li>Celebrate progress and growing confidence.</li></ul></div>
                </div>
                <div class="teacher-role-panel" id="learnerPanel" role="tabpanel" aria-labelledby="learnerTab" hidden>
                    <img class="teacher-role-image" src="{{ asset('learner-graduate.png') }}" alt="Learner celebrating a graduation milestone">
                    <div class="teacher-role-copy"><span class="section-label">GROW WITH US</span><h3 class="h3 fw-bold mt-2">As a learner</h3><p class="text-secondary">Keep discovering better ways to support young learners.</p><ul class="text-secondary mb-0"><li class="mb-2">Join onboarding and practical teaching guidance.</li><li class="mb-2">Build your classroom and online teaching skills.</li><li>Share ideas with the HustleWise teaching community.</li></ul></div>
                </div>
            </div>
        </section>

        <section class="teacher-section teacher-requirements">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="section-label">WHAT HELPS YOU SUCCEED</span>
                    <h2 class="teacher-section-title mt-2">What we look for in a teacher</h2>
                    <p class="text-secondary">A supportive attitude and a love of helping children learn matter to us.</p>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">🎓</div><h3 class="h5 fw-bold">Education</h3><p class="text-secondary mb-0">A bachelor’s degree or relevant higher qualification is preferred.</p></div></div>
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">💬</div><h3 class="h5 fw-bold">Communication</h3><p class="text-secondary mb-0">Clear, confident communication and patience with young learners.</p></div></div>
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">📚</div><h3 class="h5 fw-bold">Subject knowledge</h3><p class="text-secondary mb-0">Strong English skills and confidence teaching your chosen subjects.</p></div></div>
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">🏅</div><h3 class="h5 fw-bold">Relevant training</h3><p class="text-secondary mb-0">TESOL, CELTA, TOEFL or other teaching certificates are welcome.</p></div></div>
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">💻</div><h3 class="h5 fw-bold">Online readiness</h3><p class="text-secondary mb-0">A reliable internet connection and comfort using basic apps and websites.</p></div></div>
                    <div class="col-sm-6 col-lg-4"><div class="teacher-card"><div class="teacher-icon mb-3">🤝</div><h3 class="h5 fw-bold">A team mindset</h3><p class="text-secondary mb-0">Willingness to collaborate and help families stay connected to learning.</p></div></div>
                </div>
            </div>
        </section>


    </main>

    @include('partials.footer')
    <div class="modal fade" id="alertModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><div class="modal-content border-0 rounded-4 shadow"><div class="modal-body text-center p-5"><h4 class="fw-bold mb-3" id="modalTitle">Alert</h4><p class="text-secondary mb-4 fs-5" id="modalMessage">Please check your details and try again.</p><button type="button" class="btn teacher-orange-btn rounded-pill px-5" data-bs-dismiss="modal">Continue</button></div></div></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
    <script>
        function teacherApplicationStep(stepNumber) {
            return document.querySelector(`[data-teacher-step="${stepNumber}"]`);
        }
        function sendTeacherOtp() {
            const email = document.getElementById('emailInput');
            if (!email.checkValidity()) { email.reportValidity(); return; }
            document.getElementById('teacherOtpStatus').textContent = 'Preview mode: enter any 4 digits to continue. No email has been sent.';
            document.getElementById('teacherOtp').focus();
        }
        function nextTeacherApplicationStep(currentStep) {
            const currentPanel = teacherApplicationStep(currentStep);
            for (const field of currentPanel.querySelectorAll('input[required], select[required], textarea[required]')) {
                if (!field.checkValidity()) { field.reportValidity(); return; }
            }
            if (currentStep === 1) {
                const fullName = document.getElementById('fullNameInput').value.trim();
                document.getElementById('firstNameInput').value = fullName.split(/\s+/)[0];
                document.getElementById('welcomeName').textContent = `, ${fullName}`;
            }
            if (currentStep === 3) {
                const code = document.getElementById('teacherOtp');
                if (!/^\d{4}$/.test(code.value)) { code.setCustomValidity('Enter 4 digits to continue.'); code.reportValidity(); code.addEventListener('input', () => code.setCustomValidity(''), { once: true }); return; }
                document.getElementById('reviewFullName').textContent = document.getElementById('fullNameInput').value.trim();
                document.getElementById('reviewPhone').textContent = document.getElementById('phoneInput').value;
                document.getElementById('reviewEmail').textContent = document.getElementById('emailInput').value.trim();
            }
            currentPanel.classList.remove('active');
            teacherApplicationStep(currentStep + 1).classList.add('active');
            const progress = ((currentStep + 1) / 7) * 100;
            document.getElementById('teacherProgressBar').style.width = `${progress}%`;
            document.getElementById('teacherProgressBar').setAttribute('aria-valuenow', progress);
        }
        function previousTeacherApplicationStep(currentStep) {
            teacherApplicationStep(currentStep).classList.remove('active');
            teacherApplicationStep(currentStep - 1).classList.add('active');
            const progress = ((currentStep - 1) / 7) * 100;
            document.getElementById('teacherProgressBar').style.width = `${progress}%`;
            document.getElementById('teacherProgressBar').setAttribute('aria-valuenow', progress);
        }
        function showTeacherRole(role) {
            const mentorSelected = role === 'mentor';
            document.getElementById('mentorPanel').hidden = !mentorSelected;
            document.getElementById('learnerPanel').hidden = mentorSelected;
            document.getElementById('mentorPanel').classList.toggle('active', mentorSelected);
            document.getElementById('learnerPanel').classList.toggle('active', !mentorSelected);
            document.getElementById('mentorTab').classList.toggle('active', mentorSelected);
            document.getElementById('learnerTab').classList.toggle('active', !mentorSelected);
            document.getElementById('mentorTab').setAttribute('aria-selected', mentorSelected);
            document.getElementById('learnerTab').setAttribute('aria-selected', !mentorSelected);
        }
        function showAlert(title, message) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalMessage').textContent = message;
            bootstrap.Modal.getOrCreateInstance(document.getElementById('alertModal')).show();
        }
    </script>
    @include('partials.demo_sticky_cta')
</body>
</html>
