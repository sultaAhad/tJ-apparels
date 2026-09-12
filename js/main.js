gsap.registerPlugin(ScrollTrigger);
// banner Card Aniamtion
if (document.querySelector(".banner______wrapper")) {
	gsap.fromTo(
		".banner______wrapper",
		{ opacity: 0, y: 40, filter: "blur(10px)" },
		{
			opacity: 1,
			y: 0,
			filter: "blur(0px)",
			duration: 1,
			stagger: 0.15,
			ease: "power3.out",
			scrollTrigger: {
				trigger: ".banner_____cards_____wrapper",
				start: "top 85%",
				toggleActions: "play reverse play reverse",
			},
		},
	);
}
// banner Card Aniamtion

// collection Image Animation
document.querySelectorAll(".collection_____image").forEach((card) => {
	const image = card.querySelector("img");
	card.addEventListener("mousemove", (e) => {
		const rect = card.getBoundingClientRect();
		const x = (e.clientX - rect.left) / rect.width - 0.5;
		const y = (e.clientY - rect.top) / rect.height - 0.5;
		gsap.to(image, {
			x: x * 40,
			y: y * 40,
			scale: 1.12,
			rotationY: x * 15,
			rotationX: -y * 15,
			transformPerspective: 1500,
			duration: 0.5,
			ease: "power3.out",
		});
	});
	card.addEventListener("mouseleave", () => {
		gsap.to(image, {
			x: 0,
			y: 0,
			scale: 1,
			rotationX: 0,
			rotationY: 0,
			duration: 1,
			ease: "expo.out",
		});
	});
});
// collection Image Animation

// collection cards Animaition
gsap.utils.toArray(".collection_____wrapper").forEach((card, i) => {
	gsap.from(card, {
		scrollTrigger: {
			trigger: card,
			start: "top 85%",
		},

		x: i % 2 ? 60 : -60,
		y: 60,
		opacity: 0,
		scale: 0.9,
		duration: 0.75,
		ease: "expo.out",
	});
});
// collection cards Animaition

// Cursor Animation
gsap.set(".ball", { xPercent: -50, yPercent: -50 });
let targets = gsap.utils.toArray(".ball");
window.addEventListener("mousemove", (e) => {
	gsap.to(targets, {
		duration: 0.25,
		x: e.clientX + 30,
		y: e.clientY + 10,
		ease: "none",
		overwrite: "auto",
	});
});
$(".target-heading").on("mouseenter", function () {
	gsap.to(targets, {
		scale: 10,
		backgroundColor: "rgba(255,255,255,0.9)",
		backdropFilter: "blur(10px)",
		duration: 0.3,
		ease: "power2.out",
	});
	gsap.to(this, {
		color: "#ffffff",
		duration: 0.2,
	});
});
$(".target-heading").on("mouseleave", function () {
	gsap.to(targets, {
		scale: 1,
		backgroundColor: "var(--secondary-color)",
		backdropFilter: "blur(0px)", // remove blur
		duration: 0.3,
		ease: "power2.out",
	});
	gsap.to(this, {
		color: "#ffffff",
		duration: 0.2,
	});
});
// Cursor Animation

// Loader JS
// $(window).on("load", function () {
// 	$(".preloader").fadeOut(1500);
// });

// Loader JS

// header Nav active
$(document).ready(function () {
	let currentUrl = window.location.href;

	$(".header-link").each(function () {
		let linkUrl = this.href;

		if (currentUrl === linkUrl) {
			$(this).addClass("active");
		}
	});
});

// collection Slider
$(".collection_____slider").slick({
	slidesToShow: 1,
	autoplay: true,
	arrows: false,
	dots: true,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				slidesToShow: 1,
			},
		},
	],
});
// collection Slider

window.addEventListener("load", () => {
	ScrollTrigger.refresh();
});

