function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function signup() {
    alert("bloop");
}

function onReady() {
    const currentPage = document.body.dataset.page;
    if (currentPage === 'home') {
        var header = document.getElementById("navigation");
        header.style.position = 'absolute'
    }
    if (currentPage === 'team') {
        fetchTeamData();
    } else if (currentPage === 'faq') {
        fetchFAQData();
    }
}

if (document.readyState !== "loading") {
    onReady(); // Or setTimeout(onReady, 0); if you want it consistently async
} else {
    document.addEventListener("DOMContentLoaded", onReady);
}


function fetchTeamData() {
    fetch('/assets/team_info.json')
        .then(response => response.json())
        .then(file => {
            const people = document.getElementById('people');
            file.forEach(data => {
                // create container
                const container = document.createElement('div');
                container.className = "people-container";
                people.appendChild(container);

                // create heading
                const heading = document.createElement('div');
                heading.className = 'people-heading';
                container.appendChild(heading);

                // create image
                const imageContainer = document.createElement('div');
                imageContainer.className = 'profile-container';
                heading.appendChild(imageContainer);

                const image = document.createElement('img');
                image.src = data.picture;
                imageContainer.appendChild(image);

                // create text content div
                const textcontent = document.createElement('div');
                textcontent.classList = 'text-content';
                heading.appendChild(textcontent);

                // create title
                const title = document.createElement('div');
                title.className = 'title';
                title.innerText = data.name;
                textcontent.appendChild(title);

                // create position
                const position = document.createElement('div');
                position.className = 'position';
                position.innerText = data.position;
                textcontent.appendChild(position);

                // create services
                const services = document.createElement('div');
                services.className = 'services';
                services.innerText = data.services;
                textcontent.appendChild(services);

                // create blurb
                const blurb = document.createElement('div');
                blurb.className = 'blurb';
                blurb.innerText = data.blurb;
                container.appendChild(blurb);
            });
        })
        .catch(error => {
            console.error('Error loading the team data:', error);
        });
}
function fetchFAQData() {
    fetch('/assets/faq.json')
        .then(response => response.json())
        .then(file => {
            const faq = document.getElementById('faq-two');
            file.forEach(data => {
                // create title
                const question = document.createElement('div');
                question.className = 'question';
                question.innerText = data.q;
                faq.appendChild(question);

                // create position
                const answer = document.createElement('p');
                answer.className = 'answer';
                answer.innerText = data.a;
                faq.appendChild(answer);
            });
        })
        .catch(error => {
            console.error('Error loading the faq data:', error);
        });
}

