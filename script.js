import 'boxicons'

let popup = document.getElementById('popup');

function openPopup() {
	popup.classList.add('open-popup');
}

function closePopup() {
	popup.classList.remove('open-popup');
}

document.addEventListener('DOMContentLoaded', function () {
	// Membuat fungsi umum untuk scroll ke bagian target
	function scrollToSection(targetId) {
		const targetSection = document.getElementById(targetId);

		if (targetSection) {
			window.scrollTo({
				top:
					targetSection.offsetTop -
					document.querySelector('header').offsetHeight,
				behavior: 'smooth',
			});
		}
	}

	// Menambahkan event listener untuk semua tautan navigasi
	const navLinks = document.querySelectorAll('.menu-link');

	navLinks.forEach(function (link) {
		link.addEventListener('click', function (event) {
			event.preventDefault();
			const targetId = this.getAttribute('href').substring(1);
			scrollToSection(targetId);
		});
	});
});
