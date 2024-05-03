document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
  
    menuToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      navMenu.classList.toggle('active');
    });
  });

// // JavaScript để thêm sự kiện click cho nút menu toggle
// document.addEventListener('DOMContentLoaded', function() {
//     const menuToggle = document.querySelector('.menu-toggle');
    
//     menuToggle.addEventListener('click', function() {
//       // Toggle lớp 'active' cho nút menu toggle
//       menuToggle.classList.toggle('active');
//     });
//   });
  

  