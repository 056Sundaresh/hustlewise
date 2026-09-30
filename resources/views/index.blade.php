<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="HustleWise is a fun educational website where children can learn mathematics, science, English and creative skills through interactive activities.">
    <meta name="keywords"
        content="kids education, children learning, educational website, kids activities, mathematics, science, English">
    <meta name="author" content="HustleWise">
    <title>HustleWise</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=all-sections-responsive-spacing">
</head>
<body class="with-demo-bottom-bar">
    <!-- nav -->
    <nav class="navbar navbar-expand-xl bg-white shadow-sm sticky-top hustle-navbar">
      <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png"
                    alt="HustleWise Logo"
                    height="68">
            </a>
            <a class="navbar-brand fw-bold logo" href="#">Hustle<span>Wise</span></a>
            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"
                id="navbarMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active"
                            href="#home">Home</a>
                   </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#activities">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#joiners">
                            Teach Online
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#testimonials">
                            Testimonials
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="{{ route('demo.book') }}"
                            class="btn btn-orange">
                            Book your free demo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- home -->
<section id="home" class="bg-white overflow-hidden">

    <div class="container">
        <div class="row align-items-center  py-3">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 pe-lg-5">

                <div class="hero-content">

                    <!-- Small Badge -->
                    <div class="d-inline-flex align-items-center gap-2
                                rounded-pill px-3 py-2 mb-4"
                         style="background:#fff3e8; color:#ff7e27;">

                        <span>✨</span>
                        <span class="fw-semibold">
                            Learning Made Fun
                        </span>

                    </div>


                    <!-- Heading -->
                    <h1 class="display-3 fw-bold text-dark lh-1 mb-4">

                        Where Learning

                        <span class="d-block"
                              style="color:#ff7e27;">
                            Comes Alive.
                        </span>

                    </h1>


                    <!-- Question -->
                    <p class="fs-5 text-dark lh-lg mb-4"
                       style="max-width:600px;">

                        What if learning wasn't limited to a classroom,
                        a textbook, or just one skill?

                    </p>


                    <!-- Description -->
                    <p class="text-secondary lh-lg mb-4"
                       style="font-size:17px; max-width:620px;">

                        At <strong class="text-dark">HustleWise</strong>,
                        we bring together the things that help you learn,
                        create, communicate and grow — from
                        <strong class="text-dark">
                            English, Maths and Coding
                        </strong>
                        to
                        <strong class="text-dark">
                            Public Speaking, Music, Art, Crochet,
                            Creative Writing, Business English and Junior MBA.
                        </strong>

                    </p>


                    <!-- Demo button and learning values -->
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between gap-4 mt-4">

                        

                        <div class="border-start border-3 ps-4"
                             style="border-color:#ff7e27 !important;">
                            <div class="fw-semibold text-dark mb-2">Different interests.</div>
                            <div class="fw-semibold text-dark mb-2">Different strengths.</div>
                            <div class="fw-semibold text-dark">Different journeys.</div>
                        </div>
                        <a href="{{ route('demo.book') }}"
                           class="btn btn-lg rounded-pill px-4 py-3 fw-semibold text-white shadow-sm"
                           style="background:#ff7e27;">

                            Book your free demo
                            <span class="ms-1">→</span>

                        </a>

                    </div>

                </div>

            </div>


            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <div class="position-relative d-flex
                            justify-content-center align-items-center"
                     style="min-height:450px;">


                    <!-- Orange Background Shape -->
                    <div class="position-absolute rounded-circle"
                         style="
                            width:350px;
                            height:350px;
                            background:#fff3e8;
                            top:50%;
                            left:50%;
                            transform:translate(-50%,-50%);
                         ">
                    </div>


                    <!-- Image Card -->
                    <div class="position-relative bg-white rounded-4 shadow-lg p-3"
                         style="
                            width:390px;
                            max-width:85%;
                            z-index:2;
                         ">

                        <img src="{{ asset('home-learning-group.png') }}"
                             class="img-fluid rounded-4"
                             alt="Teacher helping students learn together in a classroom">

                    </div>


                    <!-- Floating Learn Badge -->
                    <div class="position-absolute bg-white rounded-4 shadow
                                px-3 py-2 d-flex align-items-center gap-2"
                         style="
                            top:55px;
                            left:5px;
                            z-index:3;
                         ">

                        <span class="fs-4">📚</span>

                        <div>
                            <small class="text-secondary d-block">
                                Learn
                            </small>

                            <strong class="text-dark">
                                Explore
                            </strong>
                        </div>

                    </div>


                    <!-- Floating Create Badge -->
                    <div class="position-absolute bg-white rounded-4 shadow
                                px-3 py-2 d-flex align-items-center gap-2"
                         style="
                            bottom:65px;
                            right:5px;
                            z-index:3;
                         ">

                        <span class="fs-4">🎨</span>

                        <div>
                            <small class="text-secondary d-block">
                                Create
                            </small>

                            <strong class="text-dark">
                                Imagine
                            </strong>
                        </div>

                    </div>


                    <!-- Orange Dot -->
                    <div class="position-absolute rounded-circle"
                         style="
                            width:22px;
                            height:22px;
                            background:#ff7e27;
                            top:35px;
                            right:65px;
                            z-index:3;
                         ">
                    </div>


                    <!-- Small Decorative Dot -->
                    <div class="position-absolute rounded-circle"
                         style="
                            width:12px;
                            height:12px;
                            background:#ff7e27;
                            bottom:40px;
                            left:70px;
                            z-index:3;
                         ">
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>
<!-- about -->
<section id="about"
    class="py-5">

    <div class="container py-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80"
                    class="img-fluid rounded-4 shadow"
                    alt="Teacher helping children learn">

            </div>

            <div class="col-lg-6">

                <span class="section-label">
                    ABOUT HUSTLEWISE
                </span>

                <h2 class="display-6 fw-bold mt-3">
                    One place to explore them all.
                </h2>

                <p class="text-secondary mt-4">
                    Learn something new.
                    Discover what you're good at.
                    Become a little more you.
                </p>

                <div class="row mt-4">

                    <div class="col-6">

                        <h3 class="fw-bold orange-text count-up"
                            data-count="100">
                            0+
                        </h3>

                        <p class="text-secondary">
                            Learning Activities
                        </p>

                    </div>

                    <div class="col-6">

                        <h3 class="fw-bold orange-text count-up"
                            data-count="20">
                            0+
                        </h3>

                        <p class="text-secondary">
                            Learning Topics
                        </p>

                    </div>

                </div>

                <div class="mt-3">

                    <a href="#courses"
                        class="btn btn-orange">
                        Explore HustleWise →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
    <!-- parrallax -->
    <section class="parallax-section">
       <div class="container text-center">
            <div class="parallax-content">
                <h2 class="display-5 fw-bold text-white">
                    Discover • Explore • Learn
                </h2>
                <p class="text-white fs-5 mt-3">
                    Every day is a new opportunity to learn something amazing!
                </p>
                <a href="#learn"
                    class="btn btn-light btn-lg mt-3">
                    Discover More
                </a>
            </div>
        </div>
    </section>
