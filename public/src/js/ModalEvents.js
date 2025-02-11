import HttpClient from './HttpClient.js';
import ResponseContent from './ResponseContent.js';

export default class ModalEvents {

    constructor(url, csrf) {
        this.url = url;
        this.csrf = csrf;

        this.content = document.getElementById('content');
        this.userContent = document.getElementById('userContent');
        this.pagination = document.getElementById('pagination');
        this.responseContent = new ResponseContent(this.content, this.pagination, this.userContent);

        this.fetchUrl = '';
        this.httpClient = new HttpClient(this.url, this.csrf);

        // deportista
        this.modalCreate = document.getElementById('createModal');
        this.modalCreateButton = document.getElementById('modalCreateButton');
        this.createName = document.getElementById('createName');
        this.createDeporte = document.getElementById('createDeporte');
        this.createEdad = document.getElementById('createEdad');
        this.createAltura = document.getElementById('createAltura');
        this.createPeso = document.getElementById('createPeso');

        this.modalDelete = document.getElementById('deleteModal');
        this.modalDeleteButton = document.getElementById('modalDeleteButton');
        this.deleteName = document.getElementById('deleteName');
        this.deleteDeporte = document.getElementById('deleteDeporte');
        this.deleteEdad = document.getElementById('deleteEdad');
        this.deleteAltura = document.getElementById('deleteAltura');
        this.deletePeso = document.getElementById('deletePeso');


        this.modalEdit = document.getElementById('editModal');
        this.modalEditButton = document.getElementById('modalEditButton');
        this.editId = document.getElementById('editId');
        this.editName = document.getElementById('editName');
        this.editDeporte = document.getElementById('editDeporte');
        this.editEdad = document.getElementById('editEdad');
        this.editAltura = document.getElementById('editAltura');
        this.editPeso = document.getElementById('editPeso');


        this.modalLogin = document.getElementById('loginModal');
        this.modalLoginUserButton = document.getElementById('modalLoginUserButton');
        this.loginEmail = document.getElementById('loginEmail');
        this.loginPassword = document.getElementById('loginPassword');

        this.modalRegister = document.getElementById('registerModal');
        this.modalRegisterUserButton = document.getElementById('modalRegisterUserButton');
        this.registerConfirmPassword = document.getElementById('registerConfirmPassword');
        this.registerEmail = document.getElementById('registerEmail');
        this.registerName = document.getElementById('registerName');
        this.registerPassword = document.getElementById('registerPassword');

        // deportista
        this.modalView = document.getElementById('viewModal');
        this.viewCreatedAt = document.getElementById('viewCreatedAt');
        this.viewId = document.getElementById('viewId');
        this.viewName = document.getElementById('viewName');
        this.viewDeporte = document.getElementById('viewDeporte');
        this.viewEdad = document.getElementById('viewEdad'); 
        this.viewAltura = document.getElementById('viewAltura'); 
        this.viewPeso = document.getElementById('viewPeso'); 
        this.viewUpdatedAt = document.getElementById('viewUpdatedAt');


        this.deportistaError = document.getElementById('deportistaError');
        this.deportistaSuccess = document.getElementById('deportistaSuccess');

        this.logoutButton = document.getElementById('logoutButton');

        this.assignEvents();
    }

