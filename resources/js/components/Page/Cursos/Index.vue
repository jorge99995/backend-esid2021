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

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <Toolbar class="mb-4">
                            <template #start>
                                <Button
                                    label="NUEVO CURSO"
                                    icon="pi pi-plus"
                                    severity="success"
                                    class="mr-2"
                                    @click="openNew"
                                />
                            </template>
                            <template #end>
                                <FileUpload
                                    mode="basic"
                                    accept="image/*"
                                    :maxFileSize="1000000"
                                    label="Import"
                                    chooseLabel="Import"
                                    class="mr-2 inline-block"
                                />
                                <Button
                                    label="Export"
                                    icon="pi pi-upload"
                                    severity="help"
                                />
                            </template>
                        </Toolbar>
                        <div class="card-body">
                            <DataTable
                                :value="CURSOS"
                                tableStyle="min-width: 50rem"
                                paginator
                                :rows="5"
                                :rowsPerPageOptions="[5, 10, 20, 50]"
                            >
                                <template #header>
                                    <div
                                        class="flex flex-wrap gap-2 align-items-center justify-content-between"
                                    >
                                        <h4 class="m-2">Gestión de Cursos</h4>
                                    </div>
                                </template>
                                <Column
                                    field="index"
                                    header="ID"
                                    sortable
                                    style="width: 25%"
                                ></Column>
                                <Column
                                    field="nombre_categoria"
                                    header="Nombre de la categoria"
                                    sortable
                                    style="width: 25%"
                                ></Column>
                                <Column
                                    field="nombre_curso"
                                    header="Nombre del curso"
                                    sortable
                                    style="width: 25%"
                                ></Column>
                                <Column
                                    field="quantity"
                                    header="Acciones"
                                ></Column>
                            </DataTable>
                            <Dialog
                                v-model:visible="productDialog"
                                :style="{ width: '450px' }"
                                header="CREACION DE CURSOS"
                                :modal="true"
                                class="p-fluid"
                            >
                                <img class="block m-auto pb-3" />
                                <div class="field">
                                    <label for="Nombre de la categoria"
                                        >Nombre de la categoria</label
                                    >
                                    <InputText
                                        id="name"
                                        required="true"
                                        autofocus
                                    />
                                </div>

                                <div class="field">
                                    <label for="Nombre de la categoria"
                                        >Nombre del Curso</label
                                    >
                                    <InputText
                                        id="name"
                                        required="true"
                                        autofocus
                                    />
                                </div>

                                <template #footer>
                                    <Button
                                        label="Cancel"
                                        icon="pi pi-times"
                                        text
                                    />
                                    <Button
                                        label="Save"
                                        icon="pi pi-check"
                                        text
                                    />
                                </template>
                            </Dialog>
                            <!-- <div class="table-responsive">
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
                                            <th>Nombre Curso</th>
                                            <th>Nombre Categoria</th>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr
                                            v-for="item in CURSOS"
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
                                            <td>STD{{ ++item.index }}</td>
                                            <td hidden class="id"></td>

                                            <td>{{ item.nombre_categoria }}</td>
                                            <td>{{ item.nombre_curso }}</td>
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
                            </div> -->
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
            CURSOS: [],
            productDialog: false,
        };
    },

    mounted() {
        this.listarCategorias();
    },

    methods: {
        async listarCategorias() {
            this.CURSOS = await (await axios.get("/api/cursos")).data;
            console.log(this.CURSOS);
        },

        openNew() {
            this.productDialog = true;
        },

        async crearCurso() {},
    },
};
</script>
