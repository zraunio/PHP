var ft_list;
var cookie = [];

$(document).ready(function () 
{
	$("#new").click(newTask);
	$("ft_list div").click(deleteTask);
	ft_list = $("#ft_list");
	var tmp = document.cookie;
	if (tmp) 
	{
		cookie = JSON.parse(tmp);
		cookie.forEach(function(e)
		{
		addTask(e);
		});
	}
});

$(window).unload(function() 
{
	var task = ft_list.children;
	var newcookie = [];
	for (var i = 0; i < task.length; i++)
		newcookie.unshift(task[i].innerHTML);
	document.cookie = JSON.stringify(newcookie);
})

function newTask(){
	var task = prompt("Fill me up?", '');
	if (task !== '')
	{
		addTask(task)
	}
}

function addTask(task)
{
	ft_list.prepend($('<div>' + task + '</div>').click(deleteTask));
}

function deleteTask()
{
	if (confirm("Delete? Really? You sure?"))
	{
		this.remove();
	}
}