// categories Card Animation
gsap.utils.toArray(".categories_____wrapper").forEach((card) => {
	const number = card.querySelector(".categories____icon");
	const title = card.querySelector("h3");
	const desc = card.querySelector("p");
	const btn = card.querySelector(".browse_____icon");
	const tl = gsap.timeline({
		scrollTrigger: {
			trigger: card,
			start: "top 85%",
			toggleActions: "play none none reverse",
		},
	});
	tl.fromTo(
		card,
		{
			y: 60,
			opacity: 0,
			scale: 0.96,
		},
		{
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 1,
			ease: "power4.out",
		},
	);
	if (number) {
		tl.fromTo(
			number,
			{
				scale: 0,
				rotate: -180,
			},
			{
				scale: 1,
				rotate: 0,
				duration: 0.8,
				ease: "back.out(2)",
			},
			"-=0.6",
		);
	}
	if (title) {
		tl.fromTo(
			title,
			{
				y: 25,
				opacity: 0,
			},
			{
				y: 0,
				opacity: 1,
				duration: 0.7,
				ease: "power3.out",
			},
			"-=0.5",
		);
	}
	if (desc) {
		tl.fromTo(
			desc,
			{
				y: 20,
				opacity: 0,
			},
			{
				y: 0,
				opacity: 1,
				duration: 0.7,
				ease: "power3.out",
			},
			"-=0.5",
		);
	}
	if (btn) {
		tl.fromTo(
			btn,
			{
				scale: 0,
				rotate: -45,
			},
			{
				scale: 1,
				rotate: 0,
				duration: 0.6,
				ease: "back.out(2)",
			},
			"-=0.4",
		);
	}
});
document.querySelectorAll(".categories_____wrapper").forEach((card) => {
	const number = card.querySelector(".categories____icon h4");
	const arrow = card.querySelector(".browse_____icon");
	card.addEventListener("mouseenter", () => {
		gsap.to(card, {
			y: -10,
			duration: 0.35,
			ease: "power2.out",
		});
		if (number) {
			gsap.to(number, {
				scale: 1.1,
				duration: 0.3,
			});
		}
		if (arrow) {
			gsap.to(arrow, {
				x: 6,
				rotate: 45,
				duration: 0.3,
				ease: "power2.out",
			});
		}
	});
	card.addEventListener("mouseleave", () => {
		gsap.to(card, {
			y: 0,
			duration: 0.35,
			ease: "power2.out",
		});
		if (number) {
			gsap.to(number, {
				scale: 1,
			});
		}
		if (arrow) {
			gsap.to(arrow, {
				x: 0,
				rotate: 0,
			});
		}
	});
});
// categories Card Animation

$(".testi_____slider").slick({
	dots: true,
	arrow: true,
	infinite: true,
	speed: 500,
	autoplay: true,
	slidesToShow: 1,
	slidesToScroll: 1,
});

// otp JS
function moveToNext(current, nextFieldId) {
	current.value = current.value.replace(/[^0-9]/g, "");

	if (current.value.length === 1) {
		document.getElementById(nextFieldId)?.focus();
	}
}
// otp JS

// dashboard function
$(".toggler-btn").click(function () {
	let toHide = $(this).attr("to-hide");
	let toShow = $(this).attr("to-show");
	$(toHide).addClass("d-none");
	$(toShow).removeClass("d-none");
});
// dashboard function

// password hide show JS
$(".shop-password").click(function () {
	let currentType = $(this).siblings("input").attr("type");
	if (currentType == "password") {
		$(this).siblings("input").attr("type", "text");
		$(this).children("i").addClass("fa-eye-slash");
		$(this).children("i").removeClass("fa-eye");
	} else {
		$(this).siblings("input").attr("type", "password");
		$(this).children("i").removeClass("fa-eye-slash");
		$(this).children("i").addClass("fa-eye");
	}
});
// password hide show JS

$(document).on("click", ".search_____toggle", function (e) {
	e.preventDefault();

	$(".header_____search").stop(true, true).slideToggle(150);
});

$(document).on("click", ".header_____search_____close", function () {
	$(".header_____search").stop(true, true).slideUp(150);
});

document.addEventListener("DOMContentLoaded", () => {
	const qtyBoxes = document.querySelectorAll(".cart____qty____box");

	qtyBoxes.forEach((box) => {
		const minusBtn = box.querySelector(".cart____qty____btn:first-child");
		const plusBtn = box.querySelector(".cart____qty____btn:last-child");
		const countSpan = box.querySelector("span");

		minusBtn.addEventListener("click", () => {
			let currentValue = parseInt(countSpan.textContent, 10);
			if (currentValue > 1) {
				countSpan.textContent = currentValue - 1;
			}
		});

		plusBtn.addEventListener("click", () => {
			let currentValue = parseInt(countSpan.textContent, 10);
			countSpan.textContent = currentValue + 1;
		});
	});
});

document.querySelectorAll(".address-card").forEach((card) => {
	card.addEventListener("click", function (e) {
		// Edit aur Delete buttons par default switch block karna
		if (
			e.target.tagName === "BUTTON" &&
			!e.target.classList.contains("set-default-btn")
		) {
			return;
		}

		// Remove default state from all cards
		document.querySelectorAll(".address-card").forEach((c) => {
			c.classList.remove("active-default");
			c.querySelector(".default-active-tag").classList.add("d-none");
			c.querySelector(".set-default-btn").classList.remove("d-none");
		});

		// Set clicked card as active default
		this.classList.add("active-default");
		this.querySelector(".default-active-tag").classList.remove("d-none");
		this.querySelector(".set-default-btn").classList.add("d-none");
	});
});