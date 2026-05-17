
document.addEventListener("DOMContentLoaded", () => {
  // ---- Navbar scroll effect ----
  const navbar = document.getElementById("navbar");
  if (navbar) {
    window.addEventListener("scroll", () => {
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });
  }

  // ---- Hamburger menu ----
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("navLinks");
  const navOverlay = document.getElementById("navOverlay");

  function openMenu() {
    hamburger.classList.add("open");
    navLinks.classList.add("open");
    if (navOverlay) navOverlay.classList.add("open");
    document.body.style.overflow = "hidden";
  }
  function closeMenu() {
    hamburger.classList.remove("open");
    navLinks.classList.remove("open");
    if (navOverlay) navOverlay.classList.remove("open");
    document.body.style.overflow = "";
  }

  if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
      navLinks.classList.contains("open") ? closeMenu() : openMenu();
    });
    navLinks
      .querySelectorAll("a")
      .forEach((a) => a.addEventListener("click", closeMenu));
    if (navOverlay) navOverlay.addEventListener("click", closeMenu);
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeMenu();
    });
  }

  // ---- Scroll reveal ----
  const revealEls = document.querySelectorAll(".reveal");
  if (revealEls.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("visible");
            observer.unobserve(e.target);
          }
        });
      },
      { threshold: 0.08 },
    );
    revealEls.forEach((el) => observer.observe(el));

    setTimeout(() => {
      revealEls.forEach((el) => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          el.classList.add("visible");
        }
      });
    }, 100);
  }

  // ---- Counter animation ----
  const counters = document.querySelectorAll(".stat-num");
  if (counters.length) {
    const counterObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            const el = e.target;
            const target = parseInt(el.dataset.target, 10);
            const dur = 1600;
            const step = Math.ceil(target / (dur / 16));
            let current = 0;
            const timer = setInterval(() => {
              current += step;
              if (current >= target) {
                current = target;
                clearInterval(timer);
              }
              el.textContent = current;
            }, 16);
            counterObserver.unobserve(el);
          }
        });
      },
      { threshold: 0.5 },
    );
    counters.forEach((c) => counterObserver.observe(c));
  }

  // ---- Menu page: tab filtering ----
  const tabBtns = document.querySelectorAll(".tab-btn");
  const menuSections = document.querySelectorAll(".menu-section");
  if (tabBtns.length) {
    tabBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        tabBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        const target = btn.dataset.target;
        menuSections.forEach((sec) => {
          if (target === "all" || sec.id === target) {
            sec.style.display = "block";
          } else {
            sec.style.display = "none";
          }
        });
        const dividers = document.querySelectorAll(".menu-section-divider");
        if (target !== "all") {
          dividers.forEach((d) => (d.style.display = "none"));
        } else {
          dividers.forEach((d) => (d.style.display = "block"));
        }
      });
    });
  }

  // ---- Active nav link highlight ----
  const currentPage = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav-links a").forEach((a) => {
    const href = a.getAttribute("href");
    if (href === currentPage || (currentPage === "" && href === "index.html")) {
      a.classList.add("active");
    } else {
      a.classList.remove("active");
    }
  });

  // ---- Auth tabs ----
  const authTabs = document.querySelectorAll(".auth-tab");
  if (authTabs.length) {
    authTabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        authTabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");
        document
          .querySelectorAll(".auth-form")
          .forEach((f) => f.classList.remove("active"));
        document.getElementById(tab.dataset.form)?.classList.add("active");
      });
    });
  }

  // ---- Reservation form client-side validation ----
  const resForm = document.getElementById("reservationForm");
  if (resForm) {
    resForm.addEventListener("submit", (e) => {
      const date = resForm.querySelector('[name="date"]').value;
      const guests = resForm.querySelector('[name="guests"]').value;
      const today = new Date().toISOString().split("T")[0];
      if (date < today) {
        e.preventDefault();
        showFormError(resForm, "Please select a future date.");
        return;
      }
      if (guests < 1 || guests > 20) {
        e.preventDefault();
        showFormError(resForm, "Guest count must be between 1 and 20.");
        return;
      }
    });
  }

  // ---- Contact form client-side validation ----
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      const email = contactForm.querySelector('[name="email"]').value;
      if (!validateEmail(email)) {
        e.preventDefault();
        showFormError(contactForm, "Please enter a valid email address.");
      }
    });
  }

  // ---- Smooth scroll for anchor links ----
  document.querySelectorAll('a[href^="#"]').forEach((a) => {
    a.addEventListener("click", (e) => {
      const target = document.querySelector(a.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // ---- Add reveal class to key elements ----
  document
    .querySelectorAll(
      ".menu-card, .cat-card, .testi-card, .stat-item, .feat, .res-detail, .ci-item, .team-card",
    )
    .forEach((el) => {
      el.classList.add("reveal");
    });
  // Re-run observer after adding classes
  const newReveals = document.querySelectorAll(".reveal:not(.visible)");
  const obs2 = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          obs2.unobserve(e.target);
        }
      });
    },
    { threshold: 0.1 },
  );
  newReveals.forEach((el) => obs2.observe(el));
});

// ---- Helpers ----
function showFormError(form, msg) {
  let err = form.querySelector(".flash-msg.flash-error");
  if (!err) {
    err = document.createElement("div");
    err.className = "flash-msg flash-error";
    form.prepend(err);
  }
  err.textContent = msg;
  err.style.display = "block";
  setTimeout(() => {
    err.style.display = "none";
  }, 4000);
}
function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
