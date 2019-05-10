
let cookie = [];
let count_colour = 0;


function create_task(task) {

    //create div
    let div = document.createElement("div", );
    if (count_colour % 2)
        div.setAttribute("style", "background-color:azure; font-size:2em;");
    else
        div.setAttribute("style", "background-color:cornflowerblue; font-size:2em;");
    let text = document.createTextNode(task);
    div.appendChild(text);
    div.addEventListener("click", remove_task);
    count_colour++;

    // append to document
    let div_main = document.getElementById("ft_list");
    div_main.appendChild(div);
}

function new_task() {

    let task = prompt("Add new task?", "");
    if (!task)
        return;
    create_task(task);

}

function remove_task() {

    let res =confirm("Do you want to delete this task?");
    if (res)
        this.remove();
}

window.onload = function () {

    let cookie_to_load = document.cookie;
    if (cookie_to_load) {
        cookie = JSON.parse(cookie_to_load);
        cookie.forEach(function (task) {
            create_task(task);
        });
    }

};

window.onunload = function () {

    let cookie_to_push = [];
    let todo = document.querySelector("#ft_list").children;
    for (let i = 0; i < todo.length; i++)
        cookie_to_push.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(cookie_to_push);
};