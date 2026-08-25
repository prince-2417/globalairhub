// Set today's date for native fallback (optional)
const dateInputs = document.querySelectorAll(
  'input[name="depart_date"], input[name="return_date"]',
);
const today = new Date().toISOString().split("T")[0];

dateInputs.forEach((input) => {
  if (!input.value) input.value = today;
  input.addEventListener("click", function () {
    // Try native picker (if browser supports)
    if (this.showPicker) this.showPicker();
  });
});

// Initialize flatpickr while keeping any date selected on the previous page.
document.querySelectorAll("#date1, #date2").forEach((input) => {
  flatpickr(input, {
    dateFormat: "Y-m-d",
    defaultDate: input.value || "today",
  });
});

/* ======= Paasenger & class Function ======== */
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector(".traveler-input");
  const wrapper = input.parentNode;

  // Create dropdown
  const dropdown = document.createElement("div");
  dropdown.className = "traveler-dropdown";
  dropdown.innerHTML = `
    <div class="traveler-row">
      <span>Adults</span>
      <div class="traveler-counter">
        <button type="button" class="minus" data-type="adults">-</button>
        <span class="count" id="adults-count">1</span>
        <button type="button" class="plus" data-type="adults">+</button>
      </div>
    </div>
    <div class="traveler-row">
      <span>Children</span>
      <div class="traveler-counter">
        <button type="button" class="minus" data-type="children">-</button>
        <span class="count" id="children-count">0</span>
        <button type="button" class="plus" data-type="children">+</button>
      </div>
    </div>
    <div class="traveler-row">
      <span>Infants</span>
      <div class="traveler-counter">
        <button type="button" class="minus" data-type="infants">-</button>
        <span class="count" id="infants-count">0</span>
        <button type="button" class="plus" data-type="infants">+</button>
      </div>
    </div>
    <div class="traveler-row">
      <span>Class</span>
    </div>
    <select class="class-select" id="travelClass">
      <option value="Economy">Economy</option>
      <option value="Premium Economy">Premium Economy</option>
      <option value="Business">Business</option>
      <option value="First Class">First Class</option>
    </select>
    <button class="done-btn">Done</button>
  `;
  wrapper.appendChild(dropdown);

  // Initialize counts
  let passengers = { adults: 1, children: 0, infants: 0 };
  let selectedClass = "Economy";

  // Open dropdown
  input.addEventListener("click", function () {
    dropdown.classList.toggle("active");
  });

  // Plus buttons
  dropdown.querySelectorAll(".traveler-counter .plus").forEach((btn) => {
    btn.addEventListener("click", function () {
      const type = btn.getAttribute("data-type");
      passengers[type] = parseInt(passengers[type]) || 0;
      if (type === "adults" && passengers.adults < 9) passengers.adults++;
      if (type === "children" && passengers.children < 9) passengers.children++;
      if (type === "infants" && passengers.infants < 9) passengers.infants++;
      document.getElementById(type + "-count").innerText = passengers[type];
    });
  });

  // Minus buttons
  dropdown.querySelectorAll(".traveler-counter .minus").forEach((btn) => {
    btn.addEventListener("click", function () {
      const type = btn.getAttribute("data-type");
      passengers[type] = parseInt(passengers[type]) || 0;
      if (type === "adults" && passengers.adults > 1) passengers.adults--;
      if (type === "children" && passengers.children > 0) passengers.children--;
      if (type === "infants" && passengers.infants > 0) passengers.infants--;
      document.getElementById(type + "-count").innerText = passengers[type];
    });
  });

  // Class select
  dropdown
    .querySelector("#travelClass")
    .addEventListener("change", function (e) {
      selectedClass = e.target.value;
    });

  // Done button
  dropdown.querySelector(".done-btn").addEventListener("click", function (e) {
    e.preventDefault();
    const totalPassengers =
      passengers.adults + passengers.children + passengers.infants;
    input.value =
      totalPassengers +
      " Passenger" +
      (totalPassengers > 1 ? "s" : "") +
      ", " +
      selectedClass;
    dropdown.classList.remove("active");
  });

  // Close on outside click
  document.addEventListener("click", function (e) {
    if (!wrapper.contains(e.target)) {
      dropdown.classList.remove("active");
    }
  });

  // Keep the value submitted from the previous page; use the default for a new search only.
  if (!input.value) input.value = "1 Passenger, Economy";
});

// ======= Trip Type Toggle Function ========
document.addEventListener("DOMContentLoaded", function () {
  const tripTypeRadios = document.querySelectorAll('input[name="tripType"]');
  const returnDateBox = document.getElementById("returnDateBox");

  function toggleReturnDate() {
    const selectedTrip = document.querySelector(
      'input[name="tripType"]:checked',
    ).value;
    if (selectedTrip === "oneway") {
      returnDateBox.style.display = "none"; // hide return date
    } else {
      returnDateBox.style.display = "block"; // show return date
    }
  }

  // Initialize on page load
  toggleReturnDate();

  // Listen for changes
  tripTypeRadios.forEach((radio) => {
    radio.addEventListener("change", toggleReturnDate);
  });
});

// ======== Airport Search Suggestions =========
document.addEventListener("DOMContentLoaded", function () {
  let airports = [];

  // Load airport.json
  fetch("airport.json")
    .then((res) => res.json())
    .then((data) => {
      airports = data;
    });

  function createDropdown(input) {
    let parent = input.parentNode;

    let dropdown = document.createElement("div");
    dropdown.className = "airport-dropdown";
    dropdown.style.display = "none";

    parent.style.position = "relative";
    parent.appendChild(dropdown);

    input.addEventListener("keyup", function () {
      let value = input.value.toLowerCase().trim();

      if (value.length < 1) {
        dropdown.style.display = "none";
        return;
      }

      let results = airports
        .filter((a) => {
          return (
            (a.name && a.name.toLowerCase().includes(value)) ||
            (a.code && a.code.toLowerCase().includes(value)) ||
            (a.city_code && a.city_code.toLowerCase().includes(value))
          );
        })
        .slice(0, 15);

      dropdown.innerHTML = "";

      if (results.length === 0) {
        dropdown.style.display = "none";
        return;
      }

      results.forEach((airport) => {
        let item = document.createElement("div");
        item.className = "airport-item";

        item.innerHTML = `<span class="airport-code"> ${airport.code}</span>
${airport.name} (${airport.city_code})`;

        item.addEventListener("click", function () {
          input.value = `${airport.name} (${airport.code})`;
          dropdown.style.display = "none";
        });

        dropdown.appendChild(item);
      });

      dropdown.style.display = "block";
    });

    document.addEventListener("click", function (e) {
      if (!parent.contains(e.target)) {
        dropdown.style.display = "none";
      }
    });
  }

  // Apply to both inputs
  createDropdown(document.getElementById("fromAirport"));
  createDropdown(document.getElementById("toAirport"));
});



