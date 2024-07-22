var addTaskButton = document.getElementById('add-task');
var taskInput = document.getElementById('task-input');
var taskList = document.getElementById('task-list');

addTaskButton.addEventListener('click', taskFunction)

function taskFunction(e){
    var taskName = taskInput.value.trim();
    if(taskName){
        var taskItem = document.createElement('div');
        taskItem.classList.add('task-list');

        var text = document.createElement('span');
        text.textContent = taskName;
        taskItem.appendChild(text);

        var checkButton = document.createElement('button');
        checkButton.classList.add('check-button');
        checkButton.innerHTML = '&#10003;'; // Check mark symbol
        checkButton.addEventListener('click', function() {
            taskItem.classList.toggle('completed');
        });

        taskItem.appendChild(checkButton);
                
        taskList.appendChild(taskItem);
        taskInput.value = ''; 
    }
}