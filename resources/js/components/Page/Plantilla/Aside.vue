<template>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                    <!-- <li class="{{set_active(['setting/page'])}}">
                        <a href="{{ route('setting/page') }}">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li> -->

                    <li class="submenu">
                        <router-link to="/" class="menu-link">
                            <i class="fas fa-tachometer-alt"></i>
                            <span> Dashboard</span>
                        </router-link>
                    </li>

                    <li
                        class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}"
                    >
                        <a href="#">
                            <i class="fas fa-shield-alt"></i>
                            <span>Gestión de Usuarios</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a
                                    href="{{ route('list/users') }}"
                                    class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}"
                                    >Listar Usuarios</a
                                >
                            </li>

                            <li>
                                <a
                                    href="{{ route('user/add/page') }}"
                                    class="{{set_active(['user/add/page'])}}  }}"
                                >
                                    Roles</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ route('user/add/page') }}"
                                    class="{{set_active(['user/add/page'])}}  }}"
                                >
                                    Permisos</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li
                        class="submenu {{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}"
                    >
                        <a href="#"
                            ><i class="fas fa-graduation-cap"></i>
                            <span> Gestion de Cursos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <router-link
                                    to="/cursos"
                                    href="{{ route('student/list') }}"
                                    class="{{set_active(['student/list','student/grid'])}}"
                                    >Categorias del Curso</router-link
                                >
                            </li>
                        </ul>
                    </li>

                    <!-- <li
                        class="submenu  {{set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])}} {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}"
                    >
                        <a href="#"
                            ><i class="fas fa-chalkboard-teacher"></i>
                            <span> Teachers</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a
                                    href="{{ route('teacher/list/page') }}"
                                    class="{{set_active(['teacher/list/page','teacher/grid/page'])}}"
                                    >Teacher List</a
                                >
                            </li>
                            <li>
                                <a href="teacher-details.html">Teacher View</a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('teacher/add/page') }}"
                                    class="{{set_active(['teacher/add/page'])}}"
                                    >Teacher Add</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{ (request()->is('teacher/edit/*')) ? 'active' : '' }}"
                                    >Teacher Edit</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li
                        class="submenu {{set_active(['department/add/page','department/edit/page'])}} {{ request()->is('department/edit/*') ? 'active' : '' }}"
                    >
                        <a href="#"
                            ><i class="fas fa-building"></i>
                            <span> Departments</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a
                                    href="{{ route('department/list/page') }}"
                                    class="{{set_active(['department/list/page'])}} {{ request()->is('department/edit/*') ? 'active' : '' }}"
                                    >Department List</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ route('department/add/page') }}"
                                    class="{{set_active(['department/add/page'])}}"
                                    >Department Add</a
                                >
                            </li>
                            <li><a>Department Edit</a></li>
                        </ul>
                    </li> -->

                    <li
                        class="submenu {{set_active(['subject/list/page','subject/add/page'])}} {{ request()->is('subject/edit/*') ? 'active' : '' }}"
                    >
                        <a href="#"
                            ><i class="fas fa-book-reader"></i>
                            <span> Gestion de Clientes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <router-link
                                    to="/clientes"
                                    href="{{ route('student/list') }}"
                                    class="{{set_active(['student/list','student/grid'])}}"
                                    >Lista de Clientes</router-link
                                >
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li
                        class="submenu {{set_active(['invoice/list/page','invoice/paid/page',
                    'invoice/overdue/page','invoice/draft/page','invoice/recurring/page',
                    'invoice/cancelled/page','invoice/grid/page','invoice/add/page',
                    'invoice/edit/page','invoice/view/page','invoice/settings/page',
                    'invoice/settings/tax/page','invoice/settings/bank/page'])}}"
                    >
                        <a href="#"
                            ><i class="fas fa-clipboard"></i>
                            <span> Invoices</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a
                                    class="{{set_active(['invoice/list/page','invoice/paid/page','invoice/overdue/page','invoice/draft/page','invoice/recurring/page','invoice/cancelled/page'])}}"
                                    href=""
                                    >Invoices List</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{set_active(['invoice/grid/page'])}}"
                                    href="{{ route('invoice/grid/page') }}"
                                    >Invoices Grid</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{set_active(['invoice/add/page'])}}"
                                    href="{{ route('invoice/add/page') }}"
                                    >Add Invoices</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{set_active(['invoice/edit/page'])}}"
                                    href="{{ route('invoice/edit/page') }}"
                                    >Edit Invoices</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{set_active(['invoice/view/page'])}}"
                                    href="{{ route('invoice/view/page') }}"
                                    >Invoices Details</a
                                >
                            </li>
                            <li>
                                <a
                                    class="{{set_active(['invoice/settings/page','invoice/settings/tax/page','invoice/settings/bank/page'])}}"
                                    href="{{ route('invoice/settings/page') }}"
                                    >Invoices Settings</a
                                >
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Management</span>
                    </li>

                    <li class="submenu">
                        <a href="#"
                            ><i class="fas fa-file-invoice-dollar"></i>
                            <span> Accounts</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="fees-collections.html"
                                    >Fees Collection</a
                                >
                            </li>
                            <li><a href="expenses.html">Expenses</a></li>
                            <li><a href="salary.html">Salary</a></li>
                            <li>
                                <a href="add-fees-collection.html">Add Fees</a>
                            </li>
                            <li>
                                <a href="add-expenses.html">Add Expenses</a>
                            </li>
                            <li><a href="add-salary.html">Add Salary</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="holiday.html"
                            ><i class="fas fa-holly-berry"></i>
                            <span>Holiday</span></a
                        >
                    </li>
                    <li>
                        <a href="fees.html"
                            ><i class="fas fa-comment-dollar"></i>
                            <span>Fees</span></a
                        >
                    </li>
                    <li>
                        <a href="exam.html"
                            ><i class="fas fa-clipboard-list"></i>
                            <span>Exam list</span></a
                        >
                    </li>
                    <li>
                        <a href="event.html"
                            ><i class="fas fa-calendar-day"></i>
                            <span>Events</span></a
                        >
                    </li>
                    <li>
                        <a href="library.html"
                            ><i class="fas fa-book"></i> <span>Library</span></a
                        >
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</template>
