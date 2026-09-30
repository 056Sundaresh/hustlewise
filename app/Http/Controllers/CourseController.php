<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function show(Request $request, string $slug): View
    {
        $courses = [
            'public-speaking' => [
                'title' => 'Public Speaking', 'icon' => 'bi-mic-fill', 'color' => '#ff7a00',
                'image' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Confidence, communication and a voice that can be heard.',
                'description' => 'A practical journey that helps learners organise ideas, speak clearly and present with confidence in class and beyond.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Storytelling', 'Talking about myself', 'Clear words', 'My first mini speech'],
                    '2 to 3' => ['The art of storytelling', 'Talking about self', 'Voice and fluency', 'Growing confidence'],
                    '4 to 6' => ['Organising ideas', 'Expressive storytelling', 'Body language', 'Confident presentation'],
                    '7 to 8' => ['Speech structure', 'Voice and presence', 'Debate basics', 'Persuasive speaking'],
                    '9 to 12' => ['Audience connection', 'Speech writing', 'Debate and persuasion', 'Impactful presentation'],
                    'Adult' => ['Professional speaking', 'Presentations that connect', 'Meetings and discussion', 'Influence with clarity'],
                ],
            ],
            'creative-writing' => [
                'title' => 'Creative Writing', 'icon' => 'bi-pencil-square', 'color' => '#f04766',
                'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Turn bright ideas into stories worth sharing.',
                'description' => 'Explore imagination, build strong writing habits and learn to shape a story from its first idea to a polished final draft.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Picture prompts', 'Everyday words', 'My first story', 'Read it aloud'],
                    '2 to 3' => ['The art of storytelling', 'Describing things around us', 'Building story blocks', 'Beginning to write'],
                    '4 to 6' => ['Characters and setting', 'Story structure', 'Dialogue and detail', 'Edit and share'],
                    '7 to 8' => ['Point of view', 'Creative descriptions', 'Plot and pacing', 'Writing and editing a story'],
                    '9 to 12' => ['Narrative voice', 'Creative nonfiction', 'Style and revision', 'Personal narrative'],
                    'Adult' => ['Writing for an audience', 'Voice and structure', 'Revision techniques', 'Publish-ready writing'],
                ],
            ],
            'coding' => [
                'title' => 'Coding', 'icon' => 'bi-code-slash', 'color' => '#2484ce',
                'image' => 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Build problem-solving skills one project at a time.',
                'description' => 'Learn computational thinking, explore programming concepts and create projects that bring ideas to life.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Patterns and sequences', 'Give clear instructions', 'Block coding', 'My first animation'],
                    '2 to 3' => ['Logic through games', 'Events and actions', 'Loops and patterns', 'Create a mini game'],
                    '4 to 6' => ['Algorithms', 'Loops and conditions', 'Interactive stories', 'Build a game'],
                    '7 to 8' => ['Programming foundations', 'Data and decisions', 'Web basics', 'Build an interactive project'],
                    '9 to 12' => ['Programming logic', 'Functions and data', 'App and web concepts', 'Capstone project'],
                    'Adult' => ['Coding foundations', 'Problem decomposition', 'Web technologies', 'Portfolio project'],
                ],
            ],
            'hustlewise-english' => [
                'title' => 'HustleWise English', 'icon' => 'bi-book-half', 'color' => '#7a58c1',
                'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'A complete path for reading, writing and understanding English.',
                'description' => 'Build a strong English foundation with guided activities across vocabulary, grammar, reading and writing.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Letter sounds', 'First words', 'Simple sentences', 'Read and retell'],
                    '2 to 3' => ['Phonics and spelling', 'Grammar building blocks', 'Reading for meaning', 'Everyday writing'],
                    '4 to 6' => ['Vocabulary growth', 'Grammar in context', 'Reading strategies', 'Clear paragraphs'],
                    '7 to 8' => ['Advanced vocabulary', 'Sentence craft', 'Reading between the lines', 'Structured writing'],
                    '9 to 12' => ['Academic language', 'Grammar and style', 'Critical reading', 'Essays and reports'],
                    'Adult' => ['Practical vocabulary', 'Grammar refresh', 'Reading confidently', 'Clear written communication'],
                ],
            ],
            'maths' => [
                'title' => 'Maths', 'icon' => 'bi-calculator-fill', 'color' => '#ff9d27',
                'image' => 'https://images.unsplash.com/photo-1509228468518-180dd4864904?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Make number sense, logic and problem-solving click.',
                'description' => 'Build mathematical confidence through visual explanations, guided practice and real-world challenges.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Number sense', 'Add and subtract', 'Shapes around us', 'Maths in daily life'],
                    '2 to 3' => ['Place value', 'Multiplication ideas', 'Fractions and shapes', 'Reasoning puzzles'],
                    '4 to 6' => ['Operations and factors', 'Fractions and decimals', 'Geometry', 'Multi-step problems'],
                    '7 to 8' => ['Ratios and percentages', 'Algebra foundations', 'Geometry and measurement', 'Logical reasoning'],
                    '9 to 12' => ['Algebra and functions', 'Geometry and trigonometry', 'Data and probability', 'Exam problem-solving'],
                    'Adult' => ['Everyday numeracy', 'Percentages and finance', 'Data literacy', 'Practical problem-solving'],
                ],
            ],
            'business-english' => [
                'title' => 'Business English', 'icon' => 'bi-briefcase-fill', 'color' => '#238b76',
                'image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Communicate clearly and confidently at work.',
                'description' => 'Practise professional speaking and writing for meetings, presentations, emails and everyday workplace conversations.',
                'grades' => ['Adult'],
                'roadmap' => ['Adult' => ['Workplace vocabulary', 'Professional emails', 'Meetings and discussion', 'Presentations with impact']],
            ],
            'music' => [
                'title' => 'Music', 'icon' => 'bi-music-note-beamed', 'color' => '#b05ab6',
                'image' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Discover rhythm, listening and musical creativity.',
                'description' => 'Explore musical building blocks through rhythm, listening activities, voice and creative expression.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Sound and silence', 'Steady beat', 'Sing and move', 'Make a rhythm'],
                    '2 to 3' => ['Rhythm patterns', 'Pitch and melody', 'Listening like a musician', 'Create a song'],
                    '4 to 6' => ['Rhythm and notation', 'Melody building', 'Musical styles', 'Compose and perform'],
                    '7 to 8' => ['Music theory basics', 'Harmony and structure', 'Listening and analysis', 'Arrange a piece'],
                    '9 to 12' => ['Composition tools', 'Style and interpretation', 'Performance craft', 'Original project'],
                    'Adult' => ['Musical foundations', 'Rhythm and pitch', 'Listening with purpose', 'Creative performance'],
                ],
            ],
            'spoken-english' => [
                'title' => 'Spoken English', 'icon' => 'bi-chat-dots-fill', 'color' => '#e97834',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1000&q=85',
                'subtitle' => 'Speak naturally with better fluency and confidence.',
                'description' => 'Practise everyday conversations, pronunciation and listening in a friendly space where it is safe to speak up.',
                'grades' => ['K to 1', '2 to 3', '4 to 6', '7 to 8', '9 to 12', 'Adult'],
                'roadmap' => [
                    'K to 1' => ['Everyday words', 'Listen and respond', 'Speak in sentences', 'Show and tell'],
                    '2 to 3' => ['Useful expressions', 'Talking about myself', 'Ask and answer', 'Speak with confidence'],
                    '4 to 6' => ['Clear pronunciation', 'Build a conversation', 'Vocabulary in use', 'Fluency practice'],
                    '7 to 8' => ['Natural conversation', 'Pronunciation and pace', 'Explain an idea', 'Confident speaking'],
                    '9 to 12' => ['Fluency and expression', 'Group discussion', 'Speak persuasively', 'Present with confidence'],
                    'Adult' => ['Everyday fluency', 'Pronunciation and clarity', 'Workplace conversation', 'Confident communication'],
                ],
            ],
        ];

        abort_unless(isset($courses[$slug]), 404);

        $course = $courses[$slug];
        $selectedGrade = $request->query('grade', $course['grades'][0]);
        abort_unless(in_array($selectedGrade, $course['grades'], true), 404);

        $coreTopics = $course['roadmap'][$selectedGrade];
        $practiceMilestones = [
            'Try it with your teacher',
            'Guided practice',
            'Take on a mini challenge',
            'Share your progress',
        ];
        $roadmap = [];

        foreach ($coreTopics as $index => $topic) {
            $roadmap[] = ['title' => $topic, 'kind' => 'Learn'];
            $roadmap[] = [
                'title' => $practiceMilestones[$index] ?? 'Keep practising',
                'kind' => 'Milestone',
            ];
        }

        $course['roadmap'][$selectedGrade] = $roadmap;

        return view('course_detail', [
            'slug' => $slug,
            'course' => $course,
            'selectedGrade' => $selectedGrade,
        ]);
    }
}
