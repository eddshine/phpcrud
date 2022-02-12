const modal = document.querySelector('.modal');
const hiddenModal = document.querySelectorAll('.hidden');
const overlay = document.querySelector('.overlay');
const closeModal = document.querySelector('.close-modal');
const showModal = document.querySelector('.addBtn');

function closingModal() {
      modal.classList.add('hidden');
    overlay.classList.add('hidden');
}

function openModal() {
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
}


showModal.addEventListener('click', openModal);
closeModal.addEventListener('click', closingModal);
overlay.addEventListener('click', closingModal);
document.addEventListener('keydown', function (event){
  if(event.key === 'Escape' && !modal.classList.contains('hidden')) {
    closingModal()
  }
  });
