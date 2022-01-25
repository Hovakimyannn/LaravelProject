window.onload = function() {
    const buttonElement = document.getElementById("form");

    buttonElement.addEventListener('submit', (e) => {
        e.preventDefault();
        let xmlhttp = new XMLHttpRequest();

        let imageElement = document.getElementsByClassName('.userImage');
        xmlhttp.onreadystatechange = () => {

            if (xmlhttp.status === 200 && xmlhttp.readyState === 4) {
                imageElement.removeAttribute('src');
                imageElement.setAttribute('src', '/');
            }
        }
        xmlhttp.open('post', "home/change_user_image", true);
        xmlhttp.setRequestHeader('Accept', 'application/json');
        xmlhttp.send();
    })
};



