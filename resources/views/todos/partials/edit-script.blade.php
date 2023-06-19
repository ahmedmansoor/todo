<script>
    window.onload = function() {
        // Getting all edit buttons
        const editButtons = document.querySelectorAll('.edit');
        const modal = document.querySelector('#edit-modal');
        const modalInput = document.querySelector('#edit-input');
        const modalForm = document.querySelector('#edit-form');
        const closeModal = document.querySelector('.modal-close');

        // Loop through all edit buttons
        editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const id = button.getAttribute('data-id');
                // Get the task text
                const task = button.parentElement.parentElement.querySelector('.task-text').textContent.trim();

                // Update modal
                modalInput.value = task;
                modalForm.action = `/todos/${id}`; // Update with your URL
                modal.classList.remove('hidden');

                // Set focus on input field
                modalInput.focus();
            });
        });

        // Close the modal
        closeModal.addEventListener('click', function(event) {
            event.preventDefault();
            modal.classList.add('hidden');
        });
    };
</script>
