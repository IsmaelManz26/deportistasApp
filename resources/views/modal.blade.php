{{-- CREATE MODAL --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createModalLabel">Crear Deportista</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createForm">
                    <div class="mb-3">
                        <label for="createName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="createName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="createDeporte" class="form-label">Deporte</label>
                        <input type="text" class="form-control" id="createDeporte" name="deporte">
                    </div>
                    <div class="mb-3">
                        <label for="createEdad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="createEdad" name="edad" min="0" max="100">
                    </div>
                    <div class="mb-3">
                        <label for="createAltura" class="form-label">Altura (m)</label>
                        <input type="number" step="0.01" class="form-control" id="createAltura" name="altura" min="0" max="3">
                    </div>
                    <div class="mb-3">
                        <label for="createPeso" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.1" class="form-control" id="createPeso" name="peso" min="0" max="300">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalCreateWarning">Ocurrió un error. El deportista no ha sido creado.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="modalCreateButton">Crear</button>
            </div>
        </div>
    </div>
</div>
{{-- EDIT MODAL --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Editar Deportista</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="mb-3">
                        <label for="editId" class="form-label">Id</label>
                        <input disabled readonly type="text" class="form-control" id="editId">
                    </div>
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="editDeporte" class="form-label">Deporte</label>
                        <input type="text" class="form-control" id="editDeporte" name="deporte">
                    </div>
                    <div class="mb-3">
                        <label for="editEdad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="editEdad" name="edad">
                    </div>
                    <div class="mb-3">
                        <label for="editAltura" class="form-label">Altura</label>
                        <input type="number" class="form-control" id="editAltura" name="altura">
                    </div>
                    <div class="mb-3">
                        <label for="editPeso" class="form-label">Peso</label>
                        <input type="number" class="form-control" id="editPeso" name="peso">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalEditWarning">Ha ocurrido un error. El deportista no ha sido editado.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="modalEditButton">Editar</button>
            </div>
        </div>
    </div>
</div>
{{-- VIEW MODAL --}}
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewModalLabel">View Deportista</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viewForm">
                    <div class="mb-3">
                        <label for="viewId" class="form-label">Id</label>
                        <input disabled readonly type="text" class="form-control" id="viewId">
                    </div>
                    <div class="mb-3">
                        <label for="viewName" class="form-label">Name</label>
                        <input disabled readonly type="text" class="form-control" id="viewName">
                    </div>
                    <div class="mb-3">
                        <label for="viewDeporte" class="form-label">Deporte</label>
                        <input disabled readonly type="text" class="form-control" id="viewDeporte">
                    </div>
                    <div class="mb-3">
                        <label for="viewEdad" class="form-label">Edad</label>
                        <input disabled readonly type="number" class="form-control" id="viewEdad">
                    </div>
                    <div class="mb-3">
                        <label for="viewAltura" class="form-label">Altura (m)</label>
                        <input disabled readonly type="number" class="form-control" id="viewAltura" step="0.01">
                    </div>
                    <div class="mb-3">
                        <label for="viewPeso" class="form-label">Peso (kg)</label>
                        <input disabled readonly type="number" class="form-control" id="viewPeso" step="0.1">
                    </div>
                    <div class="mb-3">
                        <label for="viewCreatedAt" class="form-label">Created at</label>
                        <input disabled readonly type="datetime" class="form-control" id="viewCreatedAt">
                    </div>
                    <div class="mb-3">
                        <label for="viewUpdatedAt" class="form-label">Updated at</label>
                        <input disabled readonly type="datetime" class="form-control" id="viewUpdatedAt">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalViewWarning">An error occurred. Deportista not found.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- DELETE MODAL --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm">
                    <div class="mb-3">
                        <label for="deleteName" class="form-label">Name</label>
                        <input readonly disabled type="text" class="form-control" id="deleteName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="deleteDeporte" class="form-label">Deporte</label>
                        <input readonly disabled type="text" class="form-control" id="deleteDeporte" name="deporte">
                    </div>
                    <div class="mb-3">
                        <label for="deleteEdad" class="form-label">Edad</label>
                        <input readonly disabled type="number" class="form-control" id="deleteEdad" name="edad">
                    </div>
                    <div class="mb-3">
                        <label for="deleteAltura" class="form-label">Altura</label>
                        <input readonly disabled type="number" class="form-control" id="deleteAltura" name="altura">
                    </div>
                    <div class="mb-3">
                        <label for="deletePeso" class="form-label">Peso</label>
                        <input readonly disabled type="number" class="form-control" id="deletePeso" name="peso">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalDeleteWarning">An error occurred. The deportista is still available.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="modalDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

{{-- LOGIN MODAL --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalViewWarning">An error ocurred. User not created.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="modalLoginUserButton">Login</button>
            </div>
        </div>
    </div>
</div>
{{-- REGISTER MODAL --}}
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm">
                    <div class="mb-3">
                        <label for="registerName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="registerName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="registerEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="registerConfirmPassword" name="password_confirmation">
                    </div>
                </form>
            </div>
            <div class="alert alert-warning" role="alert" id="modalViewWarning">An error ocurred. User not created.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="modalRegisterUserButton">Register</button>
            </div>
        </div>
    </div>
</div>