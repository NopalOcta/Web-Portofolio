@extends('layouts.main')

@section('styleCSS')
    <style>
        /* Mouse Scroll Animation */
        .mouse-btn {
            margin: 10px 0;
            width: 15px;
            height: 30px;
            border: 3px solid rgba(255, 255, 255, 0.918);
            border-radius: 20px;
            display: flex;
        }

        .mouse-scroll {
            display: block;
            width: 6px;
            height: 6px;
            background: linear-gradient(170deg, rgba(255, 255, 255, 0.918), rgb(255, 255, 255));
            border-radius: 50%;
            margin: auto;
            animation: scrolling13 1300ms linear infinite;
        }

        @keyframes scrolling13 {
            0% {
                opacity: 0;
                transform: translateY(-9px);
            }

            100% {
                opacity: 1;
                transform: translateY(7px);
            }
        }

        /* Skill Container */
        /* Skill Button */
        .skill-menu-container .skill-menu {
            text-align: left;
            width: 100%;
            background-color: var(--bg-color-9);
            border-radius: 5px;
            transition: background-color 300ms, color 300ms;
        }

        .skill-menu-container .skill-menu {
            background-color: var(--bg-color-10);
        }

        .skill-menu-container .skill-menu .skill-button-style-1 {
            font-size: 20px;
            color: var(--text-color-2);
            margin: 12px 0;
            padding: 20px 24px;
            transition: margin 300ms, padding 300ms, color 0ms;
        }

        .skill-menu-container .skill-menu .skill-button-style-2 {
            font-size: 24px;
            color: var(--bg-color-1);
            margin: 12px 0;
            padding: 28px 24px;
            transition: margin 300ms, padding 300ms, font-size 300ms, color 0ms;
        }

        .skill {
            transition: color 300ms, border 300ms;
        }

        .skill-hover:hover {
            color: var(--bg-color-1) !important;
            border: 2px solid var(--bg-color-1) !important;
        }

        /* Portfolio Container */

        .overlay-text {
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .portfolio-image-container:hover .overlay-text {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <main class="container-md">
        {{-- Container 1 : Opening --}}
        <div class="container-fluid rounded-5 pt-4 mb-5"
            style="background: linear-gradient(to bottom, var(--bg-color-1), var(--bg-color-2)); width: 100%; margin-top: 100px;">
            <h1 class="text-center text-white" style="font-size: 56px;">Hi, I'am Naoval Octa</h1>
            <span class="typewriter-container d-block text-center text-white fs-4 mb-5" id="sentence"
                style="margin-top: -8px"></span>
            <div class="d-flex justify-content-center">
                <img src="/images/people-3d-avatar/4-Western-Man.png" alt="" class="img-fluid w-25"
                    style="position: relative; z-index: 2">
                <img src="/images/people-3d-avatar/17-Designer.png" alt="" class="img-fluid w-25"
                    style="margin: 0 -10%; position: relative; z-index: 1"">
                <img src="/images/people-3d-avatar/1-Asian-Man.png" alt="" class="img-fluid w-25"
                    style="position: relative; z-index: 2"">
                <img src="/images/people-3d-avatar/14-Teacher.png" alt="" class="img-fluid w-25"
                    style="margin: 0 -10%; position: relative; z-index: 1">
                <img src="/images/people-3d-avatar/3-Black-Man.png" alt="" class="img-fluid w-25"
                    style="position: relative; z-index: 2"">
            </div>
        </div>

        {{-- Container 2 : About Me --}}
        <div class="container-fluid d-flex rounded-5 pt-4 ps-5 pe-0 mb-5"
            style="background: linear-gradient(to bottom, var(--bg-color-3), var(--bg-color-4)); width: 100%; border-bottom-right-radius: 370px !important;">
            <div style="max-height: 270px;">
                <h1 class="text-white mb-3" style="font-size: 56px;">About Me</h1>
                <div class="hidden-scroll overflow-auto h-100">
                    <p class="text-white pe-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolores, voluptas facilis possimus qui,
                        voluptatum enim porro vero quidem unde culpa quod blanditiis. Perferendis eius consequatur illum
                        nihil soluta blanditiis praesentium dolorum recusandae consectetur? Iste ut error cumque. Nesciunt
                        deserunt tempora nisi dolores? Animi, quos, consectetur, distinctio adipisci amet tempora modi
                        dolores dolore quae earum a quaerat dolor repellat ratione libero. Magni suscipit deserunt, adipisci
                        quis sit eum! Corporis pariatur ipsam quisquam unde? Eius rerum tempore asperiores sunt expedita
                        voluptatibus ex, doloremque eligendi deleniti, velit nesciunt odio! Ipsa quidem at quod. Sit debitis
                        laborum esse facere harum sequi explicabo similique eligendi voluptatem dolorem provident fuga
                        corporis sed modi odio, id nulla dignissimos consequatur ex inventore pariatur impedit est iusto.
                        Necessitatibus cumque accusamus rerum eos itaque odit aperiam rem. Illo deserunt harum explicabo
                        accusamus, similique dolorum eum, consequuntur saepe facere et praesentium. Saepe aut a temporibus!
                        Aliquam accusamus porro id at possimus vel nemo dolore nam? Accusantium, laboriosam, dolore maiores
                        ratione in vitae dolores totam unde deserunt quo at magni quos, repudiandae sequi inventore!
                        Mollitia, cumque delectus quibusdam labore beatae asperiores. Beatae rem expedita omnis ut placeat
                        cumque, obcaecati voluptatum voluptatibus numquam iure eveniet ex incidunt impedit veniam sequi
                        mollitia ipsam.
                    </p>
                </div>
                <div class="container_mouse d-flex align-items-center">
                    <span class="mouse-btn me-2">
                        <span class="mouse-scroll"></span>
                    </span>
                    <span class="text-white fs-6 fw-bold">Scroll</span>
                </div>
            </div>
            <img src="/images/people-3d-avatar/5-College-Student.png" alt="" class="img-fluid" style="width: 40%;">
        </div>

        {{-- Container 3 : Skills --}}
        <div class="container-fluid w-100 d-flex rounded-5 pt-4 ps-5 pe-0 mb-5" style="background: var(--bg-color-5);">
            <div class="row w-100">
                <div class="skill-menu-container col-md-5 mb-4">
                    <div class="skill-menu" id="language-menu">
                        <h6 class="skill-button-style-2" id="language-text-button">Language</h6>
                    </div>
                    <div class="skill-menu" id="tools-menu">
                        <h6 class="skill-button-style-1" id="tools-text-button">Tools</h6>
                    </div>
                </div>
                <div class="skill-detail-container col-md-7 mb-4">
                    <h1 class="text-white mb-3" style="font-size: 56px;">SKILLS</h1>
                    <div class="detail-skill d-flex flex-wrap" id="language">
                        <span
                            class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">HTML(5)</span>
                        <span
                            class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">CSS(3)</span>
                        <span class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">PHP</span>
                    </div>
                    <div class="detail-skill d-none flex-wrap" id="tools">
                        <span class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">VS
                            Code</span>
                        <span class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">Chrome Dev
                            Tools</span>
                        <span class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">Firefox Dev
                            Tools</span>
                        <span
                            class="skill skill-hover d-block border border-2 border-light text-white m-1 p-1">Windows</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Container 4 : Portofolio --}}
        <h1 class="text-end">Portfolio</h1>
        <p class="text-end">This is the result of my work making a web application</p>
        <div class="portfolio row">
            <div class="col d-flex justify-content-center m-3">
                <h4 class="align-self-center h2">Portfolio 1</h4>
            </div>
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?people" alt="Portfolio Image 1"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?art" alt="Portfolio Image 2"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
        </div>
        <div class="portfolio row">
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?technology" alt="Portfolio Image 3"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
            <div class="col d-flex justify-content-center m-3">
                <h4 class="align-self-center h2">Portfolio 2</h4>
            </div>
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?gadget" alt="Portfolio Image 4"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
        </div>
        <div class="portfolio row">
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?food" alt="Portfolio Image 5"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
            <div class="portfolio-image-container col m-3 ratio ratio-1x1">
                <img src="https://source.unsplash.com/600x600?drink" alt="Portfolio Image 6"
                    class="portfolio-image img-fluid rounded rounded-4">
                <div class="overlay-text rounded rounded-4 d-flex justify-content-center">
                    <h6 class="align-self-center text-white" style="font-size: 10vmax">?</h6>
                </div>
            </div>
            <div class="col d-flex justify-content-center m-3">
                <h4 class="align-self-center h2">Portfolio 3</h4>
            </div>
        </div>
    </main>
@endsection
