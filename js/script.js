
        // Function to display messages dynamically
        function showMessage(message, isSuccess) {
            const messageDiv = document.getElementById('message');
            messageDiv.textContent = message;
            messageDiv.style.color = isSuccess ? 'green' : 'red'; // Green for success, red for errors
            messageDiv.style.fontWeight = 'bold';
        }

        // Signup form validation
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const nameInput = document.getElementById('name').value.trim();
            const emailInput = document.getElementById('email').value.trim();
            const passwordInput = document.getElementById('password').value.trim();
            const confirmPasswordInput = document.getElementById('confirm-password').value.trim();

            // Regular expressions for validation
            const nameRegex = /^[A-Za-z\s]{2,}$/; // Only letters and spaces, at least 2 characters
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Validates a standard email format
            const passwordRegex = /^(?=.[A-Za-z])(?=.\d)[A-Za-z\d]{8,}$/; // At least 8 characters, 1 letter, 1 number

            let isValid = true;

            // Validate full name
            if (!nameRegex.test(nameInput)) {
                showMessage('Full name must contain at least 2 characters with only letters and spaces.', false);
                isValid = false;
            }

            // Validate email
            if (!emailRegex.test(emailInput)) {
                showMessage('Invalid email address.', false);
                isValid = false;
            }

            // Validate password
            if (!passwordRegex.test(passwordInput)) {
                showMessage('Password must be at least 8 characters long with both letters and numbers.', false);
                isValid = false;
            }

            // Validate confirm password
            if (passwordInput !== confirmPasswordInput) {
                showMessage('Passwords do not match.', false);
                isValid = false;
            }

            // If all validations pass
            if (isValid) {
                showMessage('Signup successful!', true);
                // You can submit the form here if needed
                // this.submit(); 
            }
            
        });
    