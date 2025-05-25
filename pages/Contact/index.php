<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact Luca Loaves Bakery - Get in touch with us for any inquiries about our fresh baked goods and services">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/footerStyles.css">
  <link rel="stylesheet" href="../../css/contactStyles.css">
  <link rel="stylesheet" href="../../css/headerStyles.css">
  <link rel="stylesheet" href="../../css/modalStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Contact Us - Luca Loaves Bakery</title>
</head>

<body>
  <a href="#main-content" class="skip-link">Skip to main content</a>
  
  <?php include '../../Components/Header/index.php'; ?>
  <?php include '../../Components/MenuModal/index.php'; ?>

  <main id="main-content" role="main">
    <div class="container">
      <h1 tabindex="-1">Contact Us</h1>

      <div class="content-container">
        <div class="form-container">
          <p>
            Have a question or feedback? We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.
          </p>
          <form id="contactForm" onsubmit="handleSubmit(event)" role="form" aria-label="Contact form">
            <div class="form-group">
              <label for="name" id="name-label">Name</label>
              <input 
                type="text" 
                id="name" 
                name="name" 
                required 
                aria-required="true"
                aria-labelledby="name-label"
                aria-invalid="false">
            </div>

            <div class="form-group">
              <label for="email" id="email-label">Email</label>
              <input 
                type="email" 
                id="email" 
                name="email" 
                required 
                aria-required="true"
                aria-labelledby="email-label"
                aria-invalid="false">
            </div>

            <div class="form-group">
              <label for="message" id="message-label">Message</label>
              <textarea 
                id="message" 
                name="message" 
                rows="5" 
                required
                aria-required="true"
                aria-labelledby="message-label"
                aria-invalid="false"></textarea>
            </div>

            <button type="submit" aria-label="Send message">Send Message</button>
          </form>
        </div>
        <div class="image-container" role="img" aria-label="Fresh bread on display in our bakery">
          <img src="../../img/contact.webp" alt="Fresh bread on display" loading="lazy">
        </div>
      </div>
    </div>
  </main>

  <?php include '../../Components/Footer/index.php'; ?>

  <script>
    function handleSubmit(event) {
      event.preventDefault();

      // Get form elements
      const form = document.getElementById('contactForm');
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const messageInput = document.getElementById('message');

      // Show success message
      alert('Thank you for your message! We will get back to you soon.');

      // Clear form fields
      nameInput.value = '';
      emailInput.value = '';
      messageInput.value = '';

      // Announce to screen readers
      const announcement = document.createElement('div');
      announcement.setAttribute('role', 'status');
      announcement.setAttribute('aria-live', 'polite');
      announcement.textContent = 'Your message has been sent successfully.';
      document.body.appendChild(announcement);
      setTimeout(() => announcement.remove(), 5000);
    }

    // Add form validation feedback for accessibility
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input, textarea');
    
    inputs.forEach(input => {
      input.addEventListener('invalid', () => {
        input.setAttribute('aria-invalid', 'true');
      });
      
      input.addEventListener('input', () => {
        input.setAttribute('aria-invalid', 'false');
      });
    });
  </script>
</body>

</html>