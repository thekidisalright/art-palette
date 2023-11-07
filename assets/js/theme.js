var themeButton = document.getElementById('themeButton');
var themeStyle = document.getElementById('themeStyle');
var theme = localStorage.getItem('theme') || 'light';
themeStyle.href = 'assets/css/' + theme + '.css';
themeButton.onclick = function () {
    theme = theme === 'light' ? 'dark' : 'light';
    themeStyle.href = 'assets/css/' + theme + '.css';
    localStorage.setItem('theme', theme);
    window.location.reload();
};

if (theme === 'dark') {
    themeButton.innerHTML = '<i class="fas fa-sun"></i>';
} else {
    themeButton.innerHTML = '<i class="fas fa-moon"></i>';
}