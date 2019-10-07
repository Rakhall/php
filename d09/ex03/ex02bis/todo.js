const say = console.log;
const element = $("#new");
let n_task = 0;
const firstRead = () => {
    var container = document.getElementById("ft_list");
    container.innerHTML = decodeURIComponent(getCookie('todo'));
}
const createTask = () => {
    var container = $("#ft_list");
    let value = prompt("Stock the task for later !");
    if (!value.length === 0 || value.trim()) {
        container.prepend("<div onclick=deleteTask(this)>" + value + "</div>");
        var c = $("#ft_list").html();
        setCookie("todo", encodeURIComponent(c), 1);
        n_task++;
    }
};
const deleteTask = (task) => {
    if (confirm("Remove the selected task ?")) {
        $(task).remove();
        n_task--;
        var c = $("#ft_list").html();
        setCookie("todo", encodeURIComponent(c), 1);
    }
};
const setCookie = (name, value, days) => {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + (value || "") + "; " + expires + '; path=/';
};
const getCookie = (name) => {
    var cname = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        say(c);
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(cname) == 0) return c.substring(cname.length, c.length);
    }
    return "";
};
element.on("click", createTask);