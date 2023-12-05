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
                                        <a
                                            href="{{ route('student/add/page') }}"
                                            class="btn btn-primary"
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
                                            <th>Imagen Categoria</th>
                                            <th>Nombre Categoria</th>
                                            <th>Imagen Curso</th>
                                            <th>Nombre del Curso</th>
                                            <th>Estado</th>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade contentmodal"
        id="studentUser"
        tabindex="-1"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div
                    class="modal-header pb-0 border-bottom-0 justify-content-end"
                >
                    <button
                        type="button"
                        class="close-btn"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    >
                        <i class="feather-x-circle"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="delete-wrap text-center">
                            <div class="del-icon">
                                <i class="feather-x-circle"></i>
                            </div>
                            <input
                                type="hidden"
                                name="id"
                                class="e_id"
                                value=""
                            />
                            <input
                                type="hidden"
                                name="avatar"
                                class="e_avatar"
                                value=""
                            />
                            <h2>Sure you want to delete</h2>
                            <div class="submit-section">
                                <button
                                    type="submit"
                                    class="btn btn-success me-2"
                                >
                                    Yes
                                </button>
                                <a
                                    class="btn btn-danger"
                                    data-bs-dismiss="modal"
                                    >No</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style lang=""></style>
