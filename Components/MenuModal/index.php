<div class="modal-container">
  <nav>
    <div class="nav-content">
      <div>
        <i class="fa fa-close" style="font-size:24px"></i>
      </div>

      <ul>
        <li>
          <a href="/luca">Home</a>
        </li>
        <li>
          <a href="/luca/pages/Shop/index.php">Shop</a>
        </li>
        <li>
          <a href="#career">Career</a>
        </li>
        <li>
          <a href="#About">About Us</a>
        </li>
        <li>
          <a href="#Contact">Contact</a>
        </li>
        <li>
          <a href="/luca/pages/MyCart/index.php">My cart</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<script>
  const menuIcon = document.querySelector('.menu-icon');
  const modalContainer = document.querySelector('.modal-container');

  menuIcon.addEventListener('click', () => {
    modalContainer.classList.toggle('active');
  });

  const closeIcon = document.querySelector('.fa-close');
  closeIcon.addEventListener('click', () => {
    modalContainer.classList.remove('active');
  });
</script>