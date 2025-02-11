export default class ResponseRow {

    constructor(parent, currentPage) {
        this.parent = parent;
        this.currentPage = currentPage;
    }

    add({ id, name, deporte, edad, altura, peso }) {
        const div = document.createElement('div');
        div.classList.add('row', 'gap-2', 'mb-2');
    
        // deportista
        const idElement = this.#createElementWithClass('span', 'col-md-1');
        const nameElement = this.#createElementWithClass('span', 'col-md-2');
        const deporteElement = this.#createElementWithClass('span', 'col-md-2');
        const edadElement = this.#createElementWithClass('span', 'col-md-1');
        const alturaElement = this.#createElementWithClass('span', 'col-md-1');
        const pesoElement = this.#createElementWithClass('span', 'col-md-1');
    
        idElement.textContent = id;
        nameElement.textContent = name;
        deporteElement.textContent = deporte;
        edadElement.textContent = edad;
        alturaElement.textContent = altura;
        pesoElement.textContent = peso;
    
        div.append(idElement, nameElement, deporteElement, edadElement, alturaElement, pesoElement);
    
        // deportista
        const buttonView = document.createElement('a');
        let textNode = document.createTextNode('view');
        buttonView.appendChild(textNode);
        buttonView.setAttribute('data-bs-toggle', 'modal');
        buttonView.setAttribute('data-bs-target', '#viewModal');
        buttonView.classList.add('btn', 'btn-primary', 'col-auto');
        buttonView.dataset.id = id;
        buttonView.dataset.name = name;
        buttonView.dataset.deporte = deporte;
        buttonView.dataset.edad = edad;
        buttonView.dataset.altura = altura;
        buttonView.dataset.peso = peso;
        buttonView.dataset.url = "/deportista/" + id;
        buttonView.dataset.method = "get";
    
        // deportista
        const buttonEdit = document.createElement('a');
        textNode = document.createTextNode('edit');
        buttonEdit.appendChild(textNode);
        buttonEdit.setAttribute('data-bs-toggle', 'modal');
        buttonEdit.setAttribute('data-bs-target', '#editModal');
        buttonEdit.classList.add('btn', 'btn-warning', 'col-auto');
        buttonEdit.dataset.id = id;
        buttonEdit.dataset.name = name;
        buttonEdit.dataset.deporte = deporte;
        buttonEdit.dataset.edad = edad;
        buttonEdit.dataset.altura = altura;
        buttonEdit.dataset.peso = peso;
        buttonEdit.dataset.url = "/deportista/" + id;
        buttonEdit.dataset.method = "put";
    
        // deportista
        const buttonDelete = document.createElement('a');
        textNode = document.createTextNode('delete');
        buttonDelete.appendChild(textNode);
        buttonDelete.setAttribute('data-bs-toggle', 'modal');
        buttonDelete.setAttribute('data-bs-target', '#deleteModal');
        buttonDelete.classList.add('btn', 'btn-danger', 'col-auto');
        buttonDelete.dataset.id = id;
        buttonDelete.dataset.name = name;
        buttonDelete.dataset.deporte = deporte;
        buttonDelete.dataset.edad = edad;
        buttonDelete.dataset.altura = altura;
        buttonDelete.dataset.peso = peso;
        buttonDelete.dataset.url = "/deportista/" + id;
        buttonDelete.dataset.method = "delete";
    
        div.appendChild(buttonView);
        div.appendChild(buttonEdit);
        div.appendChild(buttonDelete);
    
        this.parent.appendChild(div);
    }
    

    #createElementWithClass(tag, className) {
        const element = document.createElement(tag);
        element.classList.add(className);
        return element;
    }

    oldadd(data) {
        const div = document.createElement('div');
        const { id, name, deporte, edad, altura, peso } = data;
        let textNode = document.createTextNode(`${id} ${name} ${deporte} ${edad} años ${altura}m ${peso}kg`);
        div.appendChild(textNode);
    
        // deportista
        const buttonView = document.createElement('button');
        textNode = document.createTextNode('view');
        buttonView.appendChild(textNode);
        buttonView.setAttribute('data-bs-toggle', 'modal');
        buttonView.setAttribute('data-bs-target', '#viewModal');
        buttonView.classList.add('btn', 'btn-primary');
        buttonView.dataset.id = id;
        buttonView.dataset.name = name;
        buttonView.dataset.deporte = deporte;
        buttonView.dataset.edad = edad;
        buttonView.dataset.altura = altura;
        buttonView.dataset.peso = peso;
        buttonView.dataset.url = "/deportista/" + id;
        buttonView.dataset.method = "get";
    
        // deportista
        const buttonEdit = document.createElement('button');
        textNode = document.createTextNode('edit');
        buttonEdit.appendChild(textNode);
        buttonEdit.setAttribute('data-bs-toggle', 'modal');
        buttonEdit.setAttribute('data-bs-target', '#editModal');
        buttonEdit.classList.add('btn', 'btn-warning');
        buttonEdit.dataset.id = id;
        buttonEdit.dataset.name = name;
        buttonEdit.dataset.deporte = deporte;
        buttonEdit.dataset.edad = edad;
        buttonEdit.dataset.altura = altura;
        buttonEdit.dataset.peso = peso;
        buttonEdit.dataset.url = "/deportista/" + id;
        buttonEdit.dataset.method = "put";
    
        // deportista
        const buttonDelete = document.createElement('button');
        textNode = document.createTextNode('delete');
        buttonDelete.appendChild(textNode);
        buttonDelete.setAttribute('data-bs-toggle', 'modal');
        buttonDelete.setAttribute('data-bs-target', '#deleteModal');
        buttonDelete.classList.add('btn', 'btn-danger');
        buttonDelete.dataset.id = id;
        buttonDelete.dataset.name = name;
        buttonDelete.dataset.deporte = deporte;
        buttonDelete.dataset.edad = edad;
        buttonDelete.dataset.altura = altura;
        buttonDelete.dataset.peso = peso;
        buttonDelete.dataset.url = "/deportista/" + id;
        buttonDelete.dataset.method = "delete";
    
        div.appendChild(buttonView);
        div.appendChild(buttonEdit);
        div.appendChild(buttonDelete);
    
        this.parent.appendChild(div);
    }
    
}
/* \u0043\u0072\u0065\u0061\u0064\u006f \u0070\u006f\u0072 \u0049\u0073\u006d\u0061\u0065\u006c \u004d\u0061\u006e\u007a\u0061\u006e\u006f */