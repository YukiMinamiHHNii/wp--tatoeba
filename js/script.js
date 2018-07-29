(
	(d)=>{
		const panel= document.querySelector('.Panel'),
			  panelBtn= document.querySelector('.Panel-btn');
		panelBtn.addEventListener('click', e=>{
			e.preventDefault;
			console.log(e);
			panel.classList.toggle('is-active');
			panelBtn.classList.toggle('is-active');
		});
	}
)(document, jQuery);

(
	(d, c, $)=>{
		const galleryLinks= d.querySelectorAll('.gallery a');
		c(galleryLinks);

		galleryLinks.forEach(link=>{
			link.dataset.fancybox= 'gallery';
		});

	}
)(document, console.log, jQuery);