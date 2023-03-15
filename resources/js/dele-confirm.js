const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    const confirm = window.confirm(`Are you sure you want to delete this project?`);
    if (confirm) form.submit();
  });
});