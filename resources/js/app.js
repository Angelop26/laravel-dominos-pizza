import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

const buttons = document.querySelectorAll(".ms_btn_cancel");

if (buttons.length > 0) {
    buttons.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const deleteModal = new bootstrap.Modal(
                document.getElementById('delete-modal')
            );
            const pizzaTitle = button.getAttribute("data-pizza-title");
            
            document.getElementById("pizza-title").innerText = capitalizeFirstLetter(pizzaTitle);
             
            deleteModal.show();

            document.querySelector(".ms_btn").addEventListener("click", function() {
                button.parentElement.submit();
            })
        });
    });
}