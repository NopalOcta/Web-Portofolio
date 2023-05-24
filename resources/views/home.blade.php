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
            animation: scrolling13 1s linear infinite;
        }

        @keyframes scrolling13 {
            0% {
                opacity: 0;
                transform: translateY(-7.5px);
            }

            100% {
                opacity: 1;
                transform: translateY(7px);
            }
        }
    </style>
@endsection

@section('content')
    <main class="container-md">
        {{-- Container 1 : Opening --}}
        <div class="container-fluid rounded-5 pt-4 mb-5"
            style="background: linear-gradient(to bottom, var(--bg-color-1), var(--bg-color-2)); width: 100%;">
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
                <h1 class="text-white" style="font-size: 56px;">About Me</h1>
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
    </main>
@endsection
