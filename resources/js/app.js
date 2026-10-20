import './bootstrap';

const themeToggle = document.querySelector('[data-theme-toggle]');
const setTheme = (theme) => {
	document.documentElement.dataset.theme = theme;
	const nextTheme = theme === 'dark' ? 'light' : 'dark';
	themeToggle?.setAttribute('aria-label', `Switch to ${nextTheme} theme`);
};

setTheme(document.documentElement.dataset.theme === 'dark' ? 'dark' : 'light');
themeToggle?.addEventListener('click', () => {
	const nextTheme = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
	localStorage.setItem('akash-tourism-theme', nextTheme);
	setTheme(nextTheme);
});

const heroCarousel = document.querySelector('[data-destination-carousel]');
if (heroCarousel) {
	const slides = [
		{ image: 'photo-1587474260584-136574528ed5', title: 'THE CAPITAL OF CONTRASTS', location: 'Delhi, India' },
		{ image: 'photo-1564507592333-c60657eea523', title: 'THE GOLDEN HOUR', location: 'Agra, Uttar Pradesh' },
		{ image: 'photo-1595815771614-ade9d652a65d', title: 'WHERE THE EARTH EXHALES', location: 'Jammu & Kashmir, India' },
		{ image: 'photo-1626621341517-bbf3d9990a23', title: 'TAKE THE SCENIC ROUTE', location: 'Himachal Pradesh, India' },
	];
	let currentSlide = 0;
	const heroImage = heroCarousel.querySelector('.hero-slide-image');
	const number = document.querySelector('[data-carousel-number]');
	const title = document.querySelector('[data-carousel-title]');
	const location = document.querySelector('[data-carousel-location]');
	const imageUrl = (id, width) => `https://images.unsplash.com/${id}?auto=format&fit=crop&w=${width}&q=76`;
	const showSlide = (slide, index) => {
		heroCarousel.style.opacity = '0';
		heroCarousel.style.transform = 'translateX(28px)';
		const revealSlide = () => {
			if (number) number.textContent = String(index + 1).padStart(2, '0');
			if (title) title.textContent = slide.title;
			if (location) location.textContent = slide.location;
			window.requestAnimationFrame(() => {
				heroCarousel.style.opacity = '1';
				heroCarousel.style.transform = 'translateX(0)';
			});
		};
		if (!heroImage) {
			heroCarousel.style.opacity = '1';
			return;
		}
		heroImage.onload = revealSlide;
		heroImage.onerror = () => {
			heroCarousel.style.opacity = '1';
			heroCarousel.style.transform = 'translateX(0)';
		};
		heroImage.srcset = `${imageUrl(slide.image, 480)} 480w, ${imageUrl(slide.image, 800)} 800w, ${imageUrl(slide.image, 1200)} 1200w`;
		heroImage.src = imageUrl(slide.image, 800);
	};
	if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		let carouselInterval;
		const startCarousel = () => {
			if (carouselInterval || document.hidden) return;
			carouselInterval = window.setInterval(() => {
				currentSlide = (currentSlide + 1) % slides.length;
				showSlide(slides[currentSlide], currentSlide);
			}, 5000);
		};
		const stopCarousel = () => {
			window.clearInterval(carouselInterval);
			carouselInterval = undefined;
		};
		if ('IntersectionObserver' in window) {
			const carouselObserver = new IntersectionObserver(([entry]) => {
				if (entry.isIntersecting) startCarousel();
				else stopCarousel();
			});
			carouselObserver.observe(heroCarousel);
		} else {
			startCarousel();
		}
		document.addEventListener('visibilitychange', () => {
			if (document.hidden) stopCarousel();
			else startCarousel();
		});
	}
}

const deferredBackgrounds = document.querySelectorAll('[data-bg-image]');
if ('IntersectionObserver' in window) {
	const backgroundObserver = new IntersectionObserver((entries, observer) => {
		entries.forEach((entry) => {
			if (!entry.isIntersecting) return;
			entry.target.style.backgroundImage = `url("${entry.target.dataset.bgImage}")`;
			observer.unobserve(entry.target);
		});
	}, { rootMargin: '300px' });
	deferredBackgrounds.forEach((element) => backgroundObserver.observe(element));
} else {
	deferredBackgrounds.forEach((element) => {
		element.style.backgroundImage = `url("${element.dataset.bgImage}")`;
	});
}

document.querySelectorAll('.site-footer > span').forEach((copyright) => {
	copyright.textContent = copyright.textContent.replace('2024', '2026');
});

const contactSuccessPopup = document.querySelector('[data-contact-success-popup]');
if (contactSuccessPopup) {
	const handleContactSuccessKeydown = (event) => {
		if (event.key === 'Escape') closeContactSuccessPopup();
	};
	const closeContactSuccessPopup = () => {
		document.removeEventListener('keydown', handleContactSuccessKeydown);
		contactSuccessPopup.remove();
	};
	contactSuccessPopup.querySelector('.contact-success-popup-close')?.addEventListener('click', closeContactSuccessPopup);
	contactSuccessPopup.querySelector('.contact-success-popup-dismiss')?.addEventListener('click', closeContactSuccessPopup);
	contactSuccessPopup.addEventListener('click', (event) => {
		if (event.target === contactSuccessPopup) closeContactSuccessPopup();
	});
	document.addEventListener('keydown', handleContactSuccessKeydown);
	contactSuccessPopup.querySelector('.contact-success-popup-close')?.focus();
}

