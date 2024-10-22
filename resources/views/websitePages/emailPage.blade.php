@extends('layouts.include.MasterPage')

@section('titel')
    البريد الإلكتروني
@endsection

@section('content')
<div class="app-content content email-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar">
                    <div class="email-app-menu">
                        <div class="form-group-compose text-center compose-btn">
                            <button type="button" class="compose-email btn btn-primary w-100" data-bs-backdrop="false" data-bs-toggle="modal" data-bs-target="#compose-mail">
                                Compose
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-messages">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Inbox</span>
                                    <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="send" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Sent</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="edit-2" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Draft</span>
                                    <span class="badge badge-light-warning rounded-pill float-end">2</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Starred</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="info" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Spam</span>
                                    <span class="badge badge-light-danger rounded-pill float-end">5</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Trash</span>
                                </a>
                            </div>
                            <!-- <hr /> -->
                            <h6 class="section-label mt-3 mb-1 px-2">Labels</h6>
                            <div class="list-group list-group-labels">
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-success me-1"></span>Personal</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-primary me-1"></span>Company</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-warning me-1"></span>Important</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-danger me-1"></span>Private</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <!-- Email list Area -->
                    <div class="email-app-list">
                        <!-- Email search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="email-search" placeholder="Search email" aria-label="Search..." aria-describedby="email-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Email search ends -->

                        <!-- Email actions starts -->
                        <div class="app-action">
                            <div class="action-left">
                                <div class="form-check selectAll">
                                    <input type="checkbox" class="form-check-input" id="selectAllCheck" />
                                    <label class="form-check-label fw-bolder ps-25" for="selectAllCheck">Select All</label>
                                </div>
                            </div>
                            <div class="action-right">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="folder" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="folder" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="folder">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="edit-2" class="font-small-4 me-50"></i>
                                                    <span>Draft</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="info" class="font-small-4 me-50"></i>
                                                    <span>Spam</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="trash" class="font-small-4 me-50"></i>
                                                    <span>Trash</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="tag" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="tag" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tag">
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mail-unread">
                                        <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item mail-delete">
                                        <span class="action-icon"><i data-feather="trash-2" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Email actions ends -->

                        <!-- Email list starts -->
                        <div class="email-user-list">
                            <ul class="email-media-list">
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar img holder" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tonny Deep</h5>
                                                <span class="text-truncate">🎯 Focused impactful open system </span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">4:14 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                                demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                                unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                                inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2" />
                                                <label class="form-check-label" for="customCheck2"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Louis Welch</h5>
                                                <span class="text-truncate">Thanks, Let's do it.🤩</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-danger bullet-sm"></span>
                                                <span class="mail-date">2:15 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes
                                                dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll
                                                halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3" />
                                                <label class="form-check-label" for="customCheck3"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Envato Market</h5>
                                                <span class="text-truncate">👋 You have new comment...</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">2:15 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears.
                                                Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate
                                                bar lemon drops.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4" />
                                                <label class="form-check-label" for="customCheck4"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Sarah Montgomery</h5>
                                                <span class="text-truncate">Your New UI.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears
                                                wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate
                                                jelly-o topping marzipan fruitcake.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck5" />
                                                <label class="form-check-label" for="customCheck5"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Ardis Balderson</h5>
                                                <span class="text-truncate mb-0">Focused impactful open system</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <i data-feather="paperclip"></i>
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">15 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                                demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                                unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                                inblow somewhatly ilioperoneal forrard palfrey
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck6" />
                                                <label class="form-check-label" for="customCheck6"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Modestine Spat</h5>
                                                <span class="text-truncate mb-0">Profound systemic alliance 🎉</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">11 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin
                                                Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree
                                                unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph
                                                immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus
                                                anterolateral infirmate Nahani Hyla barile farthing
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck7" />
                                                <label class="form-check-label" for="customCheck7"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Eb Begg</h5>
                                                <span class="text-truncate mb-0">Organized value-added model</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">1 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe
                                                prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity
                                                nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite
                                                cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical
                                                oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck8" />
                                                <label class="form-check-label" for="customCheck8"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Waldemar Mannering</h5>
                                                <span class="text-truncate mb-0">Quality-focused methodical flexibility</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-danger bullet-sm"></span>
                                                <span class="mail-date">19 Jun</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate
                                                rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary
                                                unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia
                                                phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal
                                                binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck9" />
                                                <label class="form-check-label" for="customCheck9"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Louetta Esses</h5>
                                                <span class="text-truncate mb-0">Company Report</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">2 Jun</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                                                candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                                                carrot cake topping I love. Sweet candy I love
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck10" />
                                                <label class="form-check-label" for="customCheck10"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tressa Gass</h5>
                                                <span class="text-truncate mb-0">Theme Update</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">29 May</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake
                                                topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie
                                                roll chocolate I love. Tootsie roll pie marzipan sesame snaps.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck11" />
                                                <label class="form-check-label" for="customCheck11"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tommy Sicilia</h5>
                                                <span class="text-truncate mb-0">Thanks, Let's do it.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">17 May</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                                                candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                                                carrot cake topping I love. Sweet candy I love.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck12" />
                                                <label class="form-check-label" for="customCheck12"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Heather Howell</h5>
                                                <span class="text-truncate mb-0">Thanks, Let's do it.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">21 Mar</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton
                                                candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie.
                                                Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div>
                        </div>
                        <!-- Email list ends -->
                    </div>
                    <!--/ Email list Area -->
                    <!-- Detailed Email View -->
                    <div class="email-app-details">
                        <!-- Detailed Email Header starts -->
                        <div class="email-detail-header">
                            <div class="email-header-left d-flex align-items-center">
                                <span class="go-back me-1"><i data-feather="chevron-left" class="font-medium-4"></i></span>
                                <h4 class="email-subject mb-0">Focused open system 😃</h4>
                            </div>
                            <div class="email-header-right ms-2 ps-1">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <span class="action-icon favorite"><i data-feather="star" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown no-arrow">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="folder" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="folder">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="edit-2" class="font-medium-3 me-50"></i>
                                                    <span>Draft</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="info" class="font-medium-3 me-50"></i>
                                                    <span>Spam</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="trash" class="font-medium-3 me-50"></i>
                                                    <span>Trash</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown no-arrow">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="tag" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="tag">
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="action-icon"><i data-feather="trash" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item email-prev">
                                        <span class="action-icon"><i data-feather="chevron-left" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item email-next">
                                        <span class="action-icon"><i data-feather="chevron-right" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detailed Email Header ends -->

                        <!-- Detailed Email Content starts -->
                        <div class="email-scroll-area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="email-label">
                                        <span class="mail-label badge rounded-pill badge-light-primary">Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header email-detail-head">
                                            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="avatar me-75">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="avatar img holder" width="48" height="48" />
                                                </div>
                                                <div class="mail-items">
                                                    <h5 class="mb-0">Carlos Williamson</h5>
                                                    <div class="email-info-dropup dropdown">
                                                        <span role="button" class="dropdown-toggle font-small-3 text-muted" id="card_top01" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            carlos@gmail.com
                                                        </span>
                                                        <div class="dropdown-menu" aria-labelledby="card_top01">
                                                            <table class="table table-sm table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-end">From:</td>
                                                                        <td>carlos@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-end">To:</td>
                                                                        <td>johndoe@ow.ly</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-end">Date:</td>
                                                                        <td>14:58, 29 Aug 2020</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-meta-item d-flex align-items-center">
                                                <small class="mail-date-time text-muted">29 Aug, 2020, 14:58</small>
                                                <div class="dropdown ms-50">
                                                    <div role="button" class="dropdown-toggle hide-arrow" id="email_more" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="email_more">
                                                        <div class="dropdown-item"><i data-feather="corner-up-left" class="me-50"></i>Reply</div>
                                                        <div class="dropdown-item"><i data-feather="corner-up-right" class="me-50"></i>Forward</div>
                                                        <div class="dropdown-item"><i data-feather="trash-2" class="me-50"></i>Delete</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">Hey John,</p>
                                                <p class="card-text">
                                                    bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                                                    Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                    fulfillment scientifical Pianokoto Chelonia
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header email-detail-head">
                                            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="avatar me-75">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avatar img holder" width="48" height="48" />
                                                </div>
                                                <div class="mail-items">
                                                    <h5 class="mb-0">Ardis Balderson</h5>
                                                    <div class="email-info-dropup dropdown">
                                                        <span role="button" class="dropdown-toggle font-small-3 text-muted" id="dropdownMenuButton200" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            abaldersong@utexas.edu
                                                        </span>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                                                            <table class="table table-sm table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-end">From:</td>
                                                                        <td>abaldersong@utexas.edu</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-end">To:</td>
                                                                        <td>johndoe@ow.ly</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-end">Date:</td>
                                                                        <td>4:25 AM 13 Jan 2018</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-meta-item d-flex align-items-center">
                                                <small class="mail-date-time text-muted">17 May, 2020, 4:14</small>
                                                <div class="dropdown ms-50">
                                                    <div role="button" class="dropdown-toggle hide-arrow" id="email_more_2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="email_more_2">
                                                        <div class="dropdown-item"><i data-feather="corner-up-left" class="me-50"></i>Reply</div>
                                                        <div class="dropdown-item"><i data-feather="corner-up-right" class="me-50"></i>Forward</div>
                                                        <div class="dropdown-item"><i data-feather="trash-2" class="me-50"></i>Delete</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">Hey John,</p>
                                                <p class="card-text">
                                                    bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                                                    Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                    fulfillment scientifical Pianokoto Chelonia
                                                </p>
                                                <p class="card-text">
                                                    Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable
                                                    Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard
                                                    palfrey Satyrinae outfreeman melebiose
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mail-attachments">
                                                <div class="d-flex align-items-center mb-1">
                                                    <i data-feather="paperclip" class="font-medium-1 me-50"></i>
                                                    <h5 class="fw-bolder text-body mb-0">2 Attachments</h5>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="mb-50">
                                                        <img src="../../../app-assets/images/icons/doc.png" class="me-25" alt="png" height="18" />
                                                        <small class="text-muted fw-bolder">interdum.docx</small>
                                                    </a>
                                                    <a href="#">
                                                        <img src="../../../app-assets/images/icons/jpg.png" class="me-25" alt="png" height="18" />
                                                        <small class="text-muted fw-bolder">image.png</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-0">
                                                    Click here to
                                                    <a href="#">Reply</a>
                                                    or
                                                    <a href="#">Forward</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Detailed Email Content ends -->
                    </div>
                    <!--/ Detailed Email View -->

                    <!-- compose email -->
                    <div class="modal modal-sticky" id="compose-mail" data-bs-keyboard="false">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content p-0">
                                <div class="modal-header">
                                    <h5 class="modal-title">Compose Mail</h5>
                                    <div class="modal-actions">
                                        <a href="#" class="text-body me-75"><i data-feather="minus"></i></a>
                                        <a href="#" class="text-body me-75 compose-maximize"><i data-feather="maximize-2"></i></a>
                                        <a class="text-body" href="#" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body flex-grow-1 p-0">
                                    <form class="compose-form">
                                        <div class="compose-mail-form-field select2-primary">
                                            <label for="email-to" class="form-label">To: </label>
                                            <div class="flex-grow-1">
                                                <select class="select2 form-select w-100" id="email-to" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <div>
                                                <a class="toggle-cc text-body me-1" href="#">Cc</a>
                                                <a class="toggle-bcc text-body" href="#">Bcc</a>
                                            </div>
                                        </div>
                                        <div class="compose-mail-form-field cc-wrapper">
                                            <label for="emailCC" class="form-label">Cc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailCC" class="form-control" placeholder="CC"/> -->
                                                <select class="select2 form-select w-100" id="emailCC" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-cc" href="#"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field bcc-wrapper">
                                            <label for="emailBCC" class="form-label">Bcc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailBCC" class="form-control" placeholder="BCC"/> -->
                                                <select class="select2 form-select w-100" id="emailBCC" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-bcc" href="#"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field">
                                            <label for="emailSubject" class="form-label">Subject: </label>
                                            <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="emailSubject" />
                                        </div>
                                        <div id="message-editor">
                                            <div class="editor" data-placeholder="Type message..."></div>
                                            <div class="compose-editor-toolbar">
                                                <span class="ql-formats me-0">
                                                    <select class="ql-font">
                                                        <option selected>Sailec Light</option>
                                                        <option value="sofia">Sofia Pro</option>
                                                        <option value="slabo">Slabo 27px</option>
                                                        <option value="roboto">Roboto Slab</option>
                                                        <option value="inconsolata">Inconsolata</option>
                                                        <option value="ubuntu">Ubuntu Mono</option>
                                                    </select>
                                                </span>
                                                <span class="ql-formats me-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-link"></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="compose-footer-wrapper">
                                            <div class="btn-wrapper d-flex align-items-center">
                                                <div class="btn-group dropup me-1">
                                                    <button type="button" class="btn btn-primary">Send</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <span class="visually-hidden">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"> Schedule Send</a>
                                                    </div>
                                                </div>
                                                <!-- add attachment -->
                                                <div class="email-attachement">
                                                    <label for="file-input" class="form-label">
                                                        <i data-feather="paperclip" width="17" height="17" class="ms-50"></i>
                                                    </label>

                                                    <input id="file-input" type="file" class="d-none" />
                                                </div>
                                            </div>
                                            <div class="footer-action d-flex align-items-center">
                                                <div class="dropup d-inline-block">
                                                    <i class="font-medium-2 cursor-pointer me-50" data-feather="more-vertical" role="button" id="composeActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="composeActions">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Add Label</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Plain text mode</span>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Print</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Check Spelling</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <i data-feather="trash" class="font-medium-2 cursor-pointer" data-bs-dismiss="modal"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ compose email -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

    
@endsection