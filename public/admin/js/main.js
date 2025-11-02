const a = document.getElementById('showPostSettings');
const div = document.getElementById('collapsePostPages');

const user = document.getElementById('showUserSettings');
const userdiv = document.getElementById('collapseUserPages');


a.onclick = function () {
    this.className === "nav-link collapsed" ? a.classList.remove('collapsed') : a.classList.add('collapsed');
    div.className === "collapse" ? div.classList.add('show') : div.classList.remove('show');
};

user.onclick = function () {
    this.className === "nav-link collapsed" ? user.classList.remove('collapsed') : user.classList.add('collapsed');
    userdiv.className === "collapse" ? userdiv.classList.add('show') : userdiv.classList.remove('show');
};
