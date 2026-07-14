const boxes = document.querySelectorAll('.box_instru');

boxes.forEach((box) => {

  box.addEventListener('mouseenter', () => {
    box.style.transform = 'rotate(40deg)';
  });


  box.addEventListener('mouseleave', () => {
    box.style.transform = 'rotate(0deg)';
  });
});