    assignEvents() {

        // deportista
        this.modalCreate.addEventListener('show.bs.modal', event => {
            document.getElementById('modalCreateWarning').style.display = 'none';
            this.fetchUrl = event.relatedTarget.dataset.url;
            this.createName.value = '';
            this.createDeporte.value = '';
            this.createEdad.value = '';
            this.createAltura.value = '';
            this.createPeso.value = '';
        });

        this.modalDelete.addEventListener('show.bs.modal', event => {
            document.getElementById('modalDeleteWarning').style.display = 'none';
            this.fetchUrl = event.relatedTarget.dataset.url;
            this.deleteName.value = event.relatedTarget.dataset.name;
            this.deleteDeporte.value = event.relatedTarget.dataset.deporte;
            this.deleteEdad.value = event.relatedTarget.dataset.edad;
            this.deleteAltura.value = event.relatedTarget.dataset.altura;
            this.deletePeso.value = event.relatedTarget.dataset.peso;
        });
        

        this.modalEdit.addEventListener('show.bs.modal', event => {
            document.getElementById('modalEditWarning').style.display = 'none';
            this.fetchUrl = event.relatedTarget.dataset.url;
            this.editId.value = event.relatedTarget.dataset.id;
            this.editName.value = event.relatedTarget.dataset.name;
            this.editDeporte.value = event.relatedTarget.dataset.deporte;
            this.editEdad.value = event.relatedTarget.dataset.edad;
            this.editAltura.value = event.relatedTarget.dataset.altura;
            this.editPeso.value = event.relatedTarget.dataset.peso;
        });
        

        this.modalLogin.addEventListener('show.bs.modal', event => {
            this.fetchUrl = event.relatedTarget.dataset.url;
            this.loginEmail.value = '';
            this.loginPassword.value = '';
        });

        this.modalRegister.addEventListener('show.bs.modal', event => {
            this.fetchUrl = event.relatedTarget.dataset.url;
            this.registerConfirmPassword.value = '';
            this.registerEmail.value = '';
            this.registerName.value = '';
            this.registerPassword.value = '';
        });

        // deportista
        this.modalView.addEventListener('show.bs.modal', event => {
            document.getElementById('modalViewWarning').style.display = 'none';
            this.viewCreatedAt.value = '';
            this.viewId.value = event.relatedTarget.dataset.id;
            this.viewName.value = event.relatedTarget.dataset.name;
            this.viewDeporte.value = event.relatedTarget.dataset.deporte;
            this.viewEdad.value = event.relatedTarget.dataset.edad; 
            this.viewAltura.value = event.relatedTarget.dataset.altura; 
            this.viewPeso.value = event.relatedTarget.dataset.peso; 
            this.viewUpdatedAt.value = '';    
            const url = event.relatedTarget.dataset.url;
            this.httpClient.get(
                url,
                {},
                data => this.responseShow(data)
            );
        });
        

        // deportista
        this.modalCreateButton.addEventListener('click', event => {
            this.httpClient.post(
                this.fetchUrl,
                {
                    name: this.createName.value,
                    deporte: this.createDeporte.value,
                    edad: this.createEdad.value,
                    altura: this.createAltura.value,
                    peso: this.createPeso.value,
                    page: this.responseContent.currentPage
                },
                data => this.responseCreate(data)
            );
        });
        
        // Evento para eliminar un deportista
        this.modalDeleteButton.addEventListener('click', event => {
            this.httpClient.delete(
                this.fetchUrl,
                {
                    page: this.responseContent.currentPage
                },
                data => this.responseDelete(data)
            );
        });
        

        // Evento para editar un deportista
        this.modalEditButton.addEventListener('click', event => {
            this.httpClient.put(
                this.fetchUrl,
                {
                    id: this.editId.value,
                    name: this.editName.value,
                    deporte: this.editDeporte.value,
                    edad: this.editEdad.value,
                    altura: this.editAltura.value,
                    peso: this.editPeso.value,
                    page: this.responseContent.currentPage
                },
                data => this.responseEdit(data)
            );
        });
        

        this.modalLoginUserButton.addEventListener('click', event => {
            this.httpClient.post(
                this.fetchUrl,
                {
                    email: this.loginEmail.value,
                    password: this.loginPassword.value,
                },
                data => this.responseLogin(data)
            );
        });

        this.modalRegisterUserButton.addEventListener('click', event => {
            this.httpClient.post(
                this.fetchUrl,
                {
                    name: this.registerName.value,
                    email: this.registerEmail.value,
                    password: this.registerPassword.value,
                    password_confirmation: this.registerConfirmPassword.value
                },
                data => this.responseRegister(data)
            );
        });

        /*this.logoutButton.addEventListener('click', event => {
            console.log('adios');
        });*/
    }

    formattedDate(date) {
        date = new Date(date);
        return `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')}`;
    }

    responseCommonContent(data) {
        this.responseContent.setContent(data);
        let link = document.getElementById('logoutLink');
        if(link) {
            link.addEventListener('click', event => {
                this.httpClient.post(
                    link.dataset.url,
                    {},
                    data => console.log(data) //this.responseCommonContent(data)
                );
            });
        }
    }

    responseCreate(data) {
        if(data.result) {
            this.deportistaSuccess.style.display = 'block';
            bootstrap.Modal.getInstance(this.modalCreate).hide();
            this.responseCommonContent(data);
            setTimeout(() => {
                this.deportistaSuccess.style.display= 'none';
            }, 4000);
        } else {
            document.getElementById('modalCreateWarning').style.display = 'block';
        }
    }

    responseDelete(data) {
        if(data.result) {
            this.deportistaSuccess.style.display = 'block';
            bootstrap.Modal.getInstance(this.modalDelete).hide();
            this.responseCommonContent(data);
            setTimeout(() => {
                this.deportistaSuccess.style.display= 'none';
            }, 4000);
        } else {
            document.getElementById('modalDeleteWarning').style.display = 'block';
        }
    }

    responseEdit(data) {
        if(data.result) {
            this.deportistaSuccess.style.display = 'block';
            bootstrap.Modal.getInstance(this.modalEdit).hide();
            this.responseCommonContent(data);
            setTimeout(() => {
                this.deportistaSuccess.style.display= 'none';
            }, 4000);
        } else {
            document.getElementById('modalEditWarning').style.display = 'block';
        }
    }

    responseLogin(data) {
        data = {
            name: 'Juan'
        }
        console.log('login ' + data);
        this.responseContent.setUserContent(data);
    }

    responseRegister(data) {
        console.log('register ' + data);
    }

    // deportista
    responseShow(data) {
        const { id, name, deporte, edad, altura, peso, created_at, updated_at } = data.deportista;
        this.viewCreatedAt.value = this.formattedDate(created_at);
        this.viewId.value = id;
        this.viewName.value = name;
        this.viewDeporte.value = deporte;
        this.viewEdad.value = edad;
        this.viewAltura.value = altura;
        this.viewPeso.value = peso;
        this.viewUpdatedAt.value = this.formattedDate(updated_at);
    }
    

    // deportista
    init() {
        this.httpClient.get(
            '/deportista',
            {},
            (data) => {
                this.responseCommonContent(data);
            }
        );
    }
}