document.querySelector('[data-enquiry-trigger]')?.addEventListener('click', (event) => {
	const trigger = event.currentTarget;
	const popup = document.createElement('div');
	popup.className = 'enquiry-popup';
	popup.setAttribute('role', 'dialog');
	popup.setAttribute('aria-modal', 'true');
	popup.setAttribute('aria-labelledby', 'enquiry-popup-title');
	popup.innerHTML = `<div class="enquiry-popup-panel"><button class="enquiry-popup-close" type="button" aria-label="Close enquiry form">×</button><p class="eyebrow dark"><span></span> A little planning goes a long way</p><h2 id="enquiry-popup-title">Where will you<br><em>wander?</em></h2><p class="enquiry-popup-intro">Tell us what you are dreaming about and we will help shape the first step.</p><form class="enquiry-popup-form"><label for="popup-name">Your name</label><input id="popup-name" name="name" type="text" placeholder="What should we call you?" required><label for="popup-email">Email address</label><input id="popup-email" name="email" type="email" placeholder="you@example.com" required><label for="popup-message">Your travel idea</label><textarea id="popup-message" name="message" rows="3" placeholder="A place, a feeling, a date..."></textarea><button class="primary-button" type="submit">Start a conversation <span>↗</span></button><p class="enquiry-popup-status" aria-live="polite"></p></form></div>`;
	document.body.appendChild(popup);
	const previousBodyOverflow = document.body.style.overflow;
	document.body.style.overflow = 'hidden';
	const closePopup = () => {
		document.removeEventListener('keydown', handlePopupKeydown);
		document.body.style.overflow = previousBodyOverflow;
		popup.remove();
		trigger.focus();
	};
	const handlePopupKeydown = (keyEvent) => {
		if (keyEvent.key === 'Escape') closePopup();
	};
	popup.querySelector('.enquiry-popup-close')?.addEventListener('click', closePopup);
	popup.addEventListener('click', (clickEvent) => {
		if (clickEvent.target === popup) closePopup();
	});
	document.addEventListener('keydown', handlePopupKeydown);
	popup.querySelector('input')?.focus();
	popup.querySelector('form')?.addEventListener('submit', async (submitEvent) => {
		submitEvent.preventDefault();
		const form = submitEvent.currentTarget;
		const status = form.querySelector('.enquiry-popup-status');
		const button = form.querySelector('button[type="submit"]');
		button.disabled = true;
		status.textContent = 'Sending your enquiry...';
		try {
			const response = await fetch('/contact', { method: 'POST', headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '', Accept: 'application/json' }, body: new FormData(form) });
			if (!response.ok) throw new Error('Unable to send');
			status.textContent = 'Thanks. Your enquiry has been sent.';
			window.setTimeout(closePopup, 1800);
		} catch (error) {
			button.disabled = false;
			status.textContent = 'We could not send that just yet. Please try again.';
		}
	});
});

document.querySelectorAll('.desktop-nav, .mobile-nav').forEach((navigation) => {

	if (!navigation.querySelector('a[href="/contact"]')) {
		const contactLink = document.createElement('a');
		contactLink.href = '/contact';
		contactLink.textContent = 'Contact';
		navigation.appendChild(contactLink);
	}
});

document.querySelectorAll('.footer-links > div:first-child').forEach((siteLinks) => {
	if (!siteLinks.querySelector('a[href="/contact"]')) {
		const contactLink = document.createElement('a');
		contactLink.href = '/contact';
		contactLink.textContent = 'Contact';
		siteLinks.appendChild(contactLink);
	}
});

const menuToggle = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');

menuToggle?.addEventListener('click', () => {
	const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
	menuToggle.setAttribute('aria-expanded', String(!isOpen));
	mobileNav?.classList.toggle('open', !isOpen);
});

document.querySelectorAll('.mobile-nav a').forEach((link) => {
	link.addEventListener('click', () => {
		menuToggle?.setAttribute('aria-expanded', 'false');
		mobileNav?.classList.remove('open');
	});
});

document.querySelectorAll('.filter-chip').forEach((chip) => {
	chip.addEventListener('click', () => {
		document.querySelectorAll('.filter-chip').forEach((item) => item.classList.remove('active'));
		chip.classList.add('active');
		const filter = chip.dataset.filter;
		document.querySelectorAll('.destination-card').forEach((card) => {
			card.classList.toggle('is-hidden', filter !== 'all' && !card.dataset.category?.includes(filter));
		});
	});
});

document.querySelectorAll('.save-button').forEach((button) => {
	button.addEventListener('click', () => {
		button.classList.toggle('saved');
		button.textContent = button.classList.contains('saved') ? '♥' : '♡';
		const savedCount = document.querySelector('.saved-link span');
		if (savedCount) savedCount.textContent = String(document.querySelectorAll('.save-button.saved').length);
	});
});

const searchModal = document.querySelector('.search-modal');
const searchInput = document.querySelector('#destination-search');
const openSearch = () => {
	if (!searchModal) return;
	searchModal.hidden = false;
	searchInput?.focus();
};
document.querySelector('[data-search-trigger]')?.addEventListener('click', openSearch);
document.querySelector('.modal-close')?.addEventListener('click', () => { if (searchModal) searchModal.hidden = true; });
searchModal?.addEventListener('click', (event) => { if (event.target === searchModal) searchModal.hidden = true; });
document.querySelector('[data-search-form]')?.addEventListener('submit', (event) => {
	event.preventDefault();
	const result = document.querySelector('.search-result');
	const value = searchInput?.value.trim();
	if (result) result.textContent = value ? `We found a feeling for “${value}”. Try one of our featured places below.` : 'Type a place or a feeling to begin.';
});
