function edit(id_task, ds_task) {

    // create an edition form
    let form = document.createElement('form');

    let currentPage = getCurrentPage();

    form.action = currentPage + '.php?page=' + currentPage + '&action=update';
    form.method = 'post';
    form.className = 'row';

    // create an input for text entry
    let inputTask = document.createElement('input');
    inputTask.type = 'text';
    inputTask.name = 'ds_task';
    inputTask.className = 'col-9 form-control';
    inputTask.value = ds_task;

    // create an input hidden to keep task id
    let inputId = document.createElement('input')
    inputId.type = 'hidden';
    inputId.name = 'id_task';
    inputId.value = id_task;

    // create a button to submit the form
    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-3 btn btn-info';
    button.innerHTML = 'Update';

    // include inputTask in the form
    form.appendChild(inputTask);

    // include button in the form
    form.appendChild(button);

    // include inputId in the form
    form.appendChild(inputId);

    // select the task div
    let task = document.getElementById('task_' + id_task);

    // clear the task text to include the form
    task.innerHTML = '';

    // include the form on the page
    task.insertBefore(form, task[0]);

}


function remove(id_task) {

    let currentPage = getCurrentPage();
    location.href = currentPage + '.php?page=' + currentPage + '&action=remove&id_task=' + id_task;

}


function accomplished(id_task) {

    let currentPage = getCurrentPage();
    location.href = currentPage + '.php?page=' + currentPage + '&action=accomplished&id_task=' + id_task;

}

function getCurrentPage() {

    let url = window.location.href;
    let page;

    if(url.lastIndexOf('/') + 1 === window.location.href.length){
        page = 'index';
    } else {
        page = url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.'));
    }

    return page;

}