<!-- Course -->
    <section id="courses"
        class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
              <div class="moving-box">
                      <div class="moving-text">
                           <span>IB</span>
                           <span>•</span>
                           <span>CBSE</span>
                           <span>•</span>
                           <span>IGCSE</span>
                           <span>•</span>
                           <span>CUSTOMISED COURSES</span>
                      </div>
            </div>
               <span class="section-label">
                  LEARNING ZONE
                </span>
                <h2 class="fw-bold display-6 mt-2">
                    What Would You Like to Learn?
                </h2>
                <p class="text-secondary">
                    Choose a subject and start your learning adventure.
                </p>
            </div>
            <div class="row g-4">
                <!-- PUBLIC SPEAKING -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="public_speaking.jpg"
                            class="card-img-top"
                            alt="Public Speaking">
                        <div class="card-body p-4">
                          <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-mic-fill"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Public Speaking
                            </h3>
                            <p class="text-secondary">
                                Build confidence, master body language,
                                and learn to communicate effectively in front of
                                any audience.
                            </p>
                            <a href="{{ route('courses.show', 'public-speaking') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CREATIVE WRITING -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="creative_writing.jpg"
                            class="card-img-top"
                            alt="Creative Writing">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Creative Writing
                            </h3>
                            <p class="text-secondary">
                                Unleash your imagination, craft compelling
                                stories, and develop your unique writing voice.
                            </p>
                            <a href="{{ route('courses.show', 'creative-writing') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CODING -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=600&q=80"
                            class="card-img-top"
                            alt="Coding">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Coding
                            </h3>
                            <p class="text-secondary">
                                Learn the basics of programming, develop
                                problem-solving skills, and build your own
                                applications.
                            </p>
                            <a href="{{ route('courses.show', 'coding') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                       </div>
                    </div>
                </div>
                <!-- HUSTLE WISE ENGLISH -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="hustle_wise_english.jpg"
                            class="card-img-top"
                            alt="HustleWise English Programme">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-book-half"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                HustleWise English
                            </h3>
                            <p class="text-secondary">
                                Our signature comprehensive English programme
                                designed to enhance reading, writing, and
                                comprehension.
                            </p>
                            <a href="{{ route('courses.show', 'hustlewise-english') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- MATHS -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=600&q=80"
                            class="card-img-top"
                            alt="Maths">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-calculator-fill"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Maths
                            </h3>
                            <p class="text-secondary">
                                Master numbers, algebra, geometry, and build
                                strong logical reasoning skills through
                                interactive lessons.
                            </p>
                            <a href="{{ route('courses.show', 'maths') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- BUSINESS ENGLISH -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=600&q=80"
                            class="card-img-top"
                            alt="Business English">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Business English
                            </h3>
                            <p class="text-secondary">
                                Learn professional communication, email writing,
                                and vocabulary for the modern workplace.
                            </p>
                            <a href="{{ route('courses.show', 'business-english') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- MUSIC -->
                <div class="col-md-6 col-lg-4">
                   <div class="card subject-card h-100 border-0 shadow-sm">
                   <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=600&q=80"
                   class="card-img-top"
                   alt="Music">
               <div class="card-body p-4">

            <div class="subject-icon" aria-hidden="true">
                <i class="bi bi-music-note-beamed"></i>
            </div>

            <h3 class="h4 fw-bold mt-3">
                Music
            </h3>

            <p class="text-secondary">
                Explore music theory, instruments, singing techniques,
                rhythm, and the fundamentals of creating beautiful music.
            </p>

            <a href="{{ route('courses.show', 'music') }}"
                class="learn-link">

                Learn More →

            </a>

            </div>
          </div>
       </div>
                <!-- SPOKEN ENGLISH -->
                <div class="col-md-6 col-lg-4">
                    <div class="card subject-card h-100 border-0 shadow-sm">
                        <img src="spoken-english-teacher.png"
                            class="card-img-top"
                            alt="Teacher guiding a student during a spoken English lesson">
                        <div class="card-body p-4">
                            <div class="subject-icon" aria-hidden="true">
                                <i class="bi bi-chat-dots-fill"></i>
                            </div>
                            <h3 class="h4 fw-bold mt-3">
                                Spoken English
                            </h3>
                            <p class="text-secondary">
                                Improve your fluency, pronunciation, and
                                conversational skills to speak English
                                naturally and confidently.
                            </p>
                            <a href="{{ route('courses.show', 'spoken-english') }}"
                                class="learn-link">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- next parallax-->
    <section class="parallax-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="quote-box">
                        <h2 class="fw-bold">
                            "Every child is a little explorer!"
                        </h2>
                        <p class="mt-3 mb-0">
                            Give them the right tools and let their
                            imagination take them anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Actitvities -->
    <section id="activities"
        class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" id="activitiesIntro">
                <span class="section-label">
                    FUN ACTIVITIES
                </span>
                <h2 class="display-6 fw-bold mt-2">
                    Learn Through Play
                </h2>
                <p class="text-secondary">
                    Learning becomes exciting when children can play,
                    explore and experiment.
                </p>
            </div>
            <div class="row g-4" id="activityList">
                <div class="col-md-4">
                    <div class="activity-card text-center p-5 bg-white rounded-4 shadow-sm">
                        <div class="activity-icon">
                            🧠
                        </div>
                        <h3 class="h4 fw-bold mt-4">
                            Brain Quiz
                        </h3>
                        <p class="text-secondary">
                            Test your knowledge with fun and simple quizzes.
                        </p>
                        <button class="btn btn-orange" type="button" data-activity-start="quiz">
                            Start Quiz
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="activity-card text-center p-5 bg-white rounded-4 shadow-sm">
                        <div class="activity-icon">
                            🧩
                        </div>
                        <h3 class="h4 fw-bold mt-4">
                            Puzzle Time
                        </h3>
                        <p class="text-secondary">
                            Solve interesting puzzles and improve logical thinking.
                        </p>
                        <button class="btn btn-orange" type="button" data-activity-start="puzzles">
                            Play Now
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="activity-card text-center p-5 bg-white rounded-4 shadow-sm">
                        <div class="activity-icon">
                            📚
                        </div>
                        <h3 class="h4 fw-bold mt-4">
                            Story Time
                        </h3>
                        <p class="text-secondary">
                            Read fun stories and discover new characters.
                        </p>
                        <button class="btn btn-orange" type="button" data-activity-start="stories">
                            Read Stories
                        </button>
                    </div>
                </div>
            </div>
            <div class="activity-playground" id="activitiesPlayground" hidden aria-live="polite">
                <button class="btn btn-outline-secondary activity-back-button" type="button" data-activity-back>← All activities</button>
                <div class="activity-play-card">
                    <span class="section-label" id="activityCategory">BRAIN QUIZ</span>
                    <h2 class="h2 fw-bold mt-2" id="activityTitle">Let's play!</h2>
                    <p class="activity-progress" id="activityProgress"></p>
                    <div class="activity-progress-track" aria-hidden="true"><span id="activityProgressBar"></span></div>
                    <h3 class="h4 fw-bold mt-4" id="activityPrompt"></h3>
                    <div class="activity-options" id="activityOptions"></div>
                    <p class="activity-feedback" id="activityFeedback" role="status" aria-live="polite"></p>
                    <div class="activity-controls">
                        <button class="btn btn-orange" id="activityNext" type="button" hidden>Next →</button>
                        <button class="btn btn-outline-orange" id="activityRestart" type="button" hidden>Play again ↻</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- teach online -->
    <section id="joiners"
        class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-label">JOIN HustleWise</span>
                    <h2 class="display-6 fw-bold mt-3">Become a Teacher</h2>
                   <p class="text-secondary mt-4">
                        Share your knowledge and inspire young minds with
                        HustleWise. Join our learning community and help
                        children discover, learn and grow.
                    </p>
                    <p class="text-secondary">
                        Create engaging lessons, activities and learning
                        experiences for children while making education
                        fun and meaningful.
                    </p>
                    <a href="{{ route('teacher.join') }}"
                        class="btn btn-orange mt-3">Join as a Teacher →</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('teacher_image.jpg') }}"
                        class="img-fluid rounded-4 shadow"
                        alt="Teacher holding orange book">
                </div>
            </div>
        </div>
    </section>
