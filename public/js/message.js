function message() {
    let XMLHttp = new XMLHttpRequest();
    let newMessageElement = document.getElementById('new-message');
    let sms = document.getElementById('admin-message').value;
    XMLHttp.onreadystatechange = function () {
        if (XMLHttp.status === 200 && XMLHttp.readyState === 4) {
             {
                 let response;
                 if (XMLHttp.response) {
                     response = XMLHttp.response;
                     newMessageElement.style.color = 'red';
                 } else {
                     response = sms;
                 }
                 newMessageElement.addEventListener('click', function (event) {
                     event.preventDefault();
                     newMessageElement.style.color = 'black';
                     updateDisplay(response);
                 });

            }
        }
    }
    XMLHttp.open("POST", '/message', true);
    XMLHttp.setRequestHeader('Accept', 'text/plain');
    XMLHttp.send(sms);
}

function hiddenMessage() {
    let messageElement = document.getElementById('close');
    messageElement.remove();
}

function updateDisplay(response) {
    let place = document.getElementById('place-for-message');
    document.getElementById('admin-message').value = response;
    place.innerHTML =
        `<div class='message-border' id="close">
                        <div class='top-border'>
                            <button class='close-button fa fa-close' onclick="hiddenMessage()">
                            </button>
                        </div>
                        <div class='message-content'>
                            <p id='message' class='message-text'>Admin: ` + response + `</p>
                        </div>
                    </div>`;
}

window.onload = function () {
   setInterval(message, 5000);
}
