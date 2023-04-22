let modifyButton = document.querySelectorAll("#modify");
let userDatas = document.querySelectorAll('.info-item')

modifyButton.forEach(e => {
    e.addEventListener('click', function() {
        console.log(e)
    })
});