<!-- testimonials -->
    <section id="testimonials" class="testimonials-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="section-label">TESTIMONIALS</span>
                <h2 class="display-6 fw-bold mt-3">What Parents Say</h2>
                <p class="text-secondary mt-3 mx-auto testimonials-intro">
                    Hear how families feel about learning with HustleWise.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="testimonial-card h-100">
                        <div class="testimonial-rating" aria-label="Rated 5 out of 5 stars">
                            <span class="testimonial-stars" aria-hidden="true">★★★★★</span><span class="testimonial-score">5.0</span>
                        </div>
                        <blockquote>“My child enjoys every class and is excited to learn something new each time.”</blockquote>
                        <div class="testimonial-author">
                            <span class="testimonial-avatar" aria-hidden="true">P</span>
                            <div><strong>HustleWise Parent</strong><span>Parent review</span></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="testimonial-card h-100">
                        <div class="testimonial-rating" aria-label="Rated 5 out of 5 stars">
                            <span class="testimonial-stars" aria-hidden="true">★★★★★</span><span class="testimonial-score">5.0</span>
                        </div>
                        <blockquote>“The fun activities make learning easy to understand and keep my child engaged.”</blockquote>
                        <div class="testimonial-author">
                            <span class="testimonial-avatar" aria-hidden="true">P</span>
                            <div><strong>HustleWise Parent</strong><span>Parent review</span></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="testimonial-card h-100">
                        <div class="testimonial-rating" aria-label="Rated 5 out of 5 stars">
                            <span class="testimonial-stars" aria-hidden="true">★★★★★</span><span class="testimonial-score">5.0</span>
                        </div>
                        <blockquote>“I have seen my child become more confident and curious since joining HustleWise.”</blockquote>
                        <div class="testimonial-author">
                            <span class="testimonial-avatar" aria-hidden="true">P</span>
                            <div><strong>HustleWise Parent</strong><span>Parent review</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
<!-- CTA -->
    <section class="cta-section py-5">
        <div class="container py-5 text-center">
            <h2 class="display-6 fw-bold text-white">
                Ready to Start Your Learning Adventure?
            </h2>
            <p class="text-white mt-3">
                Explore exciting lessons and activities today!
            </p>
            <a href="{{ route('demo.book') }}"
                class="btn btn-light btn-lg mt-3">
                Book your free demo 🚀
            </a>
        </div>
    </section>
<!-- footer -->
    <footer class="py-5"
        style="background-color:#ffffff; border-top:4px solid #ff7e27;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold"
                        style="color:#ff7e27;">
                        <span style="color:#333;">Hustle</span>Wise
                    </h3>
                    <p class="text-secondary mt-3">
                        Helping children learn, explore and grow through fun
                        educational experiences.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold"
                        style="color:#333;">
                        Quick Links
                    </h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">
                            <a href="#home"
                                class="text-secondary text-decoration-none">
                                Home
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Courses
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#activities"
                                class="text-secondary text-decoration-none">
                                Activities
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#joiners"
                                class="text-secondary text-decoration-none">
                                Teach Online
                            </a>
                        </li>
                           <li class="mb-2">
                           <a href="#testimonials"
                                class="text-secondary text-decoration-none">
                                Testimonials
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold"
                        style="color:#333;">
                        Courses
                    </h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Public Speaking
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Creative Writing
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Coding
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                HustleWise English
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Mathematics
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Business English
                            </a>
                        </li>
                         <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                  Music

                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#courses"
                                class="text-secondary text-decoration-none">
                                Spoken English
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold"
                        style="color:#333;">
                        Contact Us
                    </h5>
                    <p class="text-secondary mt-3">
                        <i class="bi bi-geo-alt-fill me-2"
                            style="color:#ff7e27;"></i>
                        Chennai, Tamil Nadu, India
                    </p>
                    <p>
                        <a href="mailto:hello@hustlewise.in"
                            class="text-secondary text-decoration-none">
                            <i class="bi bi-envelope-fill me-2"
                                style="color:#ff7e27;"></i>
                            hello@hustlewise.in
                        </a>
                    </p>
                    <p>
                        <a href="tel:+918220842946, +918098509440"
                            class="text-secondary text-decoration-none">
                            <i class="bi bi-telephone-fill me-2"
                                style="color:#ff7e27;"></i>
                            +91 8220842946, +91 8098509440
                        </a>
                    </p>
                    <div class="mt-4">
                        <a href="https://www.linkedin.com/"
                            target="_blank"
                            class="fs-3 me-3 text-decoration-none"
                            style="color:#0A66C2;">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://wa.me/919876543210"
                            target="_blank"
                            class="fs-3 me-3 text-decoration-none"
                            style="color:#25D366;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/"
                            target="_blank"
                            class="fs-3 me-3 text-decoration-none"
                            style="color:#E4405F;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/"
                            target="_blank"
                            class="fs-3 me-3 text-decoration-none"
                            style="color:#1877F2;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.youtube.com/"
                            target="_blank"
                            class="fs-3 me-3 text-decoration-none"
                            style="color:#FF0000;">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.google.com/maps/search/?api=1&query=Chennai,Tamil Nadu,India"
                            target="_blank"
                            class="fs-3 text-decoration-none"
                            style="color:#EA4335;">
                            <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center text-secondary mb-0">
                © 2026 HustleWise. All Rights Reserved.
            </p>
        </div>
    </footer>
