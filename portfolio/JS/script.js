// script.js
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('myModal');
    const modalImg = document.getElementById("img01");
    const images = document.querySelectorAll('.image-item img');
    const closeButton = document.querySelector('.close');

    images.forEach(function(image) {
        image.addEventListener('click', function() {
            modal.style.display = "block";
            modalImg.src = this.src;
        });
    });

    closeButton.addEventListener('click', function() {
        modal.style.display = "none";
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
