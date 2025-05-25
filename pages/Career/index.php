<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/footerStyles.css">
  <link rel="stylesheet" href="../../css/careerStyles.css">
  <link rel="stylesheet" href="../../css/headerStyles.css">
  <link rel="stylesheet" href="../../css/modalStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Career - Luca Loaves Bakery</title>
</head>

<body>
  <?php include '../../Components/Header/index.php'; ?>
  <?php include '../../Components/MenuModal/index.php'; ?>

  <div class="container">
    <h1>Join Our Team</h1>

    <div class="content-container">
      <div class="form-container">
        <p>
          Are you passionate about baking and creating delicious treats? We're always looking for talented individuals to join our team. Fill out the form below to apply for a position with us.
        </p>
        <form id="careerForm" onsubmit="handleSubmit(event)">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="position">Position of Interest</label>
            <select id="position" name="position" required>
              <option value="">Select a position</option>
              <option value="baker">Baker</option>
              <option value="pastry_chef">Pastry Chef</option>
              <option value="sales_associate">Sales Associate</option>
              <option value="kitchen_helper">Kitchen Helper</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Cover Letter</label>
            <textarea id="message" name="message" rows="5" required placeholder="Tell us about yourself and why you'd like to join our team"></textarea>
          </div>

          <div class="form-group file-upload">
            <label for="cv">Upload Your CV (PDF, DOC, or DOCX)</label>
            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            <div class="file-name" id="fileName">No file chosen</div>
          </div>

          <button type="submit">Submit Application</button>
        </form>
      </div>
      <div class="image-container">
        <img src="../../img/career.webp" alt="Baker working in kitchen">
      </div>
    </div>
  </div>

  <?php include '../../Components/Footer/index.php'; ?>

  <script>
    // Update file name display when file is selected
    document.getElementById('cv').addEventListener('change', function(e) {
      const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
      document.getElementById('fileName').textContent = fileName;
    });

    function handleSubmit(event) {
      event.preventDefault();

      // Get form elements
      const form = document.getElementById('careerForm');
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const positionInput = document.getElementById('position');
      const messageInput = document.getElementById('message');
      const fileInput = document.getElementById('cv');

      // Show success message
      alert('Thank you for your application! We will review it and get back to you soon.');

      // Clear form fields
      nameInput.value = '';
      emailInput.value = '';
      positionInput.value = '';
      messageInput.value = '';
      fileInput.value = '';
      document.getElementById('fileName').textContent = 'No file chosen';
    }
  </script>
</body>

</html> 