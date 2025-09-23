var customAlert = new CustomAlert();
function CustomAlert() {
    this.render = function () {
        let popUpBox = document.getElementById('popUpBox');
        let popUpOverlay = document.getElementById('popUpOverlay');
        popUpBox.style.display = "block";
        popUpOverlay.style.display = "block";

        document.getElementById('closeModal').innerHTML = `
            <button type="button" onclick="customAlert.ok()">¡Si quiero!</button>
        `;
    }

    this.ok = function () {
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
        // Si quieres redirigir a index.html, descomenta la siguiente línea:
        // window.location.href = "index.html";
    }
}