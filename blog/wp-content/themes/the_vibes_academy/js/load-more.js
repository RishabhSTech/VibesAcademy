jQuery(document).ready(function($) {
    let paged = 2; // Start with the second page

    $('#load-more-btn').on('click', function(e) {
        e.preventDefault();

        const button = $(this);
        button.text('Loading...'); // Show loading state

        $.ajax({
            url: load_more_params.ajaxurl,
            type: 'POST',
            data: {
                action: 'load_more',
                nonce: load_more_params.nonce,
                paged: paged,
            },
            success: function(response) {
                if (response.trim() === '<p>No more posts found.</p>') {
                    button.hide(); // Hide button if no more posts
                } else {
                    $('#blog-container').append(response); // Append new posts
                    paged++; // Increment page for the next request
                }
                button.text('Load More'); // Reset button text
            },
            error: function() {
                button.text('Load More'); // Reset button text on error
            }
        });
    });
});
