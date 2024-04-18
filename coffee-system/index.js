// // sidenav triggers

// function openNav() {
//     document.getElementById("mySidenav").style.width = "250px";
//     // document.querySelector("i").classList.add("scrolled");
// }

// function closeNav() {
//     document.getElementById("mySidenav").style.width = "0";
// }

// // shop scrollspy
// const scrollHot = document.getElementById('scrollspy1');
// const scrollIced = document.getElementById('scrollspy2');
// const scrollFrappe = document.getElementById('scrollspy3');
// const scrollFruit= document.getElementById('scrollspy4');
// const scrollMilktea= document.getElementById('scrollspy5');



// scrollHot.addEventListener('click', () => {
//   const targetSection = document.getElementById('hot-sig');

//   targetSection.scrollIntoView({ behavior: 'smooth' });
// });

// scrollIced.addEventListener('click', () => {
//     const targetSection = document.getElementById('iced-coffee');
  
//     targetSection.scrollIntoView({ behavior: 'smooth' });
// });

// scrollFrappe.addEventListener('click', () => {
//   const targetSection = document.getElementById('frappe');

//   targetSection.scrollIntoView({ behavior: 'smooth' });
// });

// scrollFruit.addEventListener('click', () => {
//   const targetSection = document.getElementById('fruit-tea');

//   targetSection.scrollIntoView({ behavior: 'smooth' });
// });

// scrollMilktea.addEventListener('click', () => {
//     const targetSection = document.getElementById('milktea');
  
//     targetSection.scrollIntoView({ behavior: 'smooth' });
// });


document.addEventListener('DOMContentLoaded', function() {
  // Get the anchor tag with id "orderNow"
  const orderLink = document.querySelector('.main-nav .container-nav .orderNow');

  // Attach a click event listener to the "order-now" link
  orderLink.addEventListener('click', function(e) {
      e.preventDefault();

      // Get the target section ID from the href attribute
      const target = this.getAttribute('href');

      // Calculate the offset (adjust for fixed navbar height if needed)
      const offset = document.querySelector('#nav').offsetHeight;

      // Scroll smoothly to the target section
      window.scrollTo({
          top: document.querySelector(target).offsetTop - offset,
          behavior: 'smooth'
      });
  });
});



// Get references to the comboboxes
const firstComboBox = document.getElementById('category');
const secondComboBox = document.getElementById('flavors');

// Define the options for each section
const sectionOptions = {
  milkteaSec: ['Taro', 'Matcha', 'Okinawa', 'Hokkaido', 'Chocolate', 'Red velvet', 'Cheesecake', 'Dark-choco', 'Strawberry', 'Choco-kisses', 'Brown sugar', 'Wintermelon', 'Salted Caramel', 'Choco Hazelnut', 'Cookies and Cream'],
  icedSec: ['Mocha', 'Matcha', 'Hazelnut', 'Macchiato', 'Americano', 'White Choco', 'Choco Fudge', 'Butterscotch', 'Salted Caramel'],
  fruitteaSec: ['Melon', 'Lemon', 'Mango', 'Lychee', 'Blueberry', 'Wildberry', 'Strawberry', 'Green Apple', 'Four Seasons', 'Passion Fruit'],
  frappeSec: ['Taro', 'Melon', 'Vanilla', 'Purple Yam', 'Frapucinno', 'Mochaccino', 'Choco Fudge', 'Choco Kisses', 'Double Dutch', 'Creamy Avocado', 'Cookies and Cream', 'Strawberries and Cream'],
  hotSignatures: ['Matcha', 'Hot Choco', 'Capuccino', ' White Mocha', 'Blended Americano', 'Caramel Macchiato'],

};

// Function to update the second combobox based on the selected section
function updateSecondComboBox() {
  const selectedSection = firstComboBox.value;
  const optionsList = sectionOptions[selectedSection];

  if (!optionsList) {
      console.error(`Section "${selectedSection}" not found in sectionOptions.`);
      return;
  }

  // Clear existing options
  secondComboBox.innerHTML = "";

  optionsList.forEach((optionText) => {
      const option = document.createElement('option');
      option.textContent = optionText; // Fix the typo here (use "=" instead of "-")
      secondComboBox.appendChild(option);
  });
}


// Listen for changes in the first combobox
firstComboBox.addEventListener('change', updateSecondComboBox);

// Initial update
updateSecondComboBox();


// function updateSecondComboBox() {
//   const selectedSection = firstComboBox.value;
//   const optionsList = sectionOptions[selectedSection];

//   if (!optionsList) {
//       console.error(`Section "${selectedSection}" not found in sectionOptions.`);
//       return;
//   }

//   // Clear existing options
//   secondComboBox.innerHTML = "";

//   optionsList.forEach((optionText) => {
//       const option = document.createElement('option');
//       option.textContent = optionText; // Fix the typo here (use "=" instead of "-")
//       secondComboBox.appendChild(option);
//   });
// }
