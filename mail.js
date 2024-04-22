const demoForm = document.querySelector('#book-free-demo-form');

demoForm.addEventListener('submit', (e) => {
	const modal = document.querySelector('#bookDemoModal');
	const modalBackdrop = document.querySelector('.modal-backdrop');
	e.preventDefault();

	console.log(modalBackdrop);

	emailjs
		.sendForm(
			'service_gcb9m4h',
			'free_demo_dtichjq',
			e.target,
			'xdPEOYBrDe7YzJnVp'
		)
		.then(() => {
			modal.style.display = 'none';
			modalBackdrop.remove();
			window.alert('Mail sent!');
		})
		.catch(() => {
			window.alert('Something went wrong, Please try again.');
		});
});
