<template lang="">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header badge-primary">LISTA DE USUARIOS</h5>
            <!--Botones-->
            <div class="card-header row">
                <div class="col-4">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"
                            ><i class="bx bx-search"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Buscar usuarios"
                            aria-label="Search..."
                            aria-describedby="basic-addon-search31"
                        />
                    </div>
                </div>
                <div class="col-8">
                    <div class="dt-action-buttons text-end">
                        <div class="dt-buttons">
                            <!-- <button
                                class="dt-button buttons-collection dropdown-toggle btn btn-label-primary me-2"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                type="button"
                                aria-haspopup="dialog"
                                aria-expanded="false"
                            >
                                <span
                                    ><i class="bx bx-show me-1"></i>Export</span
                                ><span class="dt-down-arrow">▼</span>
                            </button> -->
                            <button
                                class="dt-button create-new btn btn-primary"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                type="button"
                            >
                                <span
                                    ><i class="bx bx-plus me-1"></i>
                                    <span class="d-none d-lg-inline-block"
                                        >Nuevo Usuario</span
                                    ></span
                                >
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <br />
            <!--Tabla-->
            <div class="table-responsive text-nowrap">
                <table class="table border-top">
                    <thead>
                        <tr>
                            <th
                                class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                rowspan="1"
                                colspan="1"
                                style="width: 18px"
                                data-col="1"
                                aria-label=""
                            >
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                />
                            </th>
                            <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                style="width: 237px"
                                aria-label="Name: activate to sort column ascending"
                            >
                                NOMBRES Y APELLIDOS
                            </th>
                            <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                style="width: 225px"
                                aria-label="Email: activate to sort column ascending"
                            >
                                ROL
                            </th>
                            <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                style="width: 75px"
                                aria-label="Date: activate to sort column ascending"
                            >
                                Fecha de creacion
                            </th>

                            <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="DataTables_Table_0"
                                rowspan="1"
                                colspan="1"
                                style="width: 103px"
                                aria-label="Status: activate to sort column ascending"
                            >
                                ESTADO
                            </th>
                            <th
                                class="sorting_disabled"
                                rowspan="1"
                                colspan="1"
                                style="width: 65px"
                                aria-label="Actions"
                            >
                                ACCIONES
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr v-for="item in USUARIOS" :key="item.id">
                           
                            <td class="dt-checkboxes-cell">
                                <input
                                    type="checkbox"
                                    class="dt-checkboxes form-check-input"
                                />
                            </td>
                            <td>
                                <div
                                    class="d-flex justify-content-start align-items-center"
                                >
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <span
                                                class="avatar-initial rounded-circle bg-label-danger"
                                            >
                                                <img
                                                    src="img/avatars/5.png"
                                                    alt="Avatar"
                                                    class="rounded-circle"
                                            /></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span
                                            class="emp_name text-truncate"
                                        >{{item.name + ' ' + item.surname}}</span
                                        ><small
                                            class="emp_post text-truncate text-muted"
                                            >{{item.email}}</small
                                        >
                                    </div>
                                </div>
                            </td>

                            <td>{{item.role.name}}</td>
                            <td>{{item.created_at}}</td>
                            <td>
                                <span class="badge bg-label-primary me-1"
                                    v-if="item.state==1">Activo</span
                                >
                                <span class="badge bg-label-danger me-1"  v-if="item.state==2"
                                >Des-Activo</span
                            >
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-icon"
                                    ><i class="bx bxs-box"></i
                                ></a>

                                <a href="" class="btn btn-sm btn-icon item-edit"
                                    ><i class="bx bxs-edit"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--Paginacion-->
            <div class="card-body">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-lg-6 text-end">
                        <div class="demo-inline-spacing">
                            <!-- Basic Pagination -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item first">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            ><i
                                                class="tf-icon bx bx-chevrons-left"
                                            ></i
                                        ></a>
                                    </li>
                                    <li class="page-item prev">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            ><i
                                                class="tf-icon bx bx-chevron-left"
                                            ></i
                                        ></a>
                                    </li>
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            >1</a
                                        >
                                    </li>
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            >2</a
                                        >
                                    </li>
                                    <li class="page-item active">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            >3</a
                                        >
                                    </li>
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            >4</a
                                        >
                                    </li>
                                    <li class="page-item">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            >5</a
                                        >
                                    </li>
                                    <li class="page-item next">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            ><i
                                                class="tf-icon bx bx-chevron-right"
                                            ></i
                                        ></a>
                                    </li>
                                    <li class="page-item last">
                                        <a
                                            class="page-link"
                                            href="javascript:void(0);"
                                            ><i
                                                class="tf-icon bx bx-chevrons-right"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </nav>
                            <!--/ Basic Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            USUARIOS: [],
        };
    },
    mounted() {
        this.listarUsuarios();
    },

    methods: {
        async listarUsuarios() {
            this.USUARIOS = await (await axios.get("/api/user")).data.users.data;
            console.log(this.USUARIOS);
        },
    },
};
</script>
