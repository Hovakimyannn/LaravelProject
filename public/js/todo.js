const inputElement = document.querySelector("input[type=file]");
const buttonElement = document.getElementById("send");
buttonElement.addEventListener('click', function (event) {
        event.preventDefault();
        getBase64(inputElement.files[0]);
    }
)

function getBase64(file) {
    if (file) {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        let result;
        reader.onload = function () {
            request(reader.result, file.name);
        };
        reader.onerror = function (error) {
            result = 'Error: ' + error;
        };
        return result;
    }
}

function request(file, filename) {
    let XMLHttp = new XMLHttpRequest();
    XMLHttp.onreadystatechange = function () {
        if (XMLHttp.status === 200 && XMLHttp.readyState === 4) {
            document.getElementById('userImage').src = "storage/" + XMLHttp.response;
            document.getElementById('contextImage').src = "storage/" + XMLHttp.response;
        }
    }
    XMLHttp.open('post', "/home/change_user_image", true);
    //XMLHttp.setRequestHeader('XSRF-TOKEN',getCookie('XSRF-TOKEN'));
    XMLHttp.setRequestHeader('Accept', 'text/plain');
    XMLHttp.send(filename + ',' + file);
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}














