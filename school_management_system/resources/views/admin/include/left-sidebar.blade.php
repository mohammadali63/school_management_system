<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="User">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-person-circle"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Teacher Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-book"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Student Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>
                    <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                    <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                    <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                    <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                @if(Auth::user()->id == 1)
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">User</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('user')}}" class="list-group-item"><i class="bi bi-person-plus"></i>Add User</a>
                    <a href="{{route('manage.user')}}" class="list-group-item"><i class="bi bi-pencil"></i>Manage User</a>
                </div>
                @endif
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Teacher Modiule</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="widgets-static-widgets.html" class="list-group-item"><i class="bi bi-person-plus"></i>Add Teacher</a>
                    <a href="widgets-data-widgets.html" class="list-group-item"><i class="bi bi-pencil"></i>Manage Teacher</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Course Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="ecommerce-products-list.html" class="list-group-item"><i class="bi bi-person-plus"></i>Add Course</a>
                    <a href="ecommerce-products-grid.html" class="list-group-item"><i class="bi bi-pencil"></i>Manage Course</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-components">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Student Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="component-alerts.html" class="list-group-item"><i class="bi bi-person-plus"></i>Add Student</a>
                    <a href="component-accordions.html" class="list-group-item"><i class="bi bi-pencil"></i>Manage Student</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-forms">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Forms</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="form-elements.html" class="list-group-item"><i class="bi bi-award"></i>Form Elements</a>
                    <a href="form-input-group.html" class="list-group-item"><i class="bi bi-back"></i>Input Groups</a>
                    <a href="form-layouts.html" class="list-group-item"><i class="bi bi-bookmark-check"></i>Form Layouts</a>
                    <a href="form-validations.html" class="list-group-item"><i class="bi bi-broadcast-pin"></i>Form Validations</a>
                    <a href="form-file-upload.html" class="list-group-item"><i class="bi bi-cloud-upload"></i>File Upload</a>
                    <a href="form-date-time-pickes.html" class="list-group-item"><i class="bi bi-calendar-date"></i>Date Pickers</a>
                    <a href="form-select2.html" class="list-group-item"><i class="bi bi-check2-circle"></i>Select2</a>
                </div>
            </div>
        </div>
    </div>
</aside>
