const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}


const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");

}

 //slide show

let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.querySelectorAll('.slides img');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

function plusSlides(n) {
    slideIndex += n;
    showSlides();
}


// Form validations

// function validateForm() {
//     var firstName = document.getElementById("firstName").value.trim();
//     var lastName = document.getElementById("lastName").value.trim();
//     var email = document.getElementById("email").value.trim();
//     var comments = document.getElementById("comments").value.trim();

//     var isValid = true;

//     if (firstName === "") {
//         isValid = false;
//         document.getElementById("firstName").classList.add("error");
//     } else {
//         document.getElementById("firstName").classList.remove("error");
//     }

//     if (lastName === "") {
//         isValid = false;
//         document.getElementById("lastName").classList.add("error");
//     } else {
//         document.getElementById("lastName").classList.remove("error");
//     }

//     if (email === "") {
//         isValid = false;
//         document.getElementById("email").classList.add("error");
//     } else {
//         document.getElementById("email").classList.remove("error");
//     }

//     if (comments === "") {
//         isValid = false;
//         document.getElementById("comments").classList.add("error");
//     } else {
//         document.getElementById("comments").classList.remove("error");
//     }

//     return isValid;
// }


// add search grid

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const movieGrid = document.getElementById("movieGrid");
    const removeSelectedBtn = document.getElementById("removeSelected");

    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.toLowerCase();

        // Clear previous search results
        movieGrid.innerHTML = "";

        // Filter movies based on search term
        const filteredMovies = movies.filter(movie =>
            movie.title.toLowerCase().includes(searchTerm)
        );

        // Display filtered movies in the grid
        filteredMovies.forEach(movie => {
            const item = document.createElement("div");
            item.classList.add("item2");
            item.innerHTML = `
                <input type="checkbox" class="movieCheckbox" data-title="${movie.title}">
                <img src="${movie.image}" alt="${movie.title}">
                <h2>${movie.title}</h2>
                <p>${movie.description}</p>
            `;
            movieGrid.appendChild(item);
        });
    });

    // Event listener for remove selected button
    removeSelectedBtn.addEventListener("click", function() {
        const checkboxes = document.querySelectorAll(".movieCheckbox:checked");

        checkboxes.forEach(checkbox => {
            const title = checkbox.dataset.title;
            const item = checkbox.closest(".item2");
            item.remove();
            console.log("Removed:", title);
        });
    });
});

// Sample movie data for demonstration
const movies = [
    {
        'image': 'images/movie-img-1.png',
        'title': 'Batman Returns',
        'description': 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…'
    },
    {
        'image': 'images/movie-img-2.png',
        'title': 'Wild Wild West',
        'description': 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…'
    },
    {
        'image': 'images/movie-img-3.png',
        'title': 'The Amazing Spiderman',
        'description': 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…'
    }
];
