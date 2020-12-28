var ft_list;
var cookie = [];

window.onload = function () 
{
	document.querySelector("#new").addEventListener("click", newTask);
	ft_list = document.querySelector("#ft_list");
	var tmp = document.cookie;
	if (tmp) 
	{
		cookie = JSON.parse(tmp);
		cookie.forEach(function(e)
		{
		addTask(e);
		});
	}
};

window.onunload = function() 
{
	var task = ft_list.children;
	var newcookie = [];
	for (var i = 0; i < task.length; i++)
		newcookie.unshift(task[i].innerHTML);
	document.cookie = JSON.stringify(newcookie);
};

function newTask()
{
	var task = prompt("Fill me up?", '');
	if (task !== '')
	{
		addTask(task)
	}
}

function addTask(task)
{
	var div = document.createElement("div");
	div.innerHTML = task;
	div.addEventListener("click", deleteTask);
	ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteTask()
{
	if (confirm("Delete? Really? You sure?"))
	{
		this.parentElement.removeChild(this);
	}
}
