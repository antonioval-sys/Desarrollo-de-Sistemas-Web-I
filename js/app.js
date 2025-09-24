var customAlert = new CustomAlert();
function CustomAlert() {
    this.render = function () {
        let popUpBox = document.getElementById('popUpBox');
        let popUpOverlay = document.getElementById('popUpOverlay');
        popUpBox.style.display = "block";
        popUpOverlay.style.display = "block";

        document.getElementById('closeModal').innerHTML = `<div class="modal-buttons">
        <button type="button" onclick="customAlert.ok()">¡Si quiero!</button>
        <button type="button" onclick="customAlert.cancel()">No quiero</button>
        </div>`;
    }

    this.ok = function () {
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
         window.location.href = "index.php";
    }
     this.cancel = function () {
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}