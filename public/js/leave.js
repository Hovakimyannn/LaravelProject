function removeUser(userid) {
    const user = document.getElementById(userid);
    XMLHttp = new XMLHttpRequest();
    XMLHttp.onreadystatechange = function () {
        if (XMLHttp.status === 200 && XMLHttp.readyState === 4) {
            if (user) {
                user.parentNode.removeChild(user);
            }

        }
    }
    XMLHttp.open('post', '/admin/remove',true);
    XMLHttp.setRequestHeader('Accept', 'text/plain');
    XMLHttp.send(userid);
}
