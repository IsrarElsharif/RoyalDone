@extends('layouts.include.MasterPage')


@section('titel')
    قائمة المهام
@endsection


@section('content')

<div class="app-content content todo-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar">
                    <div class="todo-app-menu">
                        <div class="add-task">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#new-task-modal"> إضافة مهمة </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-filters">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 me-50"></i>
                                    <span class="align-middle"> مـهـامـي</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 me-50"></i> <span
                                        class="align-middle">ذات أهمية</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="check" class="font-medium-3 me-50"></i> <span
                                        class="align-middle">تم الإتنهاء</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 me-50"></i> <span
                                        class="align-middle">تم الحذف</span>
                                </a>
                            </div>
                            <div class="mt-3 px-2 d-flex justify-content-between">
                                <h6 class="section-label mb-1">Tags| علامة</h6>
                                <i data-feather="plus" class="cursor-pointer"></i>
                            </div>
                            <div class="list-group list-group-labels">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-primary me-1"></span>فريق العمل
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-success me-1"></span>منخفض
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-warning me-1"></span>متوسط
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger me-1"></span>عالي
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-info me-1"></span>تم التحديث
                                </a>
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
                    <div class="todo-app-list">
                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search"
                                            class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="todo-search"
                                        placeholder="ابحث عن مهمة" aria-label="Search..."
                                        aria-describedby="todo-search" />
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle hide-arrow me-1" id="todoActions"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="todoActions">
                                    <a class="dropdown-item sort-asc" href="#">ترتيب أ - ي</a>
                                    <a class="dropdown-item sort-desc" href="#">ترتيب ي -أ</a>
                                    <a class="dropdown-item" href="#">Sort Assignee</a>
                                    <a class="dropdown-item" href="#">ترتيب بالتاريخ</a>
                                    <a class="dropdown-item" href="#">ترتيب بالأيام</a>
                                    <a class="dropdown-item" href="#">ترتيب بالأسابيع</a>
                                    <a class="dropdown-item" href="#">ترتيب بالأشهر</a>
                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->

                        <!-- Todo List starts -->
                        <div class="todo-task-list-wrapper list-group">
                            <ul class="todo-task-list media-list" id="todo-task-list">
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck1" />
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </div>
                                                <span class="todo-title">Fix Responsiveness for new structure 💻</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 08</small>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/logo.jpg') }}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck2" />
                                                    <label class="form-check-label" for="customCheck2"></label>
                                                </div>
                                                <span class="todo-title">Plan a party for development team 🎁</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                                <span class="badge rounded-pill badge-light-danger">مرتفعة</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 30</small>
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content">MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck3" />
                                                    <label class="form-check-label" for="customCheck3"></label>
                                                </div>
                                                <span class="todo-title">Hire 5 new Fresher or Experienced, frontend and backend developers </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-info">Update</span>
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/logo.jpg') }}"
                                                    alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck4" checked />
                                                    <label class="form-check-label" for="customCheck4"></label>
                                                </div>
                                                <span class="todo-title">Skype Tommy for project status & report</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-danger">High</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 18</small>
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content">HN</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                              
                            </ul>
                            <div class="no-results">
                                <h5>لم يتم إيجاد نتيجة</h5>
                            </div>
                        </div>
                        <!-- Todo List ends -->
                    </div>

                    <!-- Right Sidebar starts -->
                    <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <form id="form-modal-todo" class="todo-modal needs-validation" novalidate
                                    onsubmit="return false">
                                    <div class="modal-header align-items-center mb-1">
                                        <h5 class="modal-title">إضافة مهمة</h5>
                                        <div
                                            class="todo-item-action d-flex align-items-center justify-content-between ms-auto">
                                            <span class="todo-item-favorite cursor-pointer me-75"><i
                                                    data-feather="star" class="font-medium-2"></i></span>
                                            <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal"
                                                stroke-width="3"></i>
                                        </div>
                                    </div>
                                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                        <div class="action-tags">
                                            <div class="mb-1">
                                                <label for="todoTitleAdd" class="form-label">عنوان المهمة</label>
                                                <input type="text" id="todoTitleAdd" name="todoTitleAdd"
                                                    class="new-todo-item-title form-control"
                                                    placeholder="Title" />
                                            </div>
                                            <div class="mb-1 position-relative">
                                                <label for="task-assigned"
                                                    class="form-label d-block">إسناد</label>
                                                <select class="select2 form-select" id="task-assigned"
                                                    name="task-assigned">
                                                    <option
                                                        data-img="{{ asset('assets/img/logo.jpg') }}"
                                                        value="israr elsharif" selected>
                                                        israr elsharif
                                                    </option>
                                                    <option
                                                        data-img="{{ asset('assets/img/logo.jpg') }}"
                                                        value="فلان ">
                                                        فلان الفلاني
                                                    </option>
                                                    <option
                                                        data-img="../../../app-assets/images/portrait/small/avatar-s-4.jpg"
                                                        value="فلان ">
                                                        فلان الفلاني
                                                    </option>
                                                    <option
                                                        data-img="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                                        value="فلان ">
                                                        فلان الفلاني
                                                    </option>
                                                    <option
                                                        data-img="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                                                        value="فلان ">
                                                        فلان الفلاني
                                                    </option>
                                                    <option
                                                        data-img="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                        value="فلان ">
                                                        فلان الفلاني
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-1">
                                                <label for="task-due-date" class="form-label">تاريخ التسليم</label>
                                                <input type="text" class="form-control task-due-date"
                                                    id="task-due-date" name="task-due-date" />
                                            </div>
                                            <div class="mb-1">
                                                <label for="task-tag" class="form-label d-block">Tag| علامة</label>
                                                <select class="form-select task-tag" id="task-tag"
                                                    name="task-tag" multiple="multiple">
                                                    <option value="Team">فريق عمل</option>
                                                    <option value="Low">منخفضة</option>
                                                    <option value="Medium">متوسطة</option>
                                                    <option value="High">مرتفعة</option>
                                                    <option value="Update">تحديث</option>
                                                </select>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label">وصف المهمة</label>
                                                <div id="task-desc" class="border-bottom-0"
                                                    data-placeholder="Write Your Description"></div>
                                                <div class="d-flex justify-content-end desc-toolbar border-top-0">
                                                    <span class="ql-formats me-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-align"></button>
                                                        <button class="ql-link"></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <button type="submit"
                                                class="btn btn-primary d-none add-todo-item me-1">اضافة</button>
                                            <button type="button"
                                                class="btn btn-outline-secondary add-todo-item d-none"
                                                data-bs-dismiss="modal">
                                                إلغاء
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary d-none update-btn update-todo-item me-1">تحديث</button>
                                            <button type="button"
                                                class="btn btn-outline-danger update-btn d-none"
                                                data-bs-dismiss="modal">
                                                حذف
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Right Sidebar ends -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
