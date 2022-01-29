function message() {
    let XMLHttp = new XMLHttpRequest();
    let place = document.getElementById('place-for-message');
    XMLHttp.onreadystatechange = function () {
        if (XMLHttp.status === 200 && XMLHttp.readyState === 4) {
            if (XMLHttp.responseText) {
                place.innerHTML =
                    `<div class='message-border' id="close">
                        <div class='top-border'>
                            <button class='close-button fa fa-close' onclick="hiddenMessage()">
                            </button>
                        </div>
                        <div class='message-content'>
                            <p id='message' class='message-text'>Admin: ` + XMLHttp.responseText + `</p>
                        </div>
                    </div>`;
            }
        }
    }
    XMLHttp.open("POST", '/message', true);
    XMLHttp.setRequestHeader('Accept', 'text/plain')
    XMLHttp.send();
}

function hiddenMessage() {
    let messageElement = document.getElementById('close');
    messageElement.remove();
}
