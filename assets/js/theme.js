var themeButton = document.getElementById('themeButton');
var themeStyle = document.getElementById('themeStyle');
var theme = localStorage.getItem('theme') || 'light';
themeStyle.href = 'assets/css/' + theme + '.css';
themeButton.onclick = function () {
    theme = theme === 'light' ? 'dark' : 'light';
    themeStyle.href = 'assets/css/' + theme + '.css';
    localStorage.setItem('theme', theme);
};