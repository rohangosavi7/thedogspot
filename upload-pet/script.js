const form = document.querySelector('form');
const petName = document.querySelector('#pet-name');
const petHeight = document.querySelector('#pet-height');
const petColor = document.querySelector('#pet-color');
const petDescription = document.querySelector('#pet-description');
const petImage = document.querySelector('#pet-image');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  if (petName.value.trim() === '') {
    alert('Please enter a pet name');
    petName.focus();
    return;
  }

  if (petHeight.value.trim() === '') {
    alert('Please enter a pet height');
    petHeight.focus();
    return;
  }

  if (petColor.value.trim() === '') {
    alert('Please enter a pet color');
    petColor.focus();
    return;
  }

  if (petDescription.value.trim() === '') {
    alert('Please enter a pet description');
    petDescription.focus();
    return;
  }

  if (petImage.files.length === 0) {
    alert('Please select a pet image');
    petImage.focus();
    return;
  }

  const file = petImage.files[0];
  const fileSize = file.size / 1024 / 1024; // in MB

  if (fileSize > 2) { // check if image is larger than 2MB
    alert('Image file size too large. Please select an image less than 2MB.');
    petImage.focus();
    return;
  }

  form.submit();
});
