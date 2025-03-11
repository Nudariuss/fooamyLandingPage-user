@extends('layout.master')
@section('title', 'Karir - Full Stack Web Developer')
@section('content')
    @include('layout.navbar')
    <section class="karir-item">
        <div class="container karir-item-container">
            <h1 class="karir-item-title">Full Stack Web Developer</h1>
            <h3 class="karir-item-subtitle">Position Overview:</h3>
            <p>
                As a Full-Stack Developer at Fooamy, you will be responsible for the end-to-end development of software solutions,
                from concept to deployment. You will work closely with cross-functional teams to create robust, scalable, and user-friendly
                applications that enhance our laundry service experience and contribute to the overall success of our projects.
            </p>

            <h3 class="karir-item-subtitle">Key Responsibilities:</h3>
            <ul>
                <li>Work alongside PM and Designers to understand project requirements and objectives.</li>
                <li>Develop and maintain web applications using PHP or Laravel.</li>
                <li>Deploy and manage applications on AWS Cloud.</li>
                <li>Collaborate with cross-functional teams to define, design, and ship new features.</li>
                <li>Ensure the responsiveness, efficiency, and security of applications.</li>
                <li>Conduct thorough testing and debugging to maintain software quality.</li>
                <li>Stay updated on industry trends and emerging technologies to ensure our technology stack remains competitive.</li>
            </ul>

            <h3 class="karir-item-subtitle">Qualifications:</h3>
            <ul>
                <li>Proven experience as a Full-Stack Developer or similar role.</li>
                <li>Proficiency in PHP or Laravel.</li>
                <li>Maximum age: 35 years old.</li>
                <li>Strong knowledge of Flutter for mobile development.</li>
                <li>Experience with MySQL database management.</li>
                <li>Familiarity with LiteSpeed server optimization.</li>
                <li>Proficient in using GitLab for source code management.</li>
                <li>Experience with RESTful API development and integration.</li>
                <li>Solid understanding of AWS Cloud services.</li>
                <li>Excellent problem-solving skills and attention to detail.</li>
                <li>Strong communication and teamwork skills.</li>
            </ul>

            <p class="karir-item-contact">
                📩 Send Your Latest CV to: <a href="mailto:hr@fooamy.com">hr@fooamy.com</a>
            </p>
        </div>
    </section>
    @include('layout.wa-icon-fixed-bottom')
@endsection
