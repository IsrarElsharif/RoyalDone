@extends('layouts.include.MasterPage1')


@section('titel')
    قائمة المهام
@endsection


@section('content')
    <!-- BEGIN: Content-->
    <div style="padding: 50px 50px 0 50px;">
        <div class="content-wrapper container-xxl p-0">
            {{-- <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">Knowledge Base</h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pages</a>
                  </li>
                  <li class="breadcrumb-item active">Knowledge Base
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
          <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
              <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
            </div>
          </div>
        </div>
      </div> --}}
            <div class="content-body"><!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center"
                                style="background-image: url('{{ asset('assets/img/illustration/banner.png') }}')">
                                <div class="card-body">
                                    <br>
                                    <h2 class="text-primary">مرحباَ بك في Royal Done</h2>
                                    <br>

                                    <p class="card-text mb-2">
                                        <span>انضم إلى فريق الناجحين. </span>
                                        <br>
                                        <br>
                                        <span class="fw-bolder"> حقِّق طموحاتك</span>
                                        <br>
                                        <br>
                                        <a href="{{ route('register') }}"><button type="submit" class="btn btn-primary"
                                                tabindex="5">ماذا تنتظر انضم إليناالآن</button></a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <!-- sales card -->
                        {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
    <div class="card">
      <a href="page-kb-category.html">
        <img
          src="{{ asset('assets/img/illustration/sales.svg') }}"
          class="card-img-top"
          alt="knowledge-base-image"
        />

        <div class="card-body text-center">
          <h4>Sales Automation</h4>
          <p class="text-body mt-1 mb-0">
            There is perhaps no better demonstration of the folly of image of our tiny world.
          </p>
        </div>
      </a>
    </div>
  </div> --}}

                        <!-- marketing -->
                        {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
    <div class="card">
      <a href="page-kb-category.html">
        <img
          src="{{ asset('assets/img/illustration/marketing.svg') }}"
          class="card-img-top"
          alt="knowledge-base-image"
        />
        <div class="card-body text-center">
          <h4>Marketing Automation</h4>
          <p class="text-body mt-1 mb-0">
            Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
          </p>
        </div>
      </a>
    </div>
  </div> --}}

                        <!-- api -->
                        {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
    <div class="card">
      <a href="page-kb-category.html">
        <img src="{{ asset('assets/img/illustration/api.svg') }}" class="card-img-top" alt="knowledge-base-image" />
        <div class="card-body text-center">
          <h4>API Questions</h4>
          <p class="text-body mt-1 mb-0">every hero and coward, every creator and destroyer of civilization.</p>
        </div>
      </a>
    </div>
  </div> --}}

                        <!-- personalization -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="{{ route('guest') }}">
                                    <img src="{{ asset('assets/img/illustration/personalization.svg') }}"
                                        class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>لن يفوتك شيء</h4>
                                        <p class="text-body mt-1 mb-0">أنشئ مهامك وتابعهاأولاً بأول مع خاصية إضافة تذكير وتنبيه حتى لا يفوتك أي شيء!.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="{{ route('guest') }}">
                                    <img src="{{ asset('assets/img/illustration/email.svg') }}" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>نظِّم مشاريعك</h4>
                                        <p class="text-body mt-1 mb-0">قسّم المشاريع المعقدة إلى مراحل رئيسية وقوائم مهام
                                            ومهام ومهام فرعية لتتمكن من إدارتها بكفاءة أكبر. قم بتعيين المهام لأعضاء فريقك
                                            وتتبع تقدمهم لضمان الانتهاء في الوقت المحدد.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="{{ route('guest') }}">
                                    <img src="{{ asset('assets/img/illustration/demand.svg') }}" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>ابق على اتصال</h4>
                                        <p class="text-body mt-1 mb-0">ابقَ دائمًا على اطلاع من خلال تحديثات المشروع الفورية
                                            في الموجز الخاص بك. يمكنك بدء مناقشة هناك في التعليقات، والبقاء على اتصال بفريقك من خلال ميزة الدردشة ..</p>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
   
    <!-- END: Content-->
@endsection
