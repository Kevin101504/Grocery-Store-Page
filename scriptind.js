// JavaScript code to handle review submission and display
document.addEventListener('DOMContentLoaded', function() {
    const reviewForm = document.getElementById('review-form');
    const reviewList = document.getElementById('review-list');

    reviewForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const rating = document.getElementById('rating').value;
        const comment = document.getElementById('comment').value;

        // Create review HTML structure
        const reviewHTML = `
            <div class="review">
                <p><strong>${username}</strong> - Rated ${rating} stars</p>
                <p>${comment}</p>
            </div>
        `;

        // Append new review to review list
        reviewList.innerHTML += reviewHTML;

        // Clear form fields after submission
        reviewForm.reset();
    });
});
