function adminMessage() {
    let place = document.getElementById('place-for-message');
    place.innerHTML =`<div class='message-border' id="close">
                    <div class='top-border'>
                        <button class='close-button fa fa-close' onClick="hiddenMessage()">
                        </button>
                    </div>
                    <div class='message-content'>
                        <p class='message-text'>
                            Send message: <p id='message' class="message-text"></p>
                        </p>
                    </div>
                    <div class="message-area">
                        <form action="" method="post">
                            <input type="text" class="message-text-area">
                                <button id="messageForSend" class="fa fa-location-arrow send-button"></button>
                        </form>
                    </div>
                </div>`;

    const inputElement = document.querySelector("input[type=text]");
    let buttonElement = document.getElementById('messageForSend');
    let messageElement = document.getElementById('message');
    buttonElement.addEventListener('click',function(event) {
        event.preventDefault();
        let message = inputElement.value;
        let XMLHttp = new XMLHttpRequest();
        XMLHttp.onreadystatechange = function () {
            if (XMLHttp.status === 200 && XMLHttp.readyState === 4) {
                messageElement.innerText = this.responseText;
            }
        }
        XMLHttp.open("POST", 'admin/message', true);
        XMLHttp.setRequestHeader('Accept', 'text/plain');
        XMLHttp.send(message);
    })
}

function hiddenMessage() {
    let messageElement = document.getElementById('close');
    messageElement.remove();
}


