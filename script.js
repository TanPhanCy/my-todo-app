var datepickerDefault = new MtrDatepicker(
	{
	  target: "demo",
	}
);

// function getHumanTime (time) {
// 	let date = new Date(time * 1000);
// 	date = date.toDateString + ' ' + date.getHours() + ':' + date.getMinutes();
// }


// function setTask (location, task) {
//
// 	let listItem 	= document.createElement('li');
// 	let itemInner 	= document.createElement('div');
// 	let title 		= document.createElement('div');
// 	let content		= document.createElement('div');
// 	let infos 		= document.createElement('div');
//
// 	listItem.classList	.add('list-item');
// 	itemInner.classList	.add('item-inner');
// 	title.classList		.add('title');
// 	content.classList	.add('content');
// 	infos.classList		.add('infos');
//
// 	let menuAction 	= document.createElement('ul');
// 	let liDone 		= document.createElement('li');
// 	let liEdit 		= document.createElement('li');
// 	let liDelete 	= document.createElement('li');
//
// 	menuAction.classList.add('menuaction');
//
// 	let aDone 	= document.createElement('a');
// 	let aEdit 	= document.createElement('a');
// 	let aDelete = document.createElement('a');
//
// 	aDone.href   = '#';
// 	aEdit.href 	 = '#';
// 	aDelete.href = '#';
//
// 	aDone.innerHTML 	= 'Done';
// 	aEdit.innerHTML 	= 'Edit';
// 	aDelete.innerHTML 	= 'Delete';
//
// 	liDone	.appendChild(aDone);
// 	liEdit	.appendChild(aEdit);
// 	liDelete.appendChild(aDelete);
//
// 	menuAction.appendChild(liDone);
// 	menuAction.appendChild(liEdit);
// 	menuAction.appendChild(liDelete);
//
// 	title.innerHTML = task.task_title;
// 	content.innerHTML = task.task_description;
// 	infos.innerHTML = 'Started on: ' + getHumanTime(task.task_start_timestamp)
// 						+ ' End Time: ' + getHumanTime(task.task_end_timestamp);
//
// 	itemInner.appendChild(title);
// 	itemInner.appendChild(content);
// 	itemInner.appendChild(infos);
// 	itemInner.appendChild(menuAction);
//
// 	listItem .appendChild(itemInner);
//
// 	document.getElementById(location).appendChild(listItem);
// }
//
//
//
// // CONNECT TO DATABASE
//
// ajax = new XMLHttpRequest();
//
// ajax.onreadystatechange = function () {
//
// 	if (this.readyState == 4 && this.status == 200) {
//
// 		let tasks = JSON.parse(this.responseText);
// 		console.log(tasks);
//
// 		for (i in tasks) {
//
// 			if (tasks[i].task_ended_on_timestamp != '') {
// 				setTask('todo', tasks[i]);
// 			}
// 			else {
//
// 				if(tasks[i].task_ended_on_timestamp < tasks[i].task_end_timestamp) {
// 					setTask('done', tasks[i])
// 				}
// 				else {
// 					setTask('late', tasks[i]);
// 				}
// 			}
// 		}
// 		setEventListener();
// 	}
// 	else {
// 		console.log('Error');
// 	}
// };
//
// ajax.open('GET', 'core/request.php', true);
// ajax.send();


function ClearFields() {
		document.getElementById("add-title").value = "";
    document.getElementById("add-description").value = "";
		document.getElementById("add-start-at").value = "";
};


var btn1 = document.querySelector('#btn1');
var task_list = document.querySelector('.task_list');

var btn2 = document.querySelector('#btn2');
var add_task = document.querySelector('.add_task');
add_task.style.display = "none";

btn1.addEventListener('click',function(){
	task_list.style.display = "none";
	add_task.style.display = "block";
})

btn2.addEventListener('click',function(){
	task_list.style.display = "block";
	add_task.style.display = "none";

})
