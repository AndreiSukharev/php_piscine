
let cookie = [];


$(document).ready(function(){
    $('#btn').click(new_task);
    $('#ft_list div').click(remove_task);
    ft_list = $('#ft_list');
    let cookie_to_load = document.cookie;
    if (cookie_to_load) {
        cookie = JSON.parse(cookie_to_load);
        cookie.forEach(function (task) {
            create_task(task);
        });
    }
});

window.onunload = function () {

    let cookie_to_push = [];
    let todo = ft_list.children();
    for (let i = 0; i < todo.length; i++)
        cookie_to_push.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(cookie_to_push);
};


function create_task(task) {

    //create div
    ft_list.prepend($('<div style="background-color: cornflowerblue">' + task + '</div>').click(remove_task));
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

// window.onload = function () {
//
//     let cookie_to_load = document.cookie;
//     if (cookie_to_load) {
//         cookie = JSON.parse(cookie_to_load);
//         cookie.forEach(function (task) {
//             create_task(task);
//         });
//     }
//
// };