<!-- vourse detail modal -->
    <div class="modal fade course-modal"
        id="courseDetailsModal"
        tabindex="-1"
        aria-labelledby="courseDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center gap-3">
                                <div class="course-icon-box"
                                    id="courseModalIcon">
                                    📚
                                </div>
                                <div>
                                    <h2 class="modal-title"
                                        id="courseDetailsModalLabel">
                                        Course Details
                                    </h2>
                                    <p class="text-secondary mb-0"
                                        id="courseModalSubtitle">
                                        Programme Information
                                    </p>
                                </div>
                            </div>
                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="course-highlight mb-4">
                        <h5 class="fw-bold mb-2">
                            Programme Overview
                        </h5>
                        <p class="text-secondary mb-0"
                            id="courseModalDescription">
                        </p>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="course-detail-card">
                                <div class="course-detail-label">
                                    Total Duration
                                </div>
                                <div class="course-detail-value"
                                    id="courseDuration">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="course-detail-card">
                                <div class="course-detail-label">
                                    Delivery Timeline
                                </div>
                                <div class="course-detail-value"
                                    id="courseTimeline">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="course-detail-card">
                                <div class="course-detail-label">
                                    Curriculum
                                </div>
                                <div class="course-detail-value"
                                    id="courseCurriculum">
                                    -
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="coursePhaseSection"
                        class="d-none">
                        <h5 class="fw-bold mb-3">
                            Programme Structure
                        </h5>
                        <div class="table-responsive course-table">
                            <table class="table mb-0">
                                <thead>
                                    <tr><th>Phase</th>
                                    <th>Duration</th>
                                    <th>Timeline</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td class="fw-semibold">Phase 1</td>
                                    <td>24 Hours</td>
                                    <td>12 Weeks</td>
                                </tr>                                 
                                <tr><td class="fw-semibold">Phase 2</td>
                                <td>24 Hours</td>
                                <td>12 Weeks</td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
                    <div id="courseStandardNote"
                        class="mt-4">
                    </div>
                    <div class="text-end mt-4">
                        <button type="button"
                            class="btn btn-orange px-4 rounded-pill"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Book your demo modal -->
    <div class="modal fade demo-modal"
        id="demoModal"
        tabindex="-1"
        aria-labelledby="demoModalLabel"
        aria-hidden="true">
       <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h2 class="modal-title" id="demoModalLabel">
                                    Book Your Free Demo
                                </h2>
                                <p class="text-secondary mb-0 mt-1" id="demoModalSubtitle">
                                    Fill out the details to get started
                                </p>
                            </div>
                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>
                        </div>
                        <div class="progress mt-4" id="demoProgress"
                            style="height:6px;">
                            <div class="progress-bar"
                                id="progressBar"
                                role="progressbar"
                                style="width:20%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- SUCCESS MESSAGE -->
                    <div id="successMessage" class="demo-success d-none" role="status" aria-live="polite">
                        <div class="demo-success-topline">
                            <span class="demo-confirmed"><i class="bi bi-check-circle"></i> Booking confirmed</span>
                            <span class="demo-trial-badge">Free trial class</span>
                        </div>

                        <h3 class="demo-success-title" id="demoSuccessTitle">Your demo is booked!</h3>

                        <div class="demo-schedule-card">
                            <div class="demo-schedule-date">
                                <strong id="demoSuccessWeekday">Demo day</strong>
                                <span id="demoSuccessDate">Date confirmed</span>
                            </div>
                            <div class="demo-schedule-time">
                                <strong id="demoSuccessTime">—</strong>
                                <span>IST</span>
                            </div>
                        </div>
                        <p class="demo-success-note">Your demo link will be shared shortly.</p>

                        <hr class="demo-success-divider">

                        <section class="demo-success-section" aria-labelledby="demoExpectTitle">
                            <h4 id="demoExpectTitle">What to expect in your demo</h4>
                            <span class="demo-topic-pill"><i class="bi bi-mic-fill"></i> Course: <strong id="demoSuccessCourse">Your selected course</strong></span>
                            <div class="demo-benefits-grid">
                                <article class="demo-benefit-card">
                                    <i class="bi bi-mortarboard"></i>
                                    <div><h5 id="demoSuccessClassType">Live class with an expert teacher</h5><p>Personal attention in a fun, supportive space.</p></div>
                                </article>
                                <article class="demo-benefit-card">
                                    <i class="bi bi-file-earmark-text"></i>
                                    <div><h5>Detailed feedback</h5><p>Helpful insights about your child’s strengths and next steps.</p></div>
                                </article>
                                <article class="demo-benefit-card">
                                    <i class="bi bi-patch-check"></i>
                                    <div><h5>Participation certificate</h5><p>A little milestone to celebrate their effort.</p></div>
                                </article>
                            </div>
                            <div class="demo-discount-note"><i class="bi bi-gift-fill"></i><div><strong>Get a discount code</strong><span>Based on your child’s class participation and effort.</span></div></div>
                        </section>

                        <hr class="demo-success-divider">

                        <section class="demo-success-section" aria-labelledby="demoAchievementsTitle">
                            <h4 id="demoAchievementsTitle">Student achievements</h4>
                            <div class="demo-achievements-grid">
                                <div class="demo-achievement"><span>🎤</span><strong>TEDx Talk on Food Conservation</strong><small>Oviya Singh · 13</small></div>
                                <div class="demo-achievement"><span>💬</span><strong>Confident Public Speaker</strong><small>Nirvaan · 14</small></div>
                                <div class="demo-achievement"><span>📚</span><strong>Published Author</strong><small>Eshaan · 14</small></div>
                                <div class="demo-achievement"><span>🌟</span><strong>Confident Public Speaker</strong><small>Habis · 14</small></div>
                            </div>
                        </section>

                        <div class="demo-countdown-card">
                            <h4>Your demo day is getting closer!</h4>
                            <p>We’re looking forward to learning together.</p>
                            <div class="demo-countdown-label">Starts in <strong id="demoCountdown">We’ll see you soon!</strong></div>
                        </div>

                        <button type="button" class="btn btn-orange mt-4" data-bs-dismiss="modal">Return to HustleWise</button>
                    </div>
                    <form id="demoForm">
<!-- step -->
                        <div id="demoStep1"
                            class="step active">
                            <h5 class="fw-bold mb-3">
                                Step 1: Course Details
                            </h5>
                            <div class="mb-4">
                                <label class="form-label text-secondary">
                                    Select Course
                                </label>
                                <select class="form-select form-control-lg"
                                    id="courseSelect"
                                    required>
                                    <option value="">Choose a course...</option>
                                    <option value="public-speaking">Public Speaking</option>
                                    <option value="creative-writing">Creative Writing</option>
                                    <option value="coding">Coding</option>
                                    <option value="hustlewise-english">HustleWise English</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="business-english">Business English</option>
                                    <option value="music">Music</option>
                                    <option value="spoken-english">Spoken English</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button"
                                    class="btn btn-orange btn-lg"
                                    onclick="demoNextStep(1,2)">
                                    Next →
                                </button>
                            </div>
                        </div>
                        <!-- step2 -->
                        <div id="demoStep2"
                            class="step">
                            <h5 class="fw-bold mb-3">
                                Step 2: Class Preferences
                            </h5>
                            <div class="mb-3">
                                <label class="form-label text-secondary d-block">
                                    Teacher Preference
                                </label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input"
                                        type="radio"
                                        name="teacherPref"
                                        value="1 on 1"
                                        checked>
                                    <label class="form-check-label">
                                        One-on-one Training
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="radio"
                                        name="teacherPref"
                                        value="group">
                                    <label class="form-check-label">
                                        Group Training
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-secondary">
                                    Feedback / Comments
                                </label>
                                <textarea class="form-control"
                                    rows="2"
                                    placeholder="Any specific feedback or requests?"></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button"
                                    class="btn btn-secondary btn-lg"
                                    onclick="demoPrevStep(2,1)">
                                    ← Back
                                </button>
                                <button type="button"
                                    class="btn btn-orange btn-lg"
                                    onclick="demoNextStep(2,3)">
                                    Next →
                                </button>
                            </div>
                        </div>
                        <!-- step3 -->
                        <div id="demoStep3"
                            class="step">
                            <h5 class="demo-class-title mb-2">
                                Select Your Class
                            </h5>
                            <p class="demo-class-subtitle mb-4">
                                Choose your current class or category
                            </p>
                            <div class="class-selection"
                                id="classSelection">
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 1">
                                    Class 1
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 2">
                                    Class 2
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 3">
                                    Class 3
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 4">
                                    Class 4
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 5">
                                    Class 5
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 6">
                                    Class 6
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 7">
                                    Class 7
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 8">
                                    Class 8

                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 9">
                                    Class 9
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 10">
                                    Class 10

                                    
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 11">
                                    Class 11
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Class 12">
                                    Class 12
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Studying">
                                    Studying
                                </button>
                                <button type="button"
                                    class="class-option"
                                    data-value="Working">
                                    Working
                                </button>
                            </div>
                            <input type="hidden"
                                id="classSelect"
                                value="">
                            <!-- DATE -->
                            <div class="mt-4">
                                <label class="form-label text-secondary">
                                    Select Date
                                </label>
                                <select class="form-select"
                                    id="dateSelect"
                                    required>
                                    <option value="">
                                        Choose a date...
                                    </option>
                                    <option value="today">
                                        Today
                                    </option>
                                    <option value="tomorrow">
                                        Tomorrow
                                    </option>
                                    <option value="day_after">
                                        Day After Tomorrow
                                    </option>
                                </select>
                            </div>
                            <!-- TIME -->
                           <div class="mt-3 mb-4">
                            <label class="form-label text-secondary">Select Timing</label>
                            <div class="d-flex align-items-center gap-3">
                                <input type="time"
                                class="form-control"
                                id="timeSelect"
                                required
                                style="width: 180px;">
                                <span class="text-secondary fw-semibold">
                                    Select your preferred time
                                </span>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between">
                                <button type="button"
                                    class="btn btn-secondary btn-lg"
                                    onclick="demoPrevStep(3,2)">
                                    ← Back
                                </button>
                                <button type="button"
                                    class="btn btn-orange btn-lg"
                                    onclick="demoNextStep(3,4)">
                                    Next →
                                </button>
                            </div>
                        </div>
                        <!-- step4 -->
                        <div id="demoStep4"
                            class="step">
                            <h5 class="fw-bold mb-3">
                                Step 4: Contact Information
                            </h5>
                            <div class="mb-4">
                                <label class="form-label text-secondary">
                                    Email Address
                                </label>
                                <input type="email"
                                    class="form-control form-control-lg"
                                    id="demoEmailInput"
                                    required
                                    placeholder="Enter your email">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button"
                                    class="btn btn-secondary btn-lg"
                                    onclick="demoPrevStep(4,3)">
                                    ← Back
                                </button>
                                <button type="button"
                                    class="btn btn-orange btn-lg"
                                    onclick="demoNextStep(4,5)">
                                    Next →
                                </button>
                            </div>
                        </div>
                        <!-- step5 -->
                        <div id="demoStep5"
                            class="step">
                            <h5 class="fw-bold mb-3">
                                Step 5: Personal Details
                            </h5>
                            <div class="mb-3">
                                <label class="form-label text-secondary">
                                    Parent Name
                                </label>
                                <input type="text"
                                    class="form-control form-control-lg"
                                    id="parentName"
                                    required
                                    placeholder="Enter parent's name">
                            </div>
                             <div class="mb-3">
                                <label class="form-label text-secondary">
                                    Enter Number</label>
                                    <input type="tel"class="form-control form-control-lg"
                                    id="MobileNumber"required
                                    placeholder="Enter Mobile Number"
                                    pattern="[0-9]{10}"
                                    maxlength="10"
                                    minlength="10"
                                    title="Please enter a valid 10-digit mobile number">
                                </div>
                            <div class="mb-4">
                                <label class="form-label text-secondary">
                                    Children Name(s)
                                </label>
                                <input type="text"
                                    class="form-control form-control-lg"
                                    id="childName"
                                    required
                                    placeholder="Enter children's name">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button"
                                    class="btn btn-secondary btn-lg"
                                    onclick="demoPrevStep(5,4)">
                                    ← Back
                                </button>
                                <button type="button"
                                    class="btn btn-orange btn-lg fw-bold"
                                    onclick="submitDemoForm()">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- teacher hiring group -->
    <div class="modal fade teacher-modal"
        id="teacherModal"
        tabindex="-1"
        aria-labelledby="teacherModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h2 class="modal-title"
                                    id="teacherModalLabel">
                                    Teacher Hiring Process
                                </h2>
                                <p class="text-secondary mb-0 mt-1">
                                    Complete your profile to join our teaching community
                                </p>
                            </div>
                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>
                        </div>
                        <div class="progress mt-4"
                            style="height:8px;">
                            <div class="progress-bar"
                                id="teacherProgressBar"
                                role="progressbar"
                                style="width:16%;"
                                aria-valuenow="16"
                                aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- SUCCESS -->
                    <div id="teacherSuccessMessage"
                        class="alert alert-success text-center d-none shadow-sm rounded-4 p-5"
                        role="alert">
                        <div class="display-1 mb-3">
                            🎉
                        </div>
                        <h3 class="alert-heading fw-bold mb-3">
                            Application Submitted!
                        </h3>
                        <p class="text-secondary fs-5 mb-4">
                            Thank you for applying to teach with HustleWise.
                            Your application and resume have been received successfully.
                            Our hiring team will review your details
                            and contact you soon.
                        </p>
                        <button type="button"
                            class="btn btn-lg text-white fw-bold px-5"
                            style="background-color:#ff7e27; border-radius:12px;"
                            data-bs-dismiss="modal">
                            Return Home
                        </button>
                    </div>
                    <!-- FORM -->
                    <div class="card border-0 shadow-sm rounded-4"
                        id="teacherFormCard">
                        <div class="card-body p-4 p-md-5">
                            <form id="hiringForm">
                                <!-- STEP 1 -->
                                <div id="teacherStep1"
                                    class="step active">
                                    <h4 class="fw-bold mb-4">
                                        Step 1: Let's get started
                                    </h4>
                                    <div class="mb-4">
                                        <label class="form-label text-secondary fw-semibold">
                                            First Name
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-lg"
                                            id="firstNameInput"
                                            placeholder="Enter your first name"
                                            required>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label text-secondary fw-semibold">
                                            Phone Number
                                        </label>
                                        <input type="tel"
                                            class="form-control form-control-lg"
                                            id="phoneInput"
                                            placeholder="Enter 10 digit phone number"
                                            pattern="[0-9]{10}"
                                            maxlength="10"
                                            minlength="10"
                                            inputmode="numeric"
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                                            required>
                                        <div class="form-text">
                                            Enter exactly 10 digits.
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button"
                                            class="btn btn-orange btn-lg px-5"
                                            onclick="teacherNextStep(1,2,true)">
                                            Next →
                                      </button>
                                    </div>
                                </div>
                                <!-- STEP 2 -->
                                <div id="teacherStep2"
                                    class="step">
                                    <h4 class="fw-bold mb-4">
                                        Step 2: Email Verification
                                    </h4>
                                    <div class="mb-4">
                                        <label class="form-label text-secondary fw-semibold">
                                            Email Address
                                        </label>
                                        <div class="input-group">
                                            <input type="email"
                                                class="form-control form-control-lg"
                                                id="emailInput"
                                                placeholder="name@example.com"
                                                required>
                                            <button class="btn text-white px-4"
                                                style="background-color:#1a1a1a;"
                                                type="button"
                                                id="btnEmailOtp"
                                                onclick="generateEmailOtp()">
                                                Send OTP
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb-5 d-none"
                                        id="emailOtpGroup">
                                        <label class="form-label text-secondary fw-semibold">
                                            Verification Code
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-lg"
                                            id="emailOtpInput"
                                            placeholder="Enter the code sent to your email">
                                        <div class="form-text text-success d-none mt-2"
                                            id="emailVerifiedMsg">
                                            Email verified successfully!
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button"
                                            class="btn btn-secondary btn-lg px-4"
                                            onclick="teacherPrevStep(2,1)">
                                            ← Back
                                        </button>
                                        <button type="button"
                                            class="btn btn-orange btn-lg px-5"
                                            onclick="teacherNextStep(2,3)">
                                            Next →
                                        </button>
                                    </div>
                                </div>
                                <!-- STEP 3 -->
                                <div id="teacherStep3"
                                    class="step">
                                    <h4 class="fw-bold mb-4">
                                        Step 3: Personal & Education Details
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-secondary fw-semibold">
                                                Full Name
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-lg"
                                                id="fullNameInput"
                                                required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-secondary fw-semibold">
                                                Email Address
                                            </label>
                                            <input type="email"
                                                class="form-control form-control-lg bg-light"
                                                id="verifiedEmailInput"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-secondary fw-semibold">
                                                Gender
                                            </label>
                                            <select class="form-select form-select-lg"
                                                id="genderSelect"
                                                required>
                                                <option value="">
                                                    Select Gender
                                                </option>
                                                <option value="male">
                                                    Male
                                                </option>
                                                <option value="female">
                                                    Female
                                                </option>
                                                <option value="other">
                                                    Other
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-secondary fw-semibold">
                                                Age
                                            </label>
                                            <input type="number"
                                                class="form-control form-control-lg"
                                                id="ageInput"
                                                placeholder="e.g. 28"
                                                min="18"
                                                max="100"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-secondary fw-semibold">
                                            Qualification
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-lg"
                                            id="qualificationInput"
                                            placeholder="e.g. B.Ed, Teacher Training"
                                            required>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label text-secondary fw-semibold">
                                            Highest Degree (Education)
                                        </label>
                                        <input type="text"
                                            class="form-control form-control-lg"
                                            id="degreeInput"
                                            placeholder="e.g. Master of Arts in English"
                                            required>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button"
                                            class="btn btn-secondary btn-lg px-4"
                                            onclick="teacherPrevStep(3,2)">
                                            ← Back
                                        </button>
                                        <button type="button"
                                            class="btn btn-orange btn-lg px-5"
                                            onclick="teacherNextStep(3,4)">
                                            Next →
                                        </button>
                                    </div>
                                </div>
                                <!-- STEP 4 -->
                                <div id="teacherStep4"
                                    class="step">
                                    <h4 class="fw-bold mb-4">
                                        Step 4: Work Experience
                                    </h4>
                                    <div class="mb-5">
                                        <label class="form-label text-secondary fw-semibold">
                                            Detail your teaching experience
                                        </label>
                                        <textarea class="form-control form-control-lg"
                                            rows="6"
                                            id="experienceInput"
                                            placeholder="List your previous teaching roles, years of experience, subjects taught, etc."
                                            required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button"
                                            class="btn btn-secondary btn-lg px-4"
                                            onclick="teacherPrevStep(4,3)">
                                            ← Back
                                        </button>
                                        <button type="button"
                                            class="btn btn-orange btn-lg px-5"
                                            onclick="teacherNextStep(4,5)">
                                            Next →
                                        </button>
                                    </div>
                                </div>
                                <!-- STEP 5 -->
                                <div id="teacherStep5"
                                    class="step">
                                    <h4 class="fw-bold mb-4">
                                        Step 5: Teaching Certifications
                                    </h4>
                                    <p class="text-secondary mb-3">
                                        Please select any teaching certifications you hold (if any):
                                    </p>
                                    <div class="row mb-5">
                                        <div class="col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certTESOL">
                                                <label class="form-check-label ms-2"
                                                    for="certTESOL">
                                                    TESOL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certTOFFL">
                                                <label class="form-check-label ms-2"
                                                    for="certTOFFL">
                                                    TOEFL / TOFFL
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certCET">
                                                <label class="form-check-label ms-2"
                                                    for="certCET">
                                                    CET
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certCLT">
                                                <label class="form-check-label ms-2"
                                                    for="certCLT">
                                                    CLT
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certCECT">
                                                <label class="form-check-label ms-2"
                                                    for="certCECT">
                                                    CECT
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">

                                            <div class="form-check">

                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="certCELTA">

                                                <label class="form-check-label ms-2"
                                                    for="certCELTA">

                                                    CELTA

                                                </label>

                                            </div>

                                        </div>


                                        <div class="col-12 mt-3">

                                            <label class="form-label text-secondary fw-semibold">

                                                Other Certifications

                                            </label>

                                            <input type="text"
                                                class="form-control"
                                                placeholder="List any other relevant certifications">

                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-between">

                                        <button type="button"
                                            class="btn btn-secondary btn-lg px-4"
                                            onclick="teacherPrevStep(5,4)">

                                            ← Back

                                        </button>

                                        <button type="button"
                                            class="btn btn-orange btn-lg px-5"
                                            onclick="teacherNextStep(5,6)">

                                            Next →

                                        </button>

                                    </div>

                                </div>


                                <!-- STEP 6 -->

                                <div id="teacherStep6"
                                    class="step">

                                    <h4 class="fw-bold mb-4">

                                        Step 6: Share Resume

                                    </h4>


                                    <div class="mb-5">

                                        <label class="form-label text-secondary fw-semibold">

                                            Upload your resume (PDF only)

                                        </label>

                                        <input class="form-control form-control-lg"
                                            type="file"
                                            id="resumeFile"
                                            accept=".pdf"
                                            required>

                                        <div class="form-text mt-2">

                                            Please ensure your resume is up to date and in PDF format.

                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-between">

                                        <button type="button"
                                            class="btn btn-secondary btn-lg px-4"
                                            onclick="teacherPrevStep(6,5)">

                                            ← Back

                                        </button>

                                        <button type="button"
                                            class="btn btn-lg text-white fw-bold px-5"
                                            style="background-color:#1a1a1a;"
                                            onclick="submitApplication()">

                                            Submit Application

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ===================================================== -->
    <!-- TEACHER ALERT MODAL -->
    <!-- ===================================================== -->

    <div class="modal fade"
        id="alertModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 rounded-4 shadow">

                <div class="modal-body text-center p-5">

                    <h4 class="fw-bold mb-3"
                        id="modalTitle">

                        Alert

                    </h4>

                    <p class="text-secondary mb-4 fs-5"
                        id="modalMessage">

                        Message goes here.

                    </p>

                    <button type="button"
                        class="btn text-white px-5 rounded-pill"
                        style="background-color:#ff7e27;"
                        data-bs-dismiss="modal">

                        Continue

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- ============================= -->
    <!-- BOOTSTRAP JS -->
    <!-- ============================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>


    <!-- ===================================================== -->
    <!-- COURSE DETAILS JAVASCRIPT -->
    <!-- ===================================================== -->

    <script>

        const courseData = {

            publicSpeaking: {
                title: "Public Speaking",
                icon: "🎙️",
                subtitle: "Confidence & Communication Programme",
                description:
                    "Build confidence, master body language, and learn to communicate effectively in front of any audience.",
                duration: "30 Hours",
                timeline: "15 Weeks (~3.5 Months)",
                curriculum: "IB & CBSE Integrated Standards",
                note: "The programme follows IB & CBSE integrated standards."
            },

            creativeWriting: {
                title: "Creative Writing",
                icon: "✍️",
                subtitle: "Creative Writing Programme",
                description:
                    "Unleash your imagination, craft compelling stories, and develop your unique writing voice.",
                duration: "48 Hours Total",
                timeline: "24 Weeks Total (~5.5 Months)",
                curriculum: "IB & CBSE Integrated Standards",
                phase: true,
                note: "The programme is divided evenly into two progressive blocks."
            },

            coding: {
                title: "Coding",
                icon: "💻",
                subtitle: "Programming & Problem Solving",
                description:
                    "Learn the basics of programming, develop problem-solving skills, and build your own applications.",
                duration: "Programme details coming soon",
                timeline: "Programme details coming soon",
                curriculum: "Programme details coming soon",
                note: "Detailed duration and curriculum information has not been added to the supplied programme table yet."
            },

            hustleWiseEnglish: {
                title: "HustleWise English",
                icon: "📚",
                subtitle: "Comprehensive English Programme",
                description:
                    "Our signature comprehensive English programme designed to enhance reading, writing, and comprehension.",
                duration: "Programme details coming soon",
                timeline: "Programme details coming soon",
                curriculum: "Programme details coming soon",
                note: "Detailed duration and curriculum information has not been added to the supplied programme table yet."
            },

            maths: {
                title: "Maths",
                icon: "📐",
                subtitle: "Mathematics Programme",
                description:
                    "Master numbers, algebra, geometry, and build strong logical reasoning skills through interactive lessons.",
                duration: "Programme details coming soon",
                timeline: "Programme details coming soon",
                curriculum: "Programme details coming soon",
                note: "Detailed duration and curriculum information has not been added to the supplied programme table yet."
            },

            businessEnglish: {
                title: "Business English",
                icon: "💼",
                subtitle: "Professional Communication Programme",
                description:
                    "Learn professional communication, email writing, and vocabulary for the modern workplace.",
                duration: "30 Hours",
                timeline: "15 Weeks (~3.5 Months)",
                curriculum: "Professional Communication",
                note: "The supplied programme table lists the framework as Professional Communication."
            },
            music: {
                title: "Music",
                icon: "🎵",
                subtitle: "Musical Arts Programme",
                description:
                    "Learn professional communication, email writing, and vocabulary for the modern workplace.",
                duration: "30 Hours",
                timeline: "15 Weeks (~3.5 Months)",
                curriculum: "Professional Communication",
                note: "The supplied programme table lists the framework as Professional Communication."
            },

            spokenEnglish: {
                title: "Spoken English",
                icon: "🗣️",
                subtitle: "Interactive & Conversational Programme",
                description:
                    "Improve your fluency, pronunciation, and conversational skills to speak English naturally and confidently.",
                duration: "30 Hours",
                timeline: "15 Weeks (~3.5 Months)",
                curriculum: "Interactive & Conversational",
                note: "The supplied programme table lists the framework as Interactive & Conversational."
            }

        };


        const courseModal =
            document.getElementById('courseDetailsModal');


        courseModal.addEventListener(
            'show.bs.modal',
            function (event) {

                const button = event.relatedTarget;

                const courseName =
                    button.getAttribute('data-course');

                const course =
                    courseData[courseName];


                if (!course) {
                    return;
                }


                document.getElementById(
                    'courseDetailsModalLabel'
                ).textContent = course.title;


                document.getElementById(
                    'courseModalIcon'
                ).textContent = course.icon;


                document.getElementById(
                    'courseModalSubtitle'
                ).textContent = course.subtitle;


                document.getElementById(
                    'courseModalDescription'
                ).textContent = course.description;


                document.getElementById(
                    'courseDuration'
                ).textContent = course.duration;


                document.getElementById(
                    'courseTimeline'
                ).textContent = course.timeline;


                document.getElementById(
                    'courseCurriculum'
                ).textContent = course.curriculum;


                const phaseSection =
                    document.getElementById('coursePhaseSection');


                if (course.phase) {

                    phaseSection.classList.remove('d-none');

                } else {

                    phaseSection.classList.add('d-none');

                }


                document.getElementById(
                    'courseStandardNote'
                ).innerHTML =

                    '<div class="course-highlight">' +

                    '<p class="mb-0 text-secondary">' +

                    '<i class="bi bi-info-circle-fill me-2" style="color:#ff7e27;"></i>' +

                    course.note +

                    '</p>' +

                    '</div>';

            }

        );

    </script>


    <!-- ===================================================== -->
    <!-- DEMO JAVASCRIPT -->
    <!-- ===================================================== -->

    <script>

        let selectedClass = "";


        /* ============================= */
        /* CLASS BUTTON SELECTION */
        /* ============================= */

        document
            .querySelectorAll('.class-option')
            .forEach(function (button) {

                button.addEventListener(
                    'click',
                    function () {

                        document
                            .querySelectorAll('.class-option')
                            .forEach(function (item) {

                                item.classList.remove('selected');

                            });


                        this.classList.add('selected');


                        selectedClass =
                            this.getAttribute('data-value');


                        document.getElementById(
                            'classSelect'
                        ).value = selectedClass;

                    }
                );

            });


        /* ============================= */
        /* DEMO NEXT STEP */
        /* ============================= */

        function demoNextStep(current, next) {


            if (current === 1) {

                const course =
                    document.getElementById('courseSelect');


                if (!course.checkValidity()) {

                    course.reportValidity();

                    return;

                }

            }


            if (current === 3) {

                const classSelect =
                    document.getElementById('classSelect');

                const dateSelect =
                    document.getElementById('dateSelect');

                const timeSelect =
                    document.getElementById('timeSelect');


                if (classSelect.value === "") {

                    showAlert(
                        "Class Required",
                        "Please select your class or category to continue."
                    );

                    return;

                }


                if (!dateSelect.checkValidity()) {

                    dateSelect.reportValidity();

                    return;

                }


                if (!timeSelect.checkValidity()) {

                    timeSelect.reportValidity();

                    return;

                }

            }


            if (current === 4) {

                const email =
                    document.getElementById('demoEmailInput');


                if (!email.checkValidity()) {

                    email.reportValidity();

                    return;

                }

            }


            document
                .getElementById('demoStep' + current)
                .classList.remove('active');


            document
                .getElementById('demoStep' + next)
                .classList.add('active');


            updateDemoProgress(next);

        }


        /* ============================= */
        /* DEMO PREVIOUS STEP */
        /* ============================= */

        function demoPrevStep(current, prev) {

            document
                .getElementById('demoStep' + current)
                .classList.remove('active');


            document
                .getElementById('demoStep' + prev)
                .classList.add('active');


            updateDemoProgress(prev);

        }


        /* ============================= */
        /* DEMO PROGRESS */
        /* ============================= */

        function updateDemoProgress(step) {

            const percent =
                (step / 5) * 100;


            document.getElementById(
                'progressBar'
            ).style.width =
                percent + '%';

        }


        /* ============================= */
        /* DEMO SUBMIT */
        /* ============================= */

        function submitDemoForm() {

            const parentName =
                document.getElementById('parentName');


            const childName =
                document.getElementById('childName');


            if (!parentName.checkValidity()) {

                parentName.reportValidity();

                return;

            }


            if (!childName.checkValidity()) {

                childName.reportValidity();

                return;

            }


            document
                .getElementById('demoForm')
                .classList.add('d-none');


            document
                .getElementById('successMessage')
                .classList.remove('d-none');

        }


        /* ============================= */
        /* RESET DEMO POPUP */
        /* ============================= */

        const demoModal =
            document.getElementById('demoModal');


        demoModal.addEventListener(
            'show.bs.modal',
            function () {

                document.getElementById('demoModalLabel').textContent = 'Book Your Free Demo';
                document.getElementById('demoModalSubtitle').textContent = 'Fill out the details to get started';
                document.getElementById('demoProgress').classList.remove('d-none');

                document
                    .getElementById('demoForm')
                    .classList.remove('d-none');


                document
                    .getElementById('successMessage')
                    .classList.add('d-none');


                document
                    .querySelectorAll('#demoModal .step')
                    .forEach(function (step) {

                        step.classList.remove('active');

                    });


                document
                    .getElementById('demoStep1')
                    .classList.add('active');


                updateDemoProgress(1);


                selectedClass = "";


                document.getElementById(
                    'classSelect'
                ).value = "";


                document
                    .querySelectorAll('.class-option')
                    .forEach(function (button) {

                        button.classList.remove('selected');

                    });


                document
                    .getElementById('demoForm')
                    .reset();

            }

        );

    </script>


    <!-- ===================================================== -->
    <!-- TEACHER HIRING JAVASCRIPT -->
    <!-- ===================================================== -->

    <script>

        let emailVerified = false;


        function showAlert(title, message) {

            document.getElementById(
                'modalTitle'
            ).textContent = title;


            document.getElementById(
                'modalMessage'
            ).textContent = message;


            const modal =
                new bootstrap.Modal(
                    document.getElementById('alertModal')
                );


            modal.show();

        }


        function updateTeacherProgress(step) {

            const percent =
                (step / 6) * 100;


            document.getElementById(
                'teacherProgressBar'
            ).style.width =
                percent + '%';

        }


        function teacherNextStep(
            current,
            next,
            isWelcome = false
        ) {


            if (current === 1) {

                const nameInput =
                    document.getElementById('firstNameInput');

                const phoneInput =
                    document.getElementById('phoneInput');


                if (!nameInput.checkValidity()) {

                    nameInput.reportValidity();

                    return;

                }


                if (!phoneInput.checkValidity()) {

                    phoneInput.reportValidity();

                    return;

                }


                document.getElementById(
                    'fullNameInput'
                ).value =
                    nameInput.value;

            }


            if (current === 2) {

                if (!emailVerified) {

                    showAlert(
                        "Verification Required",
                        "Please verify your email address to proceed."
                    );

                    return;

                }


                document.getElementById(
                    'verifiedEmailInput'
                ).value =
                    document.getElementById(
                        'emailInput'
                    ).value;

            }


            if (current === 3) {

                const fields = [

                    document.getElementById('fullNameInput'),

                    document.getElementById('genderSelect'),

                    document.getElementById('ageInput'),

                    document.getElementById('qualificationInput'),

                    document.getElementById('degreeInput')

                ];


                for (let field of fields) {

                    if (!field.checkValidity()) {

                        field.reportValidity();

                        return;

                    }

                }

            }


            if (current === 4) {

                const experience =
                    document.getElementById('experienceInput');


                if (!experience.checkValidity()) {

                    experience.reportValidity();

                    return;

                }

            }


            if (isWelcome) {

                showAlert(
                    "Welcome! 🎉",
                    "Welcome to the hiring process, " +
                    document.getElementById(
                        'firstNameInput'
                    ).value +
                    "!"
                );

            }


            document
                .getElementById('teacherStep' + current)
                .classList.remove('active');


            document
                .getElementById('teacherStep' + next)
                .classList.add('active');


            updateTeacherProgress(next);

        }


        function teacherPrevStep(current, prev) {

            document
                .getElementById('teacherStep' + current)
                .classList.remove('active');


            document
                .getElementById('teacherStep' + prev)
                .classList.add('active');


            updateTeacherProgress(prev);

        }


        function generateEmailOtp() {

            const emailInput =
                document.getElementById('emailInput');


            if (!emailInput.checkValidity()) {

                emailInput.reportValidity();

                return;

            }


            const btn =
                document.getElementById('btnEmailOtp');


            btn.textContent =
                "Sent ✓";


            btn.disabled =
                true;


            btn.classList.add('bg-success');


            emailInput.disabled =
                true;


            document
                .getElementById('emailOtpGroup')
                .classList.remove('d-none');


            document
                .getElementById('emailOtpInput')
                .addEventListener(
                    'input',
                    function (e) {

                        if (e.target.value.length >= 4) {

                            emailVerified =
                                true;


                            e.target.disabled =
                                true;


                            e.target.classList.add(
                                'is-valid'
                            );


                            document
                                .getElementById(
                                    'emailVerifiedMsg'
                                )
                                .classList.remove(
                                    'd-none'
                                );

                        }

                    }
                );

        }


        function submitApplication() {

            const resume =
                document.getElementById('resumeFile');


            if (!resume.checkValidity()) {

                resume.reportValidity();

                return;

            }


            document
                .getElementById('teacherFormCard')
                .classList.add('d-none');


            document
                .getElementById('teacherProgressBar')
                .parentElement
                .classList.add('d-none');


            document
                .getElementById('teacherSuccessMessage')
                .classList.remove('d-none');

        }


        /* ============================= */
        /* RESET TEACHER POPUP */
        /* ============================= */

        const teacherModal =
            document.getElementById('teacherModal');


        teacherModal.addEventListener(
            'show.bs.modal',
            function () {

                emailVerified =
                    false;


                document
                    .getElementById('teacherFormCard')
                    .classList.remove('d-none');


                document
                    .getElementById('teacherSuccessMessage')
                    .classList.add('d-none');


                document
                    .getElementById('teacherProgressBar')
                    .parentElement
                    .classList.remove('d-none');


                document
                    .querySelectorAll(
                        '#teacherModal .step'
                    )
                    .forEach(function (step) {

                        step.classList.remove('active');

                    });


                document
                    .getElementById('teacherStep1')
                    .classList.add('active');
                updateTeacherProgress(1);
                document
                    .getElementById('hiringForm')
                    .reset();
                document
                    .getElementById('emailInput')
                    .disabled = false;
                document
                    .getElementById('btnEmailOtp')
                    .disabled = false;
                document
                    .getElementById('btnEmailOtp')
                    .textContent =
                    "Send OTP";
                document
                    .getElementById('btnEmailOtp')
                    .classList.remove(
                        'bg-success'
                    );
                document
                    .getElementById('emailOtpGroup')
                    .classList.add('d-none');
                document
                    .getElementById('emailVerifiedMsg')
                    .classList.add('d-none');
                document
                    .getElementById('emailOtpInput')
                    .disabled = false;
                document
                    .getElementById('emailOtpInput')
                    .classList.remove('is-valid');
            }
        );
    </script>
    @include('partials.demo_sticky_cta')
</body>
</html>
