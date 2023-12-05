<template lang="">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Listado de Cursos</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search by ID ..."
                            />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search by Name ..."
                            />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search by Phone ..."
                            />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">CURSOS</h3>
                                    </div>
                                    <div
                                        class="col-auto text-end float-end ms-auto download-grp"
                                    >
                                        <a href="" class="btn btn-primary"
                                            ><i class="fas fa-plus"> </i> Nuevo
                                            Curso</a
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 table-striped"
                                >
                                    <thead class="student-thread">
                                        <tr>
                                            <th>
                                                <div
                                                    class="form-check check-tables"
                                                >
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        value="something"
                                                    />
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Nombre Categoria</th>
                                            <th>Nombre del Curso</th>
                                            <th>Estado</th>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr
                                            v-for="item in CATEGORIAS"
                                            :key="item.id"
                                        >
                                            <td>
                                                <div
                                                    class="form-check check-tables"
                                                >
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        value="something"
                                                    />
                                                </div>
                                            </td>
                                            <td>STD{{ ++item.id }}</td>
                                            <td hidden class="id"></td>

                                            <td>{{ item.nombre_categoria }}</td>
                                            <td>
                                                {{
                                                    item.curso_id.nombre_cursos
                                                }}
                                            </td>
                                            <td>
                                                <span
                                                    class="text-success"
                                                    v-if="item.status == 1"
                                                    >Activo</span
                                                >
                                                <span
                                                    class="text-danger"
                                                    v-if="item.status == 2"
                                                    >Des-Activo</span
                                                >
                                            </td>

                                            <td class="text-end">
                                                <div class="actions">
                                                    <a
                                                        href=""
                                                        class="btn btn-sm bg-danger-light"
                                                    >
                                                        <i
                                                            class="feather-edit"
                                                        ></i>
                                                    </a>
                                                    <a
                                                        class="btn btn-sm bg-danger-light student_delete"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#studentUser"
                                                    >
                                                        <i
                                                            class="feather-trash-2 me-1"
                                                        ></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
            CATEGORIAS: [],
        };
    },

    mounted() {
        this.listarCategorias();
    },

    methods: {
        async listarCategorias() {
            this.CATEGORIAS = await (
                await axios.get("/api/categorias")
            ).data.categorias;
            console.log(this.CATEGORIAS);
        },
    },
};
</script>
