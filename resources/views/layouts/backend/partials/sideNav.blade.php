@guest
@else
<div class="side-bar side-bar-lg-active" data-theme="purple">
    <!-- Brand details -->
    <div class="side-menu-brand d-flex flex-column justify-content-center align-items-center clear mt-3">
        <img src="{{asset('assets/backend/img/QbyteIcon.png')}}" alt="bran_name" class="brand-img">
        <a href="#" class="brand-name mt-2 ml-2 font-weight-bold">Ecommerce</a>
    </div>
    <!-- Side bar menu -->
    <div class="the_menu mt-5">
        <!-- Heading -->
        <div class="side-menu-heading d-flex">
            <h6 class=" font-weight-bold pb-2 mx-3"> {{auth()->user()->name}} </h6>
            <a href="#" class="font-weight-bold ml-auto px-3">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>

        <!-- Menu item -->
        <div id="accordion">
            <ul class="side-menu p-0 m-0 mt-3">
                <li class="side-menu-item px-3"><a href="index.html" class="w-100 py-3 pl-4">Dashboard</a></li>
                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_1" aria-expanded="false" aria-controls="sub_menu_1">Basic UI Elements</a></li>
                <!-- Sub menu -->
                <div id="sub_menu_1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="alert.html" class="w-100 pl-4">Alert</a></li>
                        <li class="side-sub-menu-item px-3"><a href="accordion.html" class="w-100 pl-4">Accordion</a></li>
                        <li class="side-sub-menu-item px-3"><a href="badge.html" class="w-100 pl-4">Badge</a></li>
                        <li class="side-sub-menu-item px-3"><a href="button.html" class="w-100 pl-4">Button</a></li>
                        <li class="side-sub-menu-item px-3"><a href="bootstrap_tab.html" class="w-100 pl-4">Bootstrap tab</a></li>
                        <li class="side-sub-menu-item px-3"><a href="cards.html" class="w-100 pl-4">Cards</a></li>
                        <li class="side-sub-menu-item px-3"><a href="carousels.html" class="w-100 pl-4">Carousels</a></li>
                        <li class="side-sub-menu-item px-3"><a href="dropdown.html" class="w-100 pl-4">Dropdown</a></li>
                        <li class="side-sub-menu-item px-3"><a href="list.html" class="w-100 pl-4">Llist</a></li>
                        <li class="side-sub-menu-item px-3"><a href="modal.html" class="w-100 pl-4">Modals</a></li>
                        <li class="side-sub-menu-item px-3"><a href="paginations.html" class="w-100 pl-4">Paginations</a></li>
                        <li class="side-sub-menu-item px-3"><a href="progressbar.html" class="w-100 pl-4">Progressbar</a></li>
                        <li class="side-sub-menu-item px-3"><a href="tooltip.html" class="w-100 pl-4">Tooltip</a></li>
                        <li class="side-sub-menu-item px-3"><a href="typography.html" class="w-100 pl-4">Typography</a></li>
                    </ul>
                </div>


                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#form-sub-menu" aria-expanded="false" aria-controls="form-sub-menu">Form Elements</a></li>
                <!-- Sub menu -->
                <div id="form-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="form_basic.html" class="w-100 pl-4">Basic Elements</a></li>
                        <li class="side-sub-menu-item px-3"><a href="form_basic_action.html" class="w-100 pl-4">Basic Action Bar</a></li>
                        <li class="side-sub-menu-item px-3"><a href="form_layout.html" class="w-100 pl-4">Form layouts</a></li>
                        <li class="side-sub-menu-item px-3"><a href="multi_column_forms.html" class="w-100 pl-4">Multi Column Forms</a></li>
                        <li class="side-sub-menu-item px-3"><a href="input_group.html" class="w-100 pl-4">Input Group</a></li>
                        <li class="side-sub-menu-item px-3"><a href="form_validation.html" class="w-100 pl-4">Form Validation</a></li>
                    </ul>
                </div>

                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#chart-sub-menu" aria-expanded="false" aria-controls="chart-sub-menu">Charts</a></li>
                <!-- Sub menu -->
                <div id="chart-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="chart_js.html" class="w-100 pl-4">Chart Js</a></li>
                    </ul>
                </div>

                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#table-sub-menu" aria-expanded="false" aria-controls="table-sub-menu">Tables</a></li>
                <!-- Sub menu -->
                <div id="table-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="basic_table.html" class="w-100 pl-4">Basic Table</a></li>
                        <li class="side-sub-menu-item px-3"><a href="datatables.html" class="w-100 pl-4">DataTables</a></li>
                    </ul>
                </div>

                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4">Icons</a></li>
                <!-- Sub menu parent -->
                <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_2" aria-expanded="true" aria-controls="sub_menu_2">User Pages</a></li>
                <!-- Sub menu -->
                <div id="sub_menu_2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="side-sub-menu p-0">
                        <li class="side-sub-menu-item px-3"><a href="blank.html" class="w-100 pl-4 small">Blank Page</a></li>
                        <li class="side-sub-menu-item px-3"><a href="login.html" class="w-100 pl-4 small">Login</a></li>
                        <li class="side-sub-menu-item px-3"><a href="signup.html" class="w-100 pl-4 small">Register</a></li>
                        <li class="side-sub-menu-item px-3"><a href="404.html" class="w-100 pl-4 small">404</a></li>
                        <li class="side-sub-menu-item px-3"><a href="500.html" class="w-100 pl-4 small">500</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</div>
@endguest
