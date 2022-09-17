// メニュートグル
document.querySelector('.menu-btn').addEventListener('click', function () {
    document.querySelector('.menu').classList.toggle('is-active');
});

// メニュークリック後非表示
document.querySelectorAll('.item').forEach(function (menu) {
    menu.addEventListener('click', function () {
        document.querySelector('.menu').classList.remove('is-active');
    